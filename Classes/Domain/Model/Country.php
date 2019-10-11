<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameId = '';

    public function getShortNameId(): string
    {
        return $this->shortNameId;
    }

    public function setShortNameId(string $shortNameId): void
    {
        $this->shortNameId = $shortNameId;
    }
}
