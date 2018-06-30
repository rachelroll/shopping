<?php

return [
    'alipay' => [
        'app_id'         => '2016091300503400',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvUeLR8wBvj5lbVcCCCggf5QAST5LgWzD7yBINstV7YguvvUMh6+3pzrPaR2ToWWRbhriqKjlaB+ej/HGruRqIyRZS4ywsYHgA1uncme2pMBKjPcS2U59KzHF0Tfgrwt2dJSMEDkoHMO2WRuZNX2aAq/sj6Ukzny75wfn4/48rxitsASZzgcGRItyRwkRrbv1J3tR4jvT+LIMPQRTjkx6swPKbcxtuyXp45FXuGq9alkAdgB0GYeTASPH1PdWV7P8Pjqaxsy8GxwFHhM6dLgvBu3ooLDhWyUGSdivEc+u3IWfHmJmPlt0swaKXqp4KqisKgUb2RTznRE7sW1zDSMRNQIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCaBx/1+IpmgLJJw2JLCWJ86HmB0RTPXFucdfhWt++0NUcj0SqkwRxdIaBB8KGO/pHJhaxbDtM6aPyXdAdRefjkwue7xyEDQYjRV6bPMbDPI7dOQOOhF9d0ScR0cDrRjDfVjj/PUzE5m9JD0Hs1I0SfLT5pMCa1UGdajOWp/IRZHw7e6OEBvGGXWJqlefeBU1Ns15jsTgt9dB/2O1A6gQPUxRYGQemMjZDVA/CbJD4o2F/YZiBuNUguFCtFBYQlSbZp7Zlqm+t4Z0qMuZ1lofU8H8Eh2M+WUNAEwMDeixnNmVC2VJqDKDGxupFVqOoULjsJr5Ssas8ruFF/JwbwreKbAgMBAAECggEANX3T87BlIEQBpuxb7oNL2OVDjXn3KCyDBEtT+4nVjVgTZLT3glAucYmEBmJzOR3fs4Tg3p6/bMGZN1/sSrd5YLjvkZ8OL/tKcKloHPy80rMsrdiLNR76jEAyId34D14K5feI4Y+awM8ErthwcXvWERG9Yvp99un9es0D1Y0EyY4dm24XOCuNPsoggL0fGSb+6kdKKFHlWFX63A3sSxJDU7RwM/F+VJ4iMHJTOcLmLfzf2OiquC1Qy2WEMo3qx04R9vSA1JUpNo2iINp8nxRsYKCaxXbeRqaqI5Hx3iPazIbkr+PxfkVGpJ0j6blSi/maMqK2NmmUI9YarMTgt+EBAQKBgQDQt9oO+8ik4P+van0iOV+hLGu9zVKPTe1ep1X8HK8UcfrHxt3gXmA8eNHjG6+qVKUn8ZCOihFbSpzGualvX8KzF+3nRu/72t6jj7hCr506pDU4G4CVCJSH72r72GP8TSzBs8mKxMB2u9hyDebY6K9M2T6TELi+w2OeezQ17FgEEQKBgQC866C9+gsSWWcN12dfyI7qS96InI1fdMaERvfzdtQz4qhtpa6EBxMRbd8MMTEXX4xqURkEEcLSyR7ax83ZUw9pe9udhWpGC/SIl1z8HzI4mhwTzKXAYqsWBylv5lMbKGb3UDDiMBEcqP7pH6gxrxfrzVDIdOpdSBeHKWLfc1q36wKBgBNhDrEXdbDBZ1wdMhMsapGnczWDS+gcXy7LsLMg4qyuTI+iClXbzWmv+iTxHCVfiJol1rs1XJkyW04kTPQXWxeP4Dn6HywuTT+4h25BqgKY3owgGZc83bWlaDSMCfSSIda2X78vt4MOu/ETE10OdcBX53R2OAEWWTiMzfM3x5BRAoGAO8EnqY9CGz6t6uHb757nHVJ8A6fIy42LEOHFoXtPaU3iyjOifF4keNnQt/GDPopZRnN6PyBDCBrXKIoUIQ41jL7BWxSM5bT4Vo/RuGlBoEeWY+jR8IUE6kW/pIYseSWRU95IZ/KeJvuJDUGXGIfyQAJD7/OTAYhA8N51SIobApsCgYEAr0VBgrcxSXUHArjnxg5StnjaEsq2IjIxgE5z/jYTNPBvlrkLwYetnyqJFlqJKMEMYzNgc3U1XDeBLi1j8GbgP8f3xt0mqKKV4j8UTe/12jd+VwGCkUrttLhJIDiCS3cHG3PyhPX3fzXzLpyZ+qqzBme7JY9A3V2gipVFvKIQIFk=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];