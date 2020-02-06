<?php
declare(strict_types = 1);
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en' => 'cu_name_id',
        'cu_sub_name_en' => 'cu_sub_name_id',
    ];

    \Bitmotion\StaticInfoTablesId\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_currencies');
unset($initialize);
