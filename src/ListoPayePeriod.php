<?php

declare(strict_types=1);

namespace ThePHPWebsite;

use ThePHPWebsite\Entity\Absence;

class ListoPayePeriod
{

    /**
     * @param Absence $absence
     * @return bool
     */
    public function isInclusDansPeriode(Absence $absence): bool
    {
        $startDateTime        = $absence->getStartDateTime();
        $endDateTime          = $absence->getEndDateTime();
        $firstDateOfTheMonth  = new \DateTime(date('Y-m-d 00:00:00'));
        $firstDateOfnextMonth = new \DateTime(date('Y-m-d 00:00:00'));

        $firstDayOfMonth     = $firstDateOfTheMonth->modify('first day of this month');
        $firstDayOfNextMonth = $firstDateOfnextMonth->modify('first day of next month');

        //forcement premier jour de l'absence inclus dans le mois ou dernier jours de l'absence inclus dans le mois
        if (($startDateTime < $firstDayOfMonth && $endDateTime < $firstDayOfMonth) || ($startDateTime >= $firstDayOfNextMonth && $endDateTime >= $firstDayOfNextMonth)) {
            return false;
        }

        return true;
    }
}