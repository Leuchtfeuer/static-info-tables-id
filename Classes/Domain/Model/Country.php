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

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameId = '';

    /**
     * @return string
     */
    public function getShortNameId(): string
    {
        return $this->shortNameId;
    }

    /**
     * @param string $shortNameId
     */
    public function setShortNameId(string $shortNameId)
    {
        $this->shortNameId = $shortNameId;
    }
}
