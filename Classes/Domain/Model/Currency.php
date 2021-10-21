<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (ID)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameId = '';

    /**
     * @var string
     */
    protected $subdivisionNameId = '';

    /**
     * @return string
     */
    public function getNameId(): string
    {
        return $this->nameId;
    }

    /**
     * @param string $nameId
     */
    public function setNameId(string $nameId)
    {
        $this->nameId = $nameId;
    }

    /**
     * @return string
     */
    public function getSubdivisionNameId(): string
    {
        return $this->subdivisionNameId;
    }

    /**
     * @param string $subdivisionNameId
     */
    public function setSubdivisionNameId(string $subdivisionNameId)
    {
        $this->subdivisionNameId = $subdivisionNameId;
    }
}
