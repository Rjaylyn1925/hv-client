<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bnissen
 * Date: 11/6/13
 * Time: 3:07 PM
 * To change this template use File | Settings | File Templates.
 */

namespace elevate\HVObjects\MethodObjects\Get;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlMap;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\AccessorOrder;
use  elevate\HVObjects\MethodObjects\ThingFilterSpec;
use  elevate\HVObjects\MethodObjects\ThingFormatSpec;

/** @XmlRoot("group")
 * @AccessorOrder("custom", custom = {"ids", "clientThingIds", "filter", "format", "currentVersionOnly"})
 */

class RequestGroup
{

    /**
     * @XmlAttribute
     * @Type("string")
     */
    private $name = NULL;

    /**
     * @XmlAttribute
     * @Type("integer")
     */
    private $max = NULL;

    /**
     * @XmlAttribute
     * @Type("integer")
     * @SerializedName("max-full")
     */
    private $maxFull = NULL;

    /**
     * @var elevate\HVObjects\MethodObjects\ThingFilterSpec
     * @Type("elevate\HVObjects\MethodObjects\ThingFilterSpec")
     */
    protected $filter;

    /**
     * @var elevate\HVObjects\MethodObjects\ThingFormatSpec
     * @Type("elevate\HVObjects\MethodObjects\ThingFormatSpec")
     */
    protected $format;

    /**
     * @Type("array<string>")
     * @XmlList(inline=true, entry="id")
     */
    protected $ids;

    /**
     * @Type("array<string>")
     * @XmlList(inline=true, entry="client-thing-id")
     */
    protected $clientThingIds;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("current-version-only")
     */
    protected $currentVersionOnly = NULL;

    public function __construct(
        ThingFilterSpec $filter = NULL,
        ThingFormatSpec $format = NULL,
        $max = NULL,
        $maxFull = NULL,
        $name = NULL,
        $currentVersionOnly = NULL
    )
    {
        $this->currentVersionOnly = $currentVersionOnly;
        $this->filter = $filter;
        $this->format = $format;
        $this->max = $max;
        $this->maxFull = $maxFull;
        $this->name = $name;
    }

    /**
     * @param boolean $currentVersionOnly
     */
    public function setCurrentVersionOnly($currentVersionOnly)
    {
        $this->currentVersionOnly = $currentVersionOnly;
    }

    /**
     * @return boolean
     */
    public function getCurrentVersionOnly()
    {
        return $this->currentVersionOnly;
    }

    /**
     * @param \elevate\HVObjects\MethodObjects\elevate\HVObjects\MethodObjects\ThingFilterSpec $filter
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return \elevate\HVObjects\MethodObjects\elevate\HVObjects\MethodObjects\ThingFilterSpec
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param \elevate\HVObjects\MethodObjects\elevate\HVObjects\MethodObjects\ThingFormatSpec $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return \elevate\HVObjects\MethodObjects\elevate\HVObjects\MethodObjects\ThingFormatSpec
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $maxFull
     */
    public function setMaxFull($maxFull)
    {
        $this->maxFull = $maxFull;
    }

    /**
     * @return mixed
     */
    public function getMaxFull()
    {
        return $this->maxFull;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
    * @return mixed
    */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @return mixed
     */
    public function getClientThingIds()
    {
        return $this->clientThingIds;
    }

    /**
     * @param mixed $clientThingIds
     */
    public function setClientThingIds($clientThingIds)
    {
        $this->clientThingIds = $clientThingIds;
    }
}