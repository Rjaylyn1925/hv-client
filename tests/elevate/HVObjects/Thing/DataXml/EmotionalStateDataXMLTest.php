<?php
/** @author troussos **/

namespace elevate\test\HVObjects\Thing\DataXml;

use elevate\HVObjects\Thing\DataXML\EmotionalStateDataXML;
use elevate\test\HVObjects\BaseObjectTest;
use elevate\HVObjects\Generic\CodableValue;
use elevate\HVObjects\Generic\Date\DateTime;
use elevate\HVObjects\Thing\DataXML\Type\EmotionalStateType;
use elevate\HVObjects\Generic\Date\Date;
use elevate\HVObjects\Generic\Date\Time;
use elevate\HVObjects\Generic\CodedValue;
use elevate\HVObjects\Generic\Common;

class EmotionalStateDataXMLTest extends BaseObjectTest
{

    public static function setUpBeforeClass()
    {
        self::$sampleXMLPath = __DIR__ . '/../../SampleXML/Thing/DataXml/EmotionalState.xml';
        self::$objectNamespace = 'elevate\HVObjects\Thing\DataXml\EmotionalStateDataXML';

        $codes = new CodedValue('-5', 'tz');

        $date = new Date('2013', '11', '5');
        $time = new Time('10', '25', '10');
        $tz = new CodableValue('Eastern US', array($codes));

        $when = new DateTime($date, $time, $tz);

        $emotionalStateType = new EmotionalStateType('3', '4', '1', $when);

        $common = new Common('EmotionalState Note', 'EmotionalState Test', 'Some tags');

        self::$testObject = new EmotionalStateDataXML($emotionalStateType, $common);
        parent::setUpBeforeClass();
    }

}
 