<?php
declare(strict_types=1);
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
    public function setNameId(string $nameId): void
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
    public function setSubdivisionNameId(string $subdivisionNameId): void
    {
        $this->subdivisionNameId = $subdivisionNameId;
    }
}
