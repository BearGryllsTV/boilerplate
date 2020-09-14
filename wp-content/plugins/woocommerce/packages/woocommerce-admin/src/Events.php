<?php
/**
 * Handle cron events.
 * NOTE: DO NOT edit this file in WooCommerce core, this is generated from woocommerce-admin.
 */

namespace Automattic\WooCommerce\Admin;

defined( 'ABSPATH' ) || exit;

use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Choose_Niche;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Giving_Feedback_Notes;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Mobile_App;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_New_Sales_Record;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Tracking_Opt_In;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Onboarding_Email_Marketing;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Onboarding_Payments;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Personalize_Store;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_EU_VAT_Number;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_WooCommerce_Payments;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Marketing;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Start_Dropshipping_Business;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_WooCommerce_Subscriptions;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Migrate_From_Shopify;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Launch_Checklist;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Real_Time_Order_Alerts;
use \Automattic\WooCommerce\Admin\RemoteInboxNotifications\DataSourcePoller;
use \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RemoteInboxNotificationsEngine;
use \Automattic\WooCommerce\Admin\Loader;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Insight_First_Sale;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Home_Screen_Feedback;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Need_Some_Inspiration;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Learn_More_About_Product_Settings;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Online_Clothing_Store;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_First_Product;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Customize_Store_With_Blocks;
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Facebook_Marketing_Expert;
<<<<<<< HEAD
=======
use \Automattic\WooCommerce\Admin\Notes\WC_Admin_Notes_Test_Checkout;
>>>>>>> develop

/**
 * WC_Admin_Events Class.
 */
class Events {
	/**
	 * The single instance of the class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Constructor
	 *
	 * @return void
	 */
	protected function __construct() {}

	/**
	 * Get class instance.
	 *
	 * @return object Instance.
	 */
	final public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}
		return static::$instance;
	}

	/**
	 * Cron event handlers.
	 */
	public function init() {
		add_action( 'wc_admin_daily', array( $this, 'do_wc_admin_daily' ) );
	}

	/**
	 * Daily events to run.
	 *
	 * Note: WC_Admin_Notes_Order_Milestones::other_milestones is hooked to this as well.
	 */
	public function do_wc_admin_daily() {
		WC_Admin_Notes_New_Sales_Record::possibly_add_note();
		WC_Admin_Notes_Mobile_App::possibly_add_note();
		WC_Admin_Notes_Tracking_Opt_In::possibly_add_note();
		WC_Admin_Notes_Onboarding_Email_Marketing::possibly_add_note();
		WC_Admin_Notes_Onboarding_Payments::possibly_add_note();
		WC_Admin_Notes_Personalize_Store::possibly_add_note();
		WC_Admin_Notes_WooCommerce_Payments::possibly_add_note();
		WC_Admin_Notes_EU_VAT_Number::possibly_add_note();
		WC_Admin_Notes_Marketing::possibly_add_note();
		WC_Admin_Notes_Giving_Feedback_Notes::possibly_add_note();
		WC_Admin_Notes_Start_Dropshipping_Business::possibly_add_note();
		WC_Admin_Notes_WooCommerce_Subscriptions::possibly_add_note();
		WC_Admin_Notes_Migrate_From_Shopify::possibly_add_note();
		WC_Admin_Notes_Insight_First_Sale::possibly_add_note();
		WC_Admin_Notes_Launch_Checklist::possibly_add_note();
		WC_Admin_Notes_Home_Screen_Feedback::possibly_add_note();
		WC_Admin_Notes_Need_Some_Inspiration::possibly_add_note();
		WC_Admin_Notes_Learn_More_About_Product_Settings::possibly_add_note();
		WC_Admin_Notes_Online_Clothing_Store::possibly_add_note();
		WC_Admin_Notes_First_Product::possibly_add_note();
		WC_Admin_Notes_Choose_Niche::possibly_add_note();
		WC_Admin_Notes_Real_Time_Order_Alerts::possibly_add_note();
		WC_Admin_Notes_Customize_Store_With_Blocks::possibly_add_note();
		WC_Admin_Notes_Facebook_Marketing_Expert::possibly_add_note();
<<<<<<< HEAD
=======
		WC_Admin_Notes_Test_Checkout::possibly_add_note();
>>>>>>> develop

		if ( Loader::is_feature_enabled( 'remote-inbox-notifications' ) ) {
			DataSourcePoller::read_specs_from_data_sources();
			RemoteInboxNotificationsEngine::run();
		}
	}
}
