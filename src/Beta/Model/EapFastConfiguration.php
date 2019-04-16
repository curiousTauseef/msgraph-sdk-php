<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EapFastConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* EapFastConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EapFastConfiguration extends Enum
{
    /**
    * The Enum EapFastConfiguration
    */
    const NO_PROTECTED_ACCESS_CREDENTIAL = "noProtectedAccessCredential";
    const USE_PROTECTED_ACCESS_CREDENTIAL = "useProtectedAccessCredential";
    const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION = "useProtectedAccessCredentialAndProvision";
    const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION_ANONYMOUSLY = "useProtectedAccessCredentialAndProvisionAnonymously";
}