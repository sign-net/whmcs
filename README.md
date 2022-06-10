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

# 1 Sign.net WHMCS Module Installation #


## 1.1 Installation System Requirements ##
Please note that we currently support WHMCS version 8.2.
Localizations supported: By default, English only.

## 1.2 Installation Details ##
The technical steps required to install the Signnet WHMCS Module are as follows
1. Upload and extract the extension into the main WHMCS directory

 Download Sign.netnet WHMCS Module at whmcs/modules/servers/signnet as a zip file at upload folder content
under WHMCS_DIR/modules/servers

# 2 Signnet WHMCS Module Configuration #
Before using the Sign.net WHMCS Module a few things need to be setup:
1. Create new products that will be distributed to the clients
2. Configure the product options

## 2.1 Signnet WHMCS Module Product Setup ##

To create new products inside the newly installed and configured Sign.net WHMCS
Module, please open the WHMCS Settings -> System settings -> Products and
Services.

### 2.1.1 Business account product set-up ###
Add a new product, setting product group as the group you created earlier

For Business accounts, set product type as 'other', product name as 'Business Account' and module name as the Sign.net WHMCS module you installed.

Going to the pricing tab, set payment type as recurring. We allow for the following options 'One Time/Monthly',	'Quarterly',	'Semi-Annually',	'Annually'.

Next, go to 'Module Settings' tab, set up Module as the Sign.net WHMCS module installed and enter your Reseller API Key. You may decide how you want to set up the product but we recommend 'Automatically setup the product when you manually accept a pending order' for testing.

### 2.1.2 Custom fields setup ###

After saving changes to the product, add the following custom fields on the
Custom fields tab:
1. Field Name: Sub Domain
  Field Type: Text Box
  Description: Subdomains must be 1 to 63 characters long, consisting only of lowercase letters, numbers or hyphens.
  Validation: /^[a-z0-9_\-.]*$/
  Radio Buttons:
    Required Field, Show on Order Form 

2. Field Name: Email
  Field Type: Text Box
  Description: Email of new user
  Radio Buttons:
    Required Field, Show on Order Form 

3. Field Name: First Name
  Field Type: Text Box
  Description: New user's first name
  Radio Buttons:
    Required Field, Show on Order Form

4. Field Name: Last Name
  Field Type: Text Box
  Description: New user's last name
  Radio Buttons:
    Required Field, Show on Order Form

5. Field Name: Password
  Field Type: Text Box
  Description: Password must contain at least 8 characters, a lowercase letter, an uppercase letter and a number
  Validation: '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$'
  Radio Buttons:
    Required Field, Show on Order Form

6. Field Name: Company Name
  Field Type: Text Box
  Description: Enter Company Name
  Radio Buttons:
    Required Field, Show on Order Form   

## 2,2 Order management ##
Go to Orders -> list all orders
Here you can view the list of accepted and pending user orders.