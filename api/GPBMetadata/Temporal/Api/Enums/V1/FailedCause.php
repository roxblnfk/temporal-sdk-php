<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/failed_cause.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class FailedCause
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9110a2874656d706f72616c2f6170692f656e756d732f76312f6661696c65645f63617573652e70726f746f121574656d706f72616c2e6170692e656e756d732e76312ad80b0a17576f726b666c6f775461736b4661696c65644361757365122a0a26574f524b464c4f575f5441534b5f4641494c45445f43415553455f554e535045434946494544100012300a2c574f524b464c4f575f5441534b5f4641494c45445f43415553455f554e48414e444c45445f434f4d4d414e441001123f0a3b574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f5343484544554c455f41435449564954595f41545452494255544553100212450a41574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f524551554553545f43414e43454c5f41435449564954595f41545452494255544553100312390a35574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f53544152545f54494d45525f415454524942555445531004123a0a36574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f43414e43454c5f54494d45525f415454524942555445531005123b0a37574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f5245434f52445f4d41524b45525f41545452494255544553100612490a45574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f434f4d504c4554455f574f524b464c4f575f455845435554494f4e5f41545452494255544553100712450a41574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f4641494c5f574f524b464c4f575f455845435554494f4e5f41545452494255544553100812470a43574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f43414e43454c5f574f524b464c4f575f455845435554494f4e5f41545452494255544553100912580a54574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f524551554553545f43414e43454c5f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f41545452494255544553100a123d0a39574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f434f4e54494e55455f41535f4e45575f41545452494255544553100b12370a33574f524b464c4f575f5441534b5f4641494c45445f43415553455f53544152545f54494d45525f4455504c49434154455f4944100c12360a32574f524b464c4f575f5441534b5f4641494c45445f43415553455f52455345545f535449434b595f5441534b5f5155455545100d12400a3c574f524b464c4f575f5441534b5f4641494c45445f43415553455f574f524b464c4f575f574f524b45525f554e48414e444c45445f4641494c555245100e12470a43574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f5349474e414c5f574f524b464c4f575f455845435554494f4e5f41545452494255544553100f12430a3f574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f53544152545f4348494c445f455845435554494f4e5f41545452494255544553101012320a2e574f524b464c4f575f5441534b5f4641494c45445f43415553455f464f5243455f434c4f53455f434f4d4d414e44101112350a31574f524b464c4f575f5441534b5f4641494c45445f43415553455f4641494c4f5645525f434c4f53455f434f4d4d414e44101212340a30574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f5349474e414c5f494e5055545f53495a451013122d0a29574f524b464c4f575f5441534b5f4641494c45445f43415553455f52455345545f574f524b464c4f57101412290a25574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f42494e4152591015123d0a39574f524b464c4f575f5441534b5f4641494c45445f43415553455f5343484544554c455f41435449564954595f4455504c49434154455f4944101612340a30574f524b464c4f575f5441534b5f4641494c45445f43415553455f4241445f5345415243485f4154545249425554455310172aae010a2653746172744368696c64576f726b666c6f77457865637574696f6e4661696c65644361757365123b0a3753544152545f4348494c445f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f554e535045434946494544100012470a4353544152545f4348494c445f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f574f524b464c4f575f414c52454144595f45584953545310012ac8010a2a43616e63656c45787465726e616c576f726b666c6f77457865637574696f6e4661696c65644361757365123f0a3b43414e43454c5f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f554e535045434946494544100012590a5543414e43454c5f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4e4f545f464f554e4410012ac8010a2a5369676e616c45787465726e616c576f726b666c6f77457865637574696f6e4661696c65644361757365123f0a3b5349474e414c5f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f554e535045434946494544100012590a555349474e414c5f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4641494c45445f43415553455f45585445524e414c5f574f524b464c4f575f455845435554494f4e5f4e4f545f464f554e441001426c0a18696f2e74656d706f72616c2e6170692e656e756d732e763142104661696c6564436175736550726f746f50015a21676f2e74656d706f72616c2e696f2f6170692f656e756d732f76313b656e756d73ea021854656d706f72616c3a3a4170693a3a456e756d733a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
