<?php
/** @author troussos **/

namespace elevate\HVObjects\Thing;

use JMS\Serializer\Annotation\XmlRoot;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

use elevate\TypeTranslator;
use elevate\HVObjects\Thing\Thing;

/** @XmlRoot("thing") */

class WeightMeasurement extends Thing
{

    /**
     * @var array elevate\HVObjects\Thing\DataXML\WeightMeasurementDataXML
     * @Type("elevate\HVObjects\Thing\DataXML\WeightMeasurementDataXML")
     * @SerializedName("data-xml")
     */
    protected $dataXML;

    /**
     * @param $dataXML
     */
    public function __construct($dataXML = NULL)
    {
        $typeID = TypeTranslator::lookupTypeID('Weight Measurement');
        parent::__construct($dataXML,$typeID);
    }
} 