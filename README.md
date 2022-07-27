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

## Useful Resources

- [Developer Resources](https://developers.whmcs.com/)
- [Hook Documentation](https://developers.whmcs.com/hooks/)
- [API Documentation](https://developers.whmcs.com/api/)
- [WHMCS Limited](https://www.whmcs.com)
