<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ofields
 * Date: 11/8/13
 * Time: 12:12 PM
 * To change this template use File | Settings | File Templates.
 */

namespace elevate\util;


use elevate\HVObjects\MethodObjects\Get\Info;
use elevate\HVObjects\MethodObjects\PersonInfo\HVGroup;
use elevate\HVObjects\MethodObjects\Get\RequestGroup;
use elevate\HVObjects\MethodObjects\ThingFilterSpec;
use elevate\HVObjects\MethodObjects\ThingFormatSpec;
use elevate\TypeTranslator;

class InfoHelper {


    static function getHvInfoForThingIds(array $ids, $groupName = null)
    {
        return new Info(array(self::getHVRequestGroupForIds($ids, $groupName)));
    }

    static function getHVInfoForThingName($thingName, $maxItems = 1, $groupName = null, $xpath = null)
    {
        $typeId = TypeTranslator::lookupTypeId($thingName);
        $group = self::getHVRequestGroupForTypeId($typeId, $maxItems, $groupName, $xpath);
        $info = new Info(array($group));
        return $info;
    }

    static function getHVInfoForTypeId($typeId, $maxItems = 1, $groupName = null, $xpath = null)
    {
        $group = self::getHVRequestGroupForTypeId($typeId, $maxItems, $groupName, $xpath);
        $info = new Info(array($group));
        return $info;
    }

    static function getHVRequestGroupForTypeId($typeId, $maxItems = 1, $groupName = null, $xpath = null, $startRangeDate = null, $endRangeDate = null)
    {
        $filter = new ThingFilterSpec($typeId, $xpath,$startRangeDate, $endRangeDate);
        $format = new ThingFormatSpec(array('core'));

        $group = new RequestGroup($filter, $format, $maxItems, $maxItems, $groupName);
        return $group;
    }

    static function getHVRequestGroupForThingName($thingName, $maxItems = 1, $groupName = null, $xpath = null, $startRangeDate = null, $endRangeDate = null)
    {
        $typeId = TypeTranslator::lookupTypeId($thingName);
        return self::getHVRequestGroupForTypeId($typeId, $maxItems, $groupName, $xpath,$startRangeDate, $endRangeDate );
    }

    static function getHVRequestGroupForThingBetweenDates($thingName, $startDate, $endDate, $maxItems = 1, $groupName = null, $xpath = null)
    {
        $typeId = TypeTranslator::lookupTypeId($thingName);

        $formattedStartDate = $formattedEndDate = null;

        if ( !empty($startDate) )
        {
            $formattedStartDate = date("Y-m-d",strtotime($startDate)) . 'T' . date("H:i:s",strtotime($startDate));
        }
        if ( !empty($endDate) )
        {
            $formattedEndDate = date("Y-m-d",strtotime($endDate)) . 'T' . date("H:i:s",strtotime($endDate));
        }

        $filter = new ThingFilterSpec($typeId, $xpath, $formattedStartDate, $formattedEndDate );
        $format = new ThingFormatSpec(array('core'));

        return new RequestGroup($filter, $format, $maxItems, $maxItems, $groupName);
    }

    static function getHVRequestGroupForIds(array $ids, $groupName = null)
    {
        $group = new RequestGroup();

        $format = new ThingFormatSpec(array('core'));
        $filter = new ThingFilterSpec();

        $group->setCurrentVersionOnly(false);
        $group->setFormat($format);
        $group->setFilter($filter);
        $group->setIds($ids);
        $group->setMax(count($ids));
        $group->setName($groupName);
        return $group;
    }

    static function getHVRequestGroupForBase64ThingName($thingName, $maxItems = 1, $groupName = null, $xpath = null, $startRangeDate = null, $endRangeDate = null)
    {
        $typeId = TypeTranslator::lookupTypeId($thingName);
        return self::getHVRequestGroupForBase64TypeId($typeId, $maxItems, $groupName, $xpath, $startRangeDate, $endRangeDate);
    }

    static function getHVRequestGroupForBase64TypeId($typeId, $maxItems = 1, $groupName = null, $xpath = null, $startRangeDate = null, $endRangeDate = null)
    {
        $filter = new ThingFilterSpec($typeId, $xpath, $startRangeDate, $endRangeDate);
        $format = new ThingFormatSpec(array('otherdata'));

        $group = new RequestGroup($filter, $format, $maxItems, $maxItems, $groupName);
        return $group;
    }

}