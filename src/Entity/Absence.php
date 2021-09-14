<?php

namespace ThePHPWebsite\Entity;

/**
 * Class Absence
 * @package ThePHPWebsite\Entity
 */
class Absence
{
    /**
     * @var \DateTime $startDateTime
     */
    protected $startDateTime;

    /**
     * @var \DateTime $endDateTime
     */
    protected $endDateTime;

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * @param \DateTime $startDateTime
     */
    public function setStartDateTime(\DateTime $startDateTime): void
    {
        $this->startDateTime = $startDateTime;
    }

    /**
     * @param \DateTime $endDateTime
     */
    public function setEndDateTime(\DateTime $endDateTime): void
    {
        $this->endDateTime = $endDateTime;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime(): \DateTime
    {
        return $this->endDateTime;
    }
}