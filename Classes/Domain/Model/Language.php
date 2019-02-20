<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameId = '';

    public function getNameId(): string
    {
        return $this->nameId;
    }

    public function setNameId(string $nameId): void
    {
        $this->nameId = $nameId;
    }
}
