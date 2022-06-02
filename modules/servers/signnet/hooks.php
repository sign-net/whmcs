<?php
/**
 * WHMCS SDK Sample Provisioning Module Hooks File
 *
 * Hooks allow you to tie into events that occur within the WHMCS application.
 *
 * This allows you to execute your own code in addition to, or sometimes even
 * instead of that which WHMCS executes by default.
 *
 * WHMCS recommends as good practice that all named hook functions are prefixed
 * with the keyword "hook", followed by your module name, followed by the action
 * of the hook function. This helps prevent naming conflicts with other addons
 * and modules.
 *
 * For every hook function you create, you must also register it with WHMCS.
 * There are two ways of registering hooks, both are demonstrated below.
 *
 * @see https://developers.whmcs.com/hooks/
 *
 * @copyright Copyright (c) WHMCS Limited 2017
 * @license https://www.whmcs.com/license/ WHMCS Eula
 */

// Require any libraries needed for the module to function.
// require_once __DIR__ . '/path/to/library/loader.php';
//
// Also, perform any initialization required by the service's library.

/**
 * Client edit sample hook function.
 *
 * This sample demonstrates making a service call whenever a change is made to a
 * client profile within WHMCS.
 *
 * @param array $params Parameters dependant upon hook function
 *
 * @return mixed Return dependant upon hook function
 */
function hook_signnet_clientedit(array $params)
{
    try {
        // Call the service's function, using the values provided by WHMCS in
        // `$params`.
    } catch (Exception $e) {
        // Consider logging or reporting the error.
    }
}

/**
 * Register a hook with WHMCS.
 *
 * add_hook(string $hookPointName, int $priority, string|array|Closure $function)
 */
add_hook('ClientEdit', 1, 'hook_signnet_clientedit');

/**
 * Insert a service item to the client area navigation bar.
 *
 * Demonstrates adding an additional link to the Services navbar menu that
 * provides a shortcut to a filtered products/services list showing only the
 * products/services assigned to the module.
 *
 * @param \WHMCS\View\Menu\Item $menu
 */
add_hook('ClientAreaPrimaryNavbar', 1, function ($menu)
{
    // Check whether the services menu exists.
    if (!is_null($menu->getChild('Services'))) {
        // Add a link to the module filter.
        $menu->getChild('Services')
            ->addChild(
                'Provisioning Module Products',
                array(
                    'uri' => 'clientarea.php?action=services&module=signnet',
                    'order' => 15,
                )
            );
    }
});

/**
 * Render a custom sidebar panel in the secondary sidebar.
 *
 * Demonstrates the creation of an additional sidebar panel on any page where
 * the My Services Actions default panel appears and populates it with a title,
 * icon, body and footer html output and a child link.  Also sets it to be in
 * front of any other panels defined up to this point.
 *
 * @param \WHMCS\View\Menu\Item $secondarySidebar
 */
add_hook('ClientAreaSecondarySidebar', 1, function ($secondarySidebar)
{
    // determine if we are on a page containing My Services Actions
    if (!is_null($secondarySidebar->getChild('My Services Actions'))) {

        // define new sidebar panel
        $customPanel = $secondarySidebar->addChild('Provisioning Module Sample Panel');

        // set panel attributes
        $customPanel->moveToFront()
            ->setIcon('fa-user')
            ->setBodyHtml(
                'Your HTML output goes here...'
            )
            ->setFooterHtml(
                'Footer HTML can go here...'
            );

        // define link
        $customPanel->addChild(
                'Sample Link Menu Item',
                array(
                    'uri' => 'clientarea.php?action=services&module=signnet',
                    'icon'  => 'fa-list-alt',
                    'order' => 2,
                )
            );

    }
});


add_hook('ShoppingCartValidateCheckout', 1, function($vars) {
    try {
        // API Connection Details
        $whmcsUrl = "https://signing-api.sign.net/provisioning-api/domainCheck/" . $_SESSION['cart']['products'][0]['customfields'][18] ;
        // For WHMCS 7.2 and later, we recommend using an API Authentication Credential pair.
        // Learn more at http://docs.whmcs.com/API_Authentication_Credentials
        // Prior to WHMCS 7.2, an admin username and md5 hash of the admin password may be used
        // with the 'username' and 'password' keys instead of 'identifier' and 'secret'.
        // $api_identifier = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJiMmMyM2EyN2E2NTc0MGY3ODc2ZDY2OGNhYjE0NmM5MCIsImlhdCI6MTYzMDg5NjE2N30.OiVCx4NiKXMUh1olQTG-wDSMCw03-B80yGvYShULKTE";
        // $api_secret = "}ASka}_N;OB7~=H1/,v6K<3]E~WSO^:+V{(naB>DD>;e<}v-8kM|D(`B9$";

        // Set get values
        // 'internalApiKey' => '}ASka}_N;OB7~=H1/,v6K<3]E~WSO^:+V{(naB>DD>;e<}v-8kM|D(`B9$',
       
        //     $postfields = array(
        //     "domain" => $vars['customfields']['Sub Domain']
        //     );
        // $post = json_encode($postfields);

        $userApiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiI0YWJlZjU4MS05Zjk2LTRkZmItYjJjZC1iNDNlNmFjODZiOTQiLCJpYXQiOjE2NDYwNTI0NDh9._lz7o-KIqWhbCI_d37SbN0cthGVXurvKX21jpZiqeKA";
        $return = [];
        // Call the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whmcsUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiI0YWJlZjU4MS05Zjk2LTRkZmItYjJjZC1iNDNlNmFjODZiOTQiLCJpYXQiOjE2NDYwNTI0NDh9._lz7o-KIqWhbCI_d37SbN0cthGVXurvKX21jpZiqeKA'));
        // if ($userApiKey != null) {curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
        //     'Authorization: Bearer '. $userApiKey));}

    
        $response = curl_exec($ch);
        if (curl_error($ch)) {
        die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        curl_close($ch);
        // print($response);
        // print($_SESSION['cart']);
        // Decode response
        $jsonData = json_decode($response, true);

        // Dump array structure for inspection
        // // Call the service's connection test function.
        $status = $jsonData['status'];
        if($status === 'Err') {
            $err = $jsonData['error']['message'];
            $return = $err;
            // var_dump();
            // return $return;
        }
        $message = $jsonData['message'];
        if($message !== null) {
            $return = "API Error, please try again";
        }
        var_dump($_SESSION['cart']['products'][0]['customfields']);
        
    } catch (Exception $e) {
        // Record the error in WHMCS's module log.
        logModuleCall(
            'signnet',
            __FUNCTION__,
            $params,
            $e->getMessage(),
            $e->getTraceAsString()
        );
        return $e->getMessage();

        // return $e->getMessage();
    }
    return $return;

    

});