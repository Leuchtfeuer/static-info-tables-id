<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (ID)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameId' => [
                'fieldName' => 'cn_short_id',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameId' => [
                'fieldName' => 'cu_name_id',
            ],
            'subdivisionNameId' => [
                'fieldName' => 'cu_sub_name_id',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameId' => [
                'fieldName' => 'cu_name_id',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameId' => [
                'fieldName' => 'cu_name_id',
            ],
        ],
    ],
];
