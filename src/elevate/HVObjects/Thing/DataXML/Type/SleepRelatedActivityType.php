<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bnissen
 * Date: 11/4/13
 * Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */

namespace elevate\HVObjects\Thing\DataXML\Type;

use elevate\HVObjects\Generic\CodableValue;
use elevate\HVObjects\Generic\Date\DateTime;
use elevate\HVObjects\Generic\Date\Time;
use elevate\HVObjects\Generic\Activity;
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

/** @XmlRoot("sleep-pm") */
class SleepRelatedActivityType
{

    /**
     * @Type("elevate\HVObjects\Generic\Date\DateTime")
     */
    protected $when;

    /**
     * @Type("elevate\HVObjects\Generic\Date\Time")
     */
    protected $caffeine;

    /**
     * @Type("elevate\HVObjects\Generic\Date\Time")
     */
    protected $alcohol;

    /**
     * @Type("elevate\HVObjects\Generic\Activity")
     */
    protected $nap;

    /**
     * @Type("elevate\HVObjects\Generic\Activity")
     */
    protected $exercise;

    /**
     * @Type("integer")
     */
    protected $sleepiness;

    function __construct(
        DateTime $when = NULL,
        Time $caffeine = NULL,
        Time $alcohol = NULL,
        Activity $nap = NULL,
        Activity $exercise = NULL,
        $sleepiness = NULL
    )
    {
        $this->when         = $when;
        $this->caffeine     = $caffeine;
        $this->alcohol      = $alcohol;
        $this->nap          = $nap;
        $this->exercise     = $exercise;
        $this->sleepiness   = $sleepiness;

    }

    /**
     * @param mixed $alcohol
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;
    }

    /**
     * @return mixed
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @param mixed $caffeine
     */
    public function setCaffeine($caffeine)
    {
        $this->caffeine = $caffeine;
    }

    /**
     * @return mixed
     */
    public function getCaffeine()
    {
        return $this->caffeine;
    }

    /**
     * @param mixed $exercise
     */
    public function setExercise($exercise)
    {
        $this->exercise = $exercise;
    }

    /**
     * @return mixed
     */
    public function getExercise()
    {
        return $this->exercise;
    }

    /**
     * @param mixed $nap
     */
    public function setNap($nap)
    {
        $this->nap = $nap;
    }

    /**
     * @return mixed
     */
    public function getNap()
    {
        return $this->nap;
    }

    /**
     * @param mixed $sleepiness
     */
    public function setSleepiness($sleepiness)
    {
        $this->sleepiness = $sleepiness;
    }

    /**
     * @return mixed
     */
    public function getSleepiness()
    {
        return $this->sleepiness;
    }

    /**
     * @param mixed $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }

    /**
     * @return mixed
     */
    public function getWhen()
    {
        return $this->when;
    }


}