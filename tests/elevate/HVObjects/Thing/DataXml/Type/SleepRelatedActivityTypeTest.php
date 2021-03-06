<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bnissen
 * Date: 11/4/13
 * Time: 3:10 PM
 * To change this template use File | Settings | File Templates.
 */

namespace elevate\test\HVObjects\Thing\DataXML\Type;


use elevate\HVObjects\Generic\Activity;
use elevate\HVObjects\Generic\Date\DateTime;
use elevate\HVObjects\Generic\Date\Time;
use elevate\HVObjects\Generic\Date\Date;
use elevate\HVObjects\Thing\DataXML\Type\SleepRelatedActivityType;
use elevate\test\HVObjects\BaseObjectTest;

class SleepRelatedActivityTypeTest extends BaseObjectTest
{
    public static function setUpBeforeClass ()
    {
        self::$sampleXMLPath    = __DIR__ . "/../../../SampleXML/Thing/DataXml/Type/SleepRelatedActivityType.xml";
        self::$objectNamespace  = 'elevate\HVObjects\Thing\DataXml\Type\SleepRelatedActivityType';

        // When
        $whenDate = new Date(2013, 6, 20);
        $whenTime = new Time(5, 16, 50, 23);
        $when = new DateTime($whenDate, $whenTime);

        $caffeine = new Time(5, 16, 50, 23);

        $alcohol = new Time(5, 16, 50, 23);

        // Nap
        $napDate = new Date(2013, 6, 20);
        $napTime = new Time(5, 16, 50, 23);
        $napWhen = new DateTime($napDate, $napTime);
        $nap= new Activity($napWhen, 10);

        // Exercise
        $exerciseDate = new Date(2013, 6, 20);
        $exerciseTime = new Time(5, 16, 50, 23);
        $exerciseWhen = new DateTime($exerciseDate, $exerciseTime);
        $exercise = new Activity($exerciseWhen, 10);

        self::$testObject = new SleepRelatedActivityType(
            $when, $caffeine, $alcohol, $nap, $exercise, 3
        );

        parent::setUpBeforeClass();

    }
}