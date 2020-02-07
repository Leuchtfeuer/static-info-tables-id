<?php
declare(strict_types = 1);
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesId\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cu_name_en' => 'cu_name_id', 'cu_sub_name_en' => 'cu_sub_name_id'],
    'static_currencies'
);
