# Sign.net WHMCS Module

## Minimum Requirements

For the latest WHMCS minimum system requirements, please refer to
https://docs.whmcs.com/System_Requirements

We recommend your module follows the same minimum requirements wherever
possible.

## Module Installation

### 1. Download

Download the file as a zip file. Then go to your WHMCS root folder and place the zip file under the /modules/servers/signnet folder.
You will need to create the signnet folder and unzip the content in that folder.
Once the file is placed, you should be able to see it on your admin console products.

### 2. Create the product in the WHMCS Admin panel

In order to get the plug you will need to do the following while creating your product.

#### 2.1 Enter your API

On Module Settings tab, on the dropdown box for Module Name select the Sign.Net option and enter your API key. You will need a Sign.net reseller account in order to get the API key. [How to get a Sign.net Reseller Account](#signnet-reseller-account)

#### 2.2 Customs fields setup

You will need to set up customs fields to collect the necessary information to provision a Sign.net business account.
Under the Custom Fields Tab you will need to create the following fields with the following configurations:

1. Field Name: Sub Domain <br>
   Field Type: Text Box <br>
   Description: Subdomains must be 1 to 63 characters long, consisting only of lowercase letters, numbers or hyphens. <br>
   Validation: /^[a-z0-9_\-.]\*$/ <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form<br>

2. Field Name: Email <br>
   Field Type: Text Box <br>
   Description: Email of new user <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form <br>

3. Field Name: First Name <br>
   Field Type: Text Box <br>
   Description: New user's first name <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form <br>

4. Field Name: Last Name <br>
   Field Type: Text Box <br>
   Description: New user's last name <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form <br>

5. Field Name: Password <br>
   Field Type: Text Box <br>
   Description: Password must contain at least 8 characters, a lowercase letter, an uppercase letter and a number <br>
   Validation: '^(?=._?[A-Z])(?=._?[a-z])(?=.\*?[0-9]).{8,}$' <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form <br>

6. Field Name: Company Name <br>
   Field Type: Text Box <br>
   Description: Enter Company Name <br>
   Radio Buttons: <br>
   Required Field, Show on Order Form <br>

#### 2.3 Other settings

There are other settings you should configure based on your company's needs such as the payment structure, etc.

Once you have done the following steps and create your product, it should appear on the client site.

## Sign.net Reseller Account

As mentioned earlier you will need a Sign.net reseller API key for this plugin. You can sign up for an account [here](https://resellers.sign.net/auth/register/).

## How to bundle digital signing into your packages

### 1. Acceess the product bundle page

![Main menu](./images/Main%20menu.png)
On your admin console, look for the tool icon on the top right side of the screen and click on it. Then on the dropdown menu find and click and the "System Settings". Once you reach the System Setting page, find and click on the "Product Bundle" which will bring you to the Product Bundles page

### 2. Create your product bundle

On the Product Bundles page, you click the "Create New Bundle" button and it will bring you to a bundle page
![Create Bundle1 ](./images/create%20bundle%201.png)

#### 2.1 Write your bundle name

Before you can create your bundle, you will first have to name your bundle and click the "Save Change" button.

#### 2.2 Add a product to your bundle

After you add your bundle name and save the changes, you will see that you will be able to add products to your bundles. These products will have to be existing products that you have already created. Refer to [this](#2-create-the-product-in-the-whmcs-admin-panel) on how you can create a product.

To add a product to your bundle, click on the "Add Another" button under the "Bundle Items" section and it will bring you to the following page
![Configure Product](./images/configure%20product.png)
On this page you can select and configure the product. Once you have completed this, it will appear in the "Bundle Items" section
![Create bundle 2](./images/create%20bundle%202.png)

#### 2.3 Bundle Configuration

In addition to the bundle items, there are other configurations that you can set such as the price, number of maximum uses (number of units of this package that can be sold), availability date for this package, etc... All this should be configured to suit your business needs.

In order for the bundle to show on the Products page, your must check the "Show in Product Group" box. Once that is checked, select the product group that you will to placed this bundle in.

Remember to save your changes when everything is configured.

### 3. Conclusion

Once everything is done, you should be able to see your bundle on the Products and Client's page.
![Product Page](./images/product%20page.png)
![Client page](./images/client%20page.png)

## Useful Resources

- [Developer Resources](https://developers.whmcs.com/)
- [Hook Documentation](https://developers.whmcs.com/hooks/)
- [API Documentation](https://developers.whmcs.com/api/)
- [WHMCS Limited](https://www.whmcs.com)
