<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Territory extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameId = '';

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
}
