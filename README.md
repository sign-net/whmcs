# WHMCS Sample Provisioning Module #

## Summary ##

Provisioning Modules, also referred to as Product or Server Modules, allow you
to create modules that allow for the provisioning and management of products &
services in WHMCS.

The sample files here demonstrates how a provisioning module for WHMCS should
be structured and exercises all supported functionality.

For more information, please refer to the documentation at:
https://developers.whmcs.com/provisioning-modules/

## Recommended Module Content ##

The recommended structure of a provisioning module is as follows.

```
 provisioningmodule/
  |- lib/
  |- templates/
  |- tests/
  |  hooks.php
  |  logo.png
  |  provisioningmodule.php
```

## Minimum Requirements ##

For the latest WHMCS minimum system requirements, please refer to
https://docs.whmcs.com/System_Requirements

We recommend your module follows the same minimum requirements wherever
possible.

## Tests ##

We strongly encourage you to write unit tests for your work. Within this SDK we
provide a sample unit test based upon the widely used PHPUnit.

## Useful Resources
* [Developer Resources](https://developers.whmcs.com/)
* [Hook Documentation](https://developers.whmcs.com/hooks/)
* [API Documentation](https://developers.whmcs.com/api/)

[WHMCS Limited](https://www.whmcs.com)

## OX WHMCS Module Installation ##


# 1.1 Installation System Requirements #
Please note that we currently support WHMCS version 8.2.
Localizations supported: By default, English only.

# 1.2 Installation Details #
The technical steps required to install the Signnet WHMCS Module are as follows
1. Upload and extract the extension into the main WHMCS directory

 Download Signnet WHMCS Module at whmcs/modules/servers/signnet as a zip file at upload folder content
under WHMCS_DIR/modules/servers

## 2 Signnet WHMCS Module Configuration ##
Before using the Signnet WHMCS Module a few things need to be setup:
1. Create new products that will be distributed to the clients
2. Configure the product options