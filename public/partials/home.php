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
    <div class="col-6" style="margin: auto;">

        <div class="row" style="padding: 0px 14px 0 14px;background-color: white;border-radius: 10px;box-shadow: 1px 1px 22px rgb(157 184 209 / 19%);">
            <div class="col-12">
                <h1 class="p-detail"><span>Fastest</span> <span class="wc-purple">WooCommerce</span><br>App Templates</h1>

                <div style="margin-top: 10px;">
                    <a href="https://woosignal.com/register" target="_BLANK" class="decoration-none custom-btn-get-started">Get Started</a>
                    <a href="https://woosignal.com/products/woocommerce-apps" target="_BLANK" class="decoration-none custom-btn-white mt-sm-2">View WooCommerce apps</a>
                </div>

                <hr style="margin-top:5px;">

                <p>Turn your WooCommerce store into a native mobile app</p>

                <p>Your WooCommerce store will 100% work with our app, if you’re new to IOS/Android apps we are here to help you get started.</p>

                <p>Join WooSignal to create an app for your WooCommerce store. No prior programming experience required.</p>

                <p>Need support getting setup? Contact us <a href="https://woosignal.com/support" target="_BLANK">here</a></p>
            </div>
        </div>
    </div>

    <div class="col-6" style="margin: auto;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/b8vne5tH6DU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</div>

</div>

