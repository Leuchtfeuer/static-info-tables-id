<?php
declare(strict_types=1);
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
    public function setShortNameId(string $shortNameId): void
    {
        $this->shortNameId = $shortNameId;
    }
}
