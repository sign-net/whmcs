# Sign.net WHMCS Plugin

# Sign.net WHMCS Module Installation

## 1. Donwload

You can download the file as a zip file. Then go to your WHMCS root folder and place the zip file under the /modules/servers/ folder.
Then unzip the file and rename it to signnet.
Once the file is placed, you should be able to see it on your admin console products.

## 2. Create the product

In order to get the plug you will need to do the following while creating your product.

### 2.1 Enter your API

On Module Settings tab, on the dropdown box for Module Name select the Sign.Net option and enter your API key. You will need a Sign.net reseller account in order to get the API key. [How to get a Sign.net Reseller Account](#signnet-reseller-account)

### 2.2 Customs fields setup

You will need to set up customs fields to collect the necessary information to provision a Sign.net business account.
Under the Custom Fields Tab you will need to create the following fields with the following configurations:

1. Field Name: Sub Domain
   Field Type: Text Box
   Description: Subdomains must be 1 to 63 characters long, consisting only of lowercase letters, numbers or hyphens.
   Validation: /^[a-z0-9_\-.]\*$/
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
   Validation: '^(?=._?[A-Z])(?=._?[a-z])(?=.\*?[0-9]).{8,}$'
   Radio Buttons:
   Required Field, Show on Order Form

6. Field Name: Company Name
   Field Type: Text Box
   Description: Enter Company Name
   Radio Buttons:
   Required Field, Show on Order Form

### 2.3 Other settings

There are other settings you should configure based on your company's needs such as the payment structure, etc.

Once you have done the following steps and create your product, it should appear on the client site.

# Sign.net Reseller Account

As mentioned earlier you will need a Sign.net reseller API key for this plugin. You can sign up for an account [here](https://resellers.sign.net/auth/register/).
