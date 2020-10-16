<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Server;

use Psr\Log\LoggerInterface;
use React\EventLoop\LoopInterface;
use React\Socket\ConnectionInterface;
use Temporal\Client\Worker\Uuid4;

final class BasicConnection extends Connection
{
    /**
     * @param LoopInterface $loop
     * @param ConnectionInterface $connection
     * @param LoggerInterface $logger
     * @throws \JsonException
     */
    public function __construct(LoopInterface $loop, ConnectionInterface $connection, LoggerInterface $logger)
    {
        parent::__construct($loop, $connection, $logger);

        $this->process(function () {
            return $this->start();
        });
    }

    /**
     * @throws \JsonException
     */
    private function start(): \Generator
    {
        // Fetch info from client
        $result = yield $this->request('GetWorkerInfo');

        // Execute workflows
        foreach ($result['workflows'] as $workflow) {
            $info = [
                'wid'       => 'WorkflowId<' . Uuid4::create() . '>',
                'rid'       => 'WorkflowRunId<' . Uuid4::create() . '>',
                'taskQueue' => 'WorkerTaskQueue<' . Uuid4::create() . '>',
            ];

            foreach ($workflow['queries'] ?? [] as $query) {
                $this->request('InvokeQueryMethod', \array_merge($info, [
                    'name'      => $query
                ]));
            }

            foreach ($workflow['signals'] ?? [] as $signal) {
                $this->request('InvokeSignalMethod', \array_merge($info, [
                    'name'      => $signal,
                    'payload'   => [1, 2, 3],
                ]));
            }

            $info = yield $this->request('StartWorkflow', \array_merge($info, [
                'name'      => $workflow['name'],
                'payload'   => [1, 2, 3],
            ]));
        }
    }

    protected function onCommand(string $name)
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }
}
