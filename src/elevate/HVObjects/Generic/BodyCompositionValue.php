<?php
/** @author troussos **/

namespace elevate\HVObjects\Generic;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlMap;
use JMS\Serializer\Annotation\XmlRoot;

use elevate\HVObjects\Generic\WeightValue;

class BodyCompositionValue 
{
    /**
     * @Type("elevate\HVObjects\Generic\WeightValue")
     * @SerializedName("mass-value")
     */
    protected $massValue = null;

    /**
     * @Type("double")
     * @SerializedName("percent-value")
     */
    protected $percentValue = null;

    /**
     * @param WeightValue $massValue
     * @param             $percentValue
     */
    public function __construct(WeightValue $massValue, $percentValue)
    {
        $this->massValue = $massValue;
        $this->percentValue = $percentValue;
    }

    /**
     * @param mixed $massValue
     */
    public function setMassValue($massValue)
    {
        $this->massValue = $massValue;
    }

    /**
     * @return mixed
     */
    public function getMassValue()
    {
        return $this->massValue;
    }

    /**
     * @param mixed $percentValue
     */
    public function setPercentValue($percentValue)
    {
        $this->percentValue = $percentValue;
    }

    /**
     * @return mixed
     */
    public function getPercentValue()
    {
        return $this->percentValue;
    }


}

