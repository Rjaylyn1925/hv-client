<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bnissen
 * Date: 11/5/13
 * Time: 11:34 AM
 * To change this template use File | Settings | File Templates.
 */

namespace elevate\test\HVObjects\Thing\DataXML\Type;


use elevate\HVObjects\Generic\Address;
use elevate\HVObjects\Generic\CodableValue;
use elevate\HVObjects\Generic\CodedValue;
use elevate\HVObjects\Generic\Contact;
use elevate\HVObjects\Generic\Date\Date;
use elevate\HVObjects\Generic\Date\DateTime;
use elevate\HVObjects\Generic\Date\Time;
use elevate\HVObjects\Generic\Email;
use elevate\HVObjects\Generic\Name;
use elevate\HVObjects\Generic\Person;
use elevate\HVObjects\Generic\Phone;
use elevate\HVObjects\Thing\DataXML\Type\AllergyType;
use elevate\test\HVObjects\BaseObjectTest;

class AllergyTypeTest extends BaseObjectTest
{
    public static function setUpBeforeClass()
    {
        self::$sampleXMLPath    = __DIR__ . "/../../../SampleXML/Thing/DataXml/Type/AllergyType.xml";
        self::$objectNamespace  = 'elevate\HVObjects\Thing\DataXml\Type\AllergyType';

        // Name
        $nameCoded = new CodedValue('53', 'Allergy', array('Allergy'), array('Version 123'));
        $allergyName = new CodableValue("Air Allergy", array($nameCoded));

        // Reaction;
        $reactionCode = new CodedValue("234", "Reaction", array("Reaction"), array("Version 5"));
        $reaction = new CodableValue("Hives", array($reactionCode));

        // First Observed
        $firstObservedTime = new Time(4, 0, 0, 0);
        $firstObservedDate = new Date(2013, 10, 12);
        $firstObserved = new DateTime($firstObservedDate, $firstObservedTime);

        // AllergenType
        $allergenCoded = new CodedValue("1235", "Allergen", array("Allergen"), array("Version 3"));
        $allergenType = new CodableValue("Oxygen", array($allergenCoded));

        $allergenCCoded = new CodedValue("1235", "Allergen", array("Allergen"), array("Version 3"));
        $allergenCode = new CodableValue("Oxygen", array($allergenCCoded));

        // Treatmeant Provider
        // -- Name -- //
        $nameFull = "Dr. Billy D Intern IX";

        $nameTitleCode = new CodedValue("134", "Title", array("Title"), array("Verison 5"));
        $nameTitle = new CodableValue("Dr.", array($nameTitleCode));

        $nameFirst = "Billy";
        $nameMiddle = "D";
        $nameLast = "Intern";

        $nameSuffixCoded = new CodedValue("9", "Suffix", array("Suffix"), array("Version 9"));
        $nameSuffix = new CodableValue("IX", array($nameSuffixCoded));

        $name = new Name($nameFull, $nameTitle, $nameFirst, $nameMiddle, $nameLast, $nameSuffix);
        // -- End Name -- //

        $organization = "Microsoft";
        $professionalTraining = "Internship";
        $id = "117";

        // -- Contact -- //
        // --- Address --- //
        $addressDescription = "Home";
        $addressIsPrimary = TRUE;
        $addressStreet = "123 Fake Street";
        $addressCity = "Fakeville";
        $addressState = "FA";
        $addressPostcode = "00700";
        $addressCountry = "United States";
        $addressCounty = "Fake County";
        $address = new Address(
            $addressDescription,
            $addressStreet,
            $addressCity,
            $addressState,
            $addressPostcode,
            $addressCounty,
            $addressCountry,
            $addressIsPrimary
        );
        // --- Phone --- //
        $phoneDescription = "Home";
        $phoneIsPrimary = TRUE;
        $phoneNumber = "(555)-555-5555";
        $phone = new Phone($phoneDescription, $phoneIsPrimary, $phoneNumber);
        // --- Email --- //
        $emailDescription = "Personal";
        $emailIsPrimary = TRUE;
        $emailAddress = "Billy@TheIntern.edu";
        $email = new Email($emailDescription, $emailAddress, $emailIsPrimary);

        $contact = new Contact($address, $email, $phone);
        // -- End Contact -- //

        $typeCoded = new CodedValue("123", "Type", array("Type"), array("Version 34"));
        $type = new CodableValue("Airborne", array($typeCoded));

        $person = new Person($name, $organization, $professionalTraining, $id, $contact, $type);

        // Treatment
        $treatmentCoded = new CodedValue("123", "Treatment", array("Treatment"), array("Version 34"));
        $treatment = new CodableValue("Gas Mask", array($treatmentCoded));

        $isNegated = FALSE;

        self::$testObject = new AllergyType(
            $allergyName,
            $reaction,
            $firstObserved,
            $allergenType,
            $allergenCode,
            $person,
            $treatment,
            $isNegated
        );

        parent::setUpBeforeClass();
    }
}