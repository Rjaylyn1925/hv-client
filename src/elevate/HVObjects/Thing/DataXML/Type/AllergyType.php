<?php
/**
 * @author arkzero
 */
namespace elevate\HVObjects\Thing\DataXML\Type;

use elevate\HVObjects\Generic\CodableValue;
use elevate\HVObjects\Generic\Person;
use elevate\HVObjects\Generic\Date\DateTime;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlMap;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use PhpCollection\Map;
use PhpCollection\Sequence;


/** @XmlRoot("allergy") */
class AllergyType
{

    /**
     * @Type("elevate\HVObjects\Generic\CodableValue")
     * @SerializedName("name")
     */
    protected $name;

    /**
     * @Type("elevate\HVObjects\Generic\CodableValue")
     * @SerializedName("reaction")
     */
    protected $reaction;

    /**
     * @Type("elevate\HVObjects\Generic\Date\DateTime")
     * @SerializedName("first-observed")
     */
    protected $firstObserved;

    /**
     * @Type("elevate\HVObjects\Generic\CodableValue")
     * @SerializedName("allergen-type")
     */
    protected $allergenType;

    /**
     * @Type("elevate\HVObjects\Generic\CodableValue")
     * @SerializedName("allergen-code")
     */
    protected $allergenCode;

    /**
     * @Type("elevate\HVObjects\Generic\Person")
     * @SerializedName("treatment-provider")
     */
    protected $treatmentProvider;

    /**
     * @Type("elevate\HVObjects\Generic\CodableValue")
     * @SerializedName("treatment")
     */
    protected $treatment;

    /**
     * @Type("boolean")
     * @SerializedName("is-negated")
     */
    protected $isNegated;

    function __construct(
        CodableValue $name,
        CodableValue $reaction,
        DateTime $firstObserved,
        CodableValue $allergenType,
        CodableValue $allergenCode,
        Person $treatmentProvider,
        CodableValue $treatment,
        $isNegated
    )
    {
        $this->name = $name;
        $this->reaction = $reaction;
        $this->firstObserved = $firstObserved;
        $this->allergenType = $allergenType;
        $this->allergenCode = $allergenCode;
        $this->treatmentProvider = $treatmentProvider;
        $this->treatment = $treatment;
        $this->isNegated = $isNegated;
    }
}