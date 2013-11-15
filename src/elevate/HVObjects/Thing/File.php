<?php

namespace elevate\HVObjects\Thing;


use JMS\Serializer\Annotation\XmlRoot;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

use elevate\TypeTranslator;
use elevate\HVObjects\Thing\Thing;
use elevate\HVObjects\Thing\DataXML\FileDataXML;
use elevate\HVObjects\Generic\DataOther;


/** @XmlRoot("file") */
class File extends Thing
{
    /**
     * @var array elevate\HVObjects\Thing\DataXML\FileDataXML
     * @Type("elevate\HVObjects\Thing\DataXML\FileDataXML")
     * @SerializedName("data-xml")
     */
    protected $dataXML;

    /**
     * @var \elevate\HVObjects\Generic\DataOther
     * @Type("elevate\HVObjects\Generic\DataOther")
     * @SerializedName("data-other")
     */
    protected $dataOther;


    function __construct($dataXML)
    {
        $typeID = TypeTranslator::lookupTypeID('File');
        parent::__construct($dataXML,$typeID);
    }



}