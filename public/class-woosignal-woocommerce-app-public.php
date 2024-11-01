<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://woosignal.com
 * @since      1.0.0
 *
 * @package    Woosignal_Woocommerce_App
 * @subpackage Woosignal_Woocommerce_App/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Woosignal_Woocommerce_App
 * @subpackage Woosignal_Woocommerce_App/public
 * @author     WooSignal <support@woosignal.com>
 */
class Woosignal_Woocommerce_App_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woosignal_Woocommerce_App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woosignal_Woocommerce_App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/woosignal-woocommerce-app-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woosignal_Woocommerce_App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woosignal_Woocommerce_App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/woosignal-woocommerce-app-public.js', array( 'jquery' ), $this->version, false );

	}

	public function admin_menu() {
		add_menu_page( 'WooSignal', 'WooSignal', 'manage_options', 'woosignal-woocommerce-app', [$this, 'myplguin_admin_page'], (plugin_dir_url( __FILE__ ) . 'images/woocommerce-app-maker-woosignal-icon.png'));
	}

	public function myplguin_admin_page() {
		// check user capabilities
  if ( ! current_user_can( 'manage_options' ) ) {
    return;
  }

  //Get the active tab from the $_GET param
  $default_tab = null;
  $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;

  ?>
  <!-- Our admin page content should all be inside .wrap -->
  <div class="wrap">
    <!-- Print the page title -->
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <!-- Here are our tabs -->
    <nav class="nav-tab-wrapper">
      <a href="?page=woosignal-woocommerce-app" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">Home</a>
      <a href="?page=woosignal-woocommerce-app&tab=app-template" class="nav-tab <?php if($tab==='app-template'):?>nav-tab-active<?php endif; ?>">App Template</a>
      <a href="?page=woosignal-woocommerce-app&tab=premium" class="nav-tab <?php if($tab==='premium'):?>nav-tab-active<?php endif; ?>">Premium</a>
    </nav>

    <div class="tab-content">
    <?php switch($tab) :
      case 'premium':
        include_once('partials/premium.php');
        break;
      case 'app-template':
        include_once('partials/app-template.php');
        break;
      default:
      	include_once('partials/home.php');
        break;
    endswitch; ?>
    </div>
  </div>
  <?php
	}

}
