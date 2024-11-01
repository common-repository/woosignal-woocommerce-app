<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://woosignal.com
 * @since      1.0.0
 *
 * @package    Woosignal_Woocommerce_App
 * @subpackage Woosignal_Woocommerce_App/public/partials
 */
echo '<style>';
include(plugin_dir_path( __FILE__ ) . '../css/woosignal-woocommerce-app-public.css');
echo '</style>';
?>


<div class="container">
  <div class="row" style="padding-top: 20px;display: flex;">
     <div class="col-8" style="margin: auto;">

        <div class="row" style="padding: 0px 14px 0 14px;background-color: white;border-radius: 10px;box-shadow: 1px 1px 22px rgb(157 184 209 / 19%);">
            <div class="col-12 pb-0" style="text-align: center;">
                <img src="https://woosignal.com/images/woosignal_logo_stripe_blue.png" alt="woosignal logo" height="100">
                <h1><a href="https://woosignal.com/pricing" class="a-clean" title="Pricing"><span class="join-today">Upgrade to Plus</span></a></h1>
                <hr style="margin-top:25px;">
            </div>

            <div class="col-6">
                <p class="p-detail">It's free to get started but also easy to upgrade your account to our Plus membership which has tons of features to improve speed and service.</p>
                <br>
                <p class="title-count">Plus Features:</p>
                <ul class="p-detail">
                 <li>✅ One WooCommerce store</li>
                 <li>✅ Connect app templates</li>
                 <li>✅ 1 million API requests per month</li>
                 <li>✅ Auto security updates</li>
                 <li>✅ Download all apps for free</li>
                 <li>✅ Download all premium plugins</li>
                 <li>✅ Scheduled caching - 140% faster*</li>
                 <li>✅ Premium Support</li>
             </ul>
         </div>
         <div class="col-6" style="text-align:center;">
             <img src="https://woosignal.com/images/labelstoremax_demo.gif" class="mh-450" alt="WooCommerce app template Label StoreMAX - WooSignal">
         </div>
     </div>
 </div>

</div>

</div>
