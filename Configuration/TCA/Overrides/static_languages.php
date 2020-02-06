<?php
declare(strict_types = 1);
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_id',
    ];

    \Bitmotion\StaticInfoTablesId\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_languages');
unset($initialize);
