<?php

/**
 * This script will generate the ComplexType and SimpleType classes based off the WSDL files provided by FedEx.  
 * When updating the library to a newer version, change the path to the .wsdl files below and also in the corresponding Request.php for each service (for example, library/RateService/Request.php)
 */

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'src'),
    get_include_path(),
)));

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');

use FedEx\Utility;


//RateRequest
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/RateService_v10.wsdl');

$baseNamespace = 'FedEx\RateService';
$subpackageName = 'Rate Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/RateService/') . '/Request.php';
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, 'FedEx\RateService', $subpackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/RateService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/RateService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateComplexTypes->run();

//PackageMovementInformationService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/PackageMovementInformationService_v5.wsdl');

$baseNamespace = 'FedEx\PackageMovementInformationService';
$subpackageName = 'Package Movement Information Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/PackageMovementInformationService/') . '/Request.php';
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, 'FedEx\PackageMovementInformationService', $subpackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/PackageMovementInformationService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/PackageMovementInformationService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateComplexTypes->run();


//TrackService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/TrackService_v5.wsdl');

$baseNamespace = 'FedEx\TrackService';
$subpackageName = 'Track Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/TrackService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/TrackService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateSimpleTypes->run();

//generate CompleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/TrackService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
$generateComplexTypes->run();


//AddressValidationService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/Fedex/_wsdl/AddressValidationService_v2.wsdl');

$baseNamespace = 'FedEx\AddressValidationService';
$subPackageName = 'Address Validation Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/AddressValidationService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/AddressValidationService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate CompleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/AddressValidationService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();


//LocatorService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/LocatorService_v2.wsdl');

$baseNamespace = 'FedEx\LocatorService';
$subPackageName = 'Locator Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/LocatorService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/LocatorService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/LocatorService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();



//ShipService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/ShipService_v10.wsdl');

$baseNamespace = 'FedEx\ShipService';
$subPackageName = 'Ship Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/ShipService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/ShipService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/ShipService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();


//CourierDispatchService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/CourierDispatchService_v3.wsdl');

$baseNamespace = 'FedEx\CourierDispatchService';
$subPackageName = 'Courier Dispatch Service';

//export Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/CourierDispatchService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/CourierDispatchService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/CourierDispatchService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();


//CloseService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/CloseService_v2.wsdl');

$baseNamespace = 'FedEx\CloseService';
$subPackageName = 'Close Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/CloseService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/CloseService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/CloseService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();

//ReturnTagService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/ReturnTagService_v1.wsdl');

$baseNamespace = 'FedEx\ReturnTagService';
$subPackageName = 'Return Tag Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/ReturnTagService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/ReturnTagService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/ReturnTagService/ComplexType');
$baseNamespace = 'FedEx\ReturnTagService';
$subPackageName = 'Return Tag Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();


//UploadDocumentService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/UploadDocumentService_v1.wsdl');

$baseNamespace = 'FedEx\UploadDocumentService';
$subPackageName = 'Upload Document Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/UploadDocumentService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();

//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/UploadDocumentService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/UploadDocumentService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();

//PickupService
$wsdlPath = realpath(dirname(__FILE__) . '/../src/FedEx/_wsdl/PickupService_v3.wsdl');

$baseNamespace = 'FedEx\Pickup';
$subPackageName = 'Pickup Service';

//generate Request class
$pathToRequestClassFile = realpath(dirname(__FILE__) . '/../src/FedEx/PickupService/Request.php');
$generateRequestClassFile = new Utility\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
$generateRequestClassFile->run();


//generate SimpleType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/PickupService/SimpleType');
$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateSimpleTypes->run();

//generate ComplexType classes
$exportPath = realpath(dirname(__FILE__) . '/../src/FedEx/PickupService/ComplexType');
$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
$generateComplexTypes->run();