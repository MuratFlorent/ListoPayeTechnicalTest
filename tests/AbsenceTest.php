<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AbsenceTest extends TestCase
{
    /**
     * @covers
     */
    public function testAbsenceInPeriod()
    {

        $absence1 = new \ThePHPWebsite\Entity\Absence();
        $absence1->setStartDateTime(new DateTime(date('Y-m-01')));
        $absence1->setEndDateTime(new DateTime(date('Y-m-15 23:59:59')));

        $absence2 = new \ThePHPWebsite\Entity\Absence();
        $absence2->setStartDateTime(new DateTime(date('Y-m-28')));
        $testDay = new DateTime(date('Y-m-12'));
        $absence2->setEndDateTime($testDay->modify('+1 month'));

        $testDayStart = new DateTime(date('Y-m-18'));
        $testDayEnd   = new DateTime(date('Y-m-29'));

        $absence3 = new \ThePHPWebsite\Entity\Absence();
        $absence3->setStartDateTime($testDayStart->modify('-1 month'));
        $absence3->setEndDateTime($testDayEnd->modify('-1 month'));

        $testDayStart = new DateTime(date('Y-m-02'));
        $testDayEnd   = new DateTime(date('Y-m-29'));

        $absence4 = new \ThePHPWebsite\Entity\Absence();
        $absence4->setStartDateTime($testDayStart->modify('+1 month'));
        $absence4->setEndDateTime($testDayEnd->modify('+1 month'));

        $testDayStart = new DateTime(date('Y-m-01 00:00:00'));
        $testDayEnd   = new DateTime(date('Y-m-05'));

        $absence5 = new \ThePHPWebsite\Entity\Absence();
        $absence5->setStartDateTime($testDayStart->modify('+1 month'));
        $absence5->setEndDateTime($testDayEnd->modify('+1 month'));

        $testDayStart = new DateTime(date('Y-m-20'));
        $testDayEnd   = new DateTime(date('Y-m-d 23:59:59'));

        $absence6 = new \ThePHPWebsite\Entity\Absence();
        $absence6->setStartDateTime($testDayStart);
        $absence6->setEndDateTime($testDayEnd->modify('last day of this month'));

        /** @var \ThePHPWebsite\ListoPayePeriod $listoPAyPeriod */
        $listoPAyPeriod = new \ThePHPWebsite\ListoPayePeriod();

        self::assertTrue($listoPAyPeriod->isInclusDansPeriode($absence1));
        self::assertTrue($listoPAyPeriod->isInclusDansPeriode($absence2));
        self::assertFalse($listoPAyPeriod->isInclusDansPeriode($absence3));
        self::assertFalse($listoPAyPeriod->isInclusDansPeriode($absence4));
        self::assertFalse($listoPAyPeriod->isInclusDansPeriode($absence5));
        self::assertTrue($listoPAyPeriod->isInclusDansPeriode($absence6));
    }
}