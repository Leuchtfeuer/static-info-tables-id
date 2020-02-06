<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (ID)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

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
