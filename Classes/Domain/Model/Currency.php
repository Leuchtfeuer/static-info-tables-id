<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameId = '';

    protected $subdivisionNameId = '';

    public function getNameId(): string
    {
        return $this->nameId;
    }

    public function setNameId(string $nameId): void
    {
        $this->nameId = $nameId;
    }

    public function getSubdivisionNameId(): string
    {
        return $this->subdivisionNameId;
    }

    public function setSubdivisionNameId(string $subdivisionNameId): void
    {
        $this->subdivisionNameId = $subdivisionNameId;
    }
}
