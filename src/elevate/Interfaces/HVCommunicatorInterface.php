<?php
/**
 * Created by PhpStorm.
 * User: ecompton
 * Date: 2/26/14
 * Time: 10:43 AM
 */

namespace elevate\Interfaces;

interface HVCommunicatorInterface {

    public static function getAuthenticationURL($appId, $redirectUrl, $config, $healthVaultAuthInstance, $target, $additionalTargetQSParams);

    public function makeRequest($method, $methodVersion, $xml, $additionalHeaders, $personId);

    public function getRawResponse();

    public function setHealthVaultPlatform($healthVaultPlatform);

    public function connect();

    public function getDigest();

    public function getRawRequest();

    public function getSXMLResponse();

} 