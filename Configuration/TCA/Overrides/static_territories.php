<?php
declare(strict_types = 1);
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_id',
    ];

    \Bitmotion\StaticInfoTablesId\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_territories');
unset($initialize);
