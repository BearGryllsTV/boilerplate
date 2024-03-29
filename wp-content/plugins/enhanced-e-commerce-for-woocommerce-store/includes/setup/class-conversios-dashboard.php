<?php
/**
 * @since      4.1.4
 * Description: Conversios Onboarding page, It's call while active the plugin
 */
if ( ! class_exists( 'Conversios_Dashboard' ) ) {
	class Conversios_Dashboard {
		protected $screen;
    protected $TVC_Admin_Helper;
    protected $CustomApi;
    protected $subscription_id;
    protected $ga_traking_type;
    protected $ga3_property_id;
    protected $ga3_ua_analytic_account_id;
    protected $ga3_view_id;
    protected $ga_currency;
    protected $ga_currency_symbols;
    protected $ga4_measurement_id;
    protected $ga4_analytic_account_id;
    protected $ga4_property_id;
    protected $subscription_data;
    protected $plan_id=1;
    protected $is_need_to_update_api_data_wp_db = false;
    protected $pro_plan_site;
    protected $report_data;
    protected $notice;
    protected $google_ads_id;

    protected $connect_url;
    protected $g_mail;
    protected $is_refresh_token_expire;

    protected $ga_swatch;
		public function __construct( ){
      $this->ga_swatch = (isset($_GET['ga_type']))?sanitize_text_field($_GET['ga_type']):"ga3";
      $this->TVC_Admin_Helper = new TVC_Admin_Helper();
      $this->CustomApi = new CustomApi();
      $this->connect_url =  $this->TVC_Admin_Helper->get_custom_connect_url(admin_url().'admin.php?page=conversios');
      $this->subscription_id = $this->TVC_Admin_Helper->get_subscriptionId();
      // update API data to DB while expired token
      
      if ( isset($_GET['subscription_id']) && sanitize_text_field($_GET['subscription_id']) == $this->subscription_id){
        if ( isset($_GET['g_mail']) && sanitize_email($_GET['g_mail'])){
          $this->TVC_Admin_Helper->update_subscription_details_api_to_db();
        }
      } else if(isset($_GET['subscription_id']) && sanitize_text_field($_GET['subscription_id'])){
        $this->notice = esc_html__("You tried signing in with different email. Please try again by signing it with the email id that you used to set up the plugin earlier.","conversios");
      }
      $this->is_refresh_token_expire = $this->TVC_Admin_Helper->is_refresh_token_expire();
      $this->subscription_data = $this->TVC_Admin_Helper->get_user_subscription_data();
      $this->pro_plan_site = esc_url_raw($this->TVC_Admin_Helper->get_pro_plan_site().'?utm_source=EE+Plugin+User+Interface&utm_medium=dashboard&utm_campaign=Upsell+at+Conversios');
      if(isset($this->subscription_data->plan_id) && !in_array($this->subscription_data->plan_id, array("1"))){
        $this->plan_id = $this->subscription_data->plan_id;
      }
      if(isset($this->subscription_data->google_ads_id) && $this->subscription_data->google_ads_id != ""){
        $this->google_ads_id = $this->subscription_data->google_ads_id;
      }

      if( $this->subscription_id != "" ){
        $this->g_mail = sanitize_email(get_option('ee_customer_gmail'));
        $this->ga_traking_type = $this->subscription_data->tracking_option; // UA,GA4,BOTH
        $this->ga3_property_id = $this->subscription_data->property_id; // GA3
        $this->ga3_ua_analytic_account_id = $this->subscription_data->ua_analytic_account_id;
        if($this->ga_traking_type == "GA4"){
          $this->ga_swatch = "ga4";
        }
        if($this->is_refresh_token_expire == false){
          if($this->ga_swatch == "ga3" || $this->ga_swatch == ""){
            $this->set_ga3_view_id_and_ga3_currency();
          }else{
            $this->ga4_measurement_id = $this->subscription_data->measurement_id; //GA4 ID
            $this->ga4_analytic_account_id = $this->subscription_data->ga4_analytic_account_id; //GA4 ID
            $this->set_analytics_get_ga4_property_id();
          }          
        }
        
      }else{
        wp_redirect("admin.php?page=conversios_onboarding");
        exit;
      }     
      
			$this->includes();
			$this->screen = get_current_screen();
      $this->init();
      $this->load_html();
		}

    public function includes() {
      if (!class_exists('CustomApi.php')) {
        require_once(ENHANCAD_PLUGIN_DIR . 'includes/setup/CustomApi.php');
      }   
    }

		public function init(){
      
    }
    /* Need to For GA4 API call */
    public function set_analytics_get_ga4_property_id(){
      if(isset($this->subscription_data->ga4_property_id)  && $this->subscription_data->ga4_property_id!="" ){
        $this->ga4_property_id = $this->subscription_data->ga4_property_id;        
      }else{
        $data = array(
          "subscription_id" => sanitize_text_field($this->subscription_id),
          "ga4_analytic_account_id" => sanitize_text_field($this->ga4_analytic_account_id)
        );
        $api_rs = $this->CustomApi->analytics_get_ga4_property_id($data);        
        if (isset($api_rs->error) && $api_rs->error == '') {
          if(isset($api_rs->ga4_property_id) && $api_rs->ga4_property_id != ""){
            $this->ga4_property_id = $api_rs->ga4_property_id;
            $this->ga_currency_symbols = $this->TVC_Admin_Helper->get_currency_symbols($this->ga_currency);
            //$this->is_need_to_update_api_data_wp_db = true;
          }
        }
      }
    }
     /* Need to For GA3 API call */
    public function set_ga3_view_id_and_ga3_currency(){
      if(isset($this->subscription_data->view_id) && isset($this->subscription_data->analytics_currency) && $this->subscription_data->view_id!="" && $this->subscription_data->analytics_currency!=""){
        $this->ga3_view_id = $this->subscription_data->view_id;
        $this->ga_currency = $this->subscription_data->analytics_currency;
        $this->ga_currency_symbols = $this->TVC_Admin_Helper->get_currency_symbols($this->ga_currency);        
      }else{
        $data = array(
          "subscription_id" => sanitize_text_field($this->subscription_id),
          "property_id" => sanitize_text_field($this->ga3_property_id),
          "ua_analytic_account_id" => sanitize_text_field($this->ga3_ua_analytic_account_id)
        );
        $api_rs = $this->CustomApi->get_analytics_viewid_currency($data);        
        if (isset($api_rs->error) && $api_rs->error == '') {
          if(isset($api_rs->data) && $api_rs->data != ""){
            $data = json_decode($api_rs->data);
            $this->ga3_view_id = $data->view_id;
            $this->ga_currency = $data->analytics_currency;
            $this->ga_currency_symbols = $this->TVC_Admin_Helper->get_currency_symbols($this->ga_currency);
            //$this->is_need_to_update_api_data_wp_db = true;
          }
        }
      }
    }
    public function load_html(){
      do_action('conversios_start_html_'.sanitize_text_field($_GET['page']));
      $this->current_html();
      $this->current_js();
      do_action('conversios_end_html_'.sanitize_text_field($_GET['page']));
    }    
		
    /**
     * Page custom js code
     *
     * @since    4.1.4
     */
    public function current_js(){
    ?>
    <script>
    jQuery( document ).ready(function() {
      /**
        * daterage script
        **/
      var notice='<?php echo esc_html__($this->notice); ?>';
      if(notice != ""){
        tvc_helper.tvc_alert("error","Email error",notice);
      }
      var g_mail = '<?php echo esc_attr($this->g_mail); ?>';
      var plan_id = '<?php echo esc_attr($this->plan_id); ?>';
      var ga_swatch = '<?php echo esc_attr($this->ga_swatch); ?>';
      var is_refresh_token_expire = '<?php echo esc_attr($this->is_refresh_token_expire); ?>';
      is_refresh_token_expire = (is_refresh_token_expire == "")?false:true;
      console.log(is_refresh_token_expire);      
        var start = moment().subtract(30, 'days');
        var end = moment();
        function cb(start, end) {
            var start_date = start.format('DD/MM/YYYY') || 0,
            end_date = end.format('DD/MM/YYYY') || 0;
            jQuery('span.daterangearea').html(start_date + ' - ' + end_date);

            /*var date_range = $.trim(jQuery(".report_range_val").text()).split('-');
            var start_date = $.trim(date_range[0].replace(/\//g,"-")) || 0,
            end_date = $.trim(date_range[1].replace(/\//g,"-")) || 0;*/
            var data = {
              action:'get_google_analytics_reports',      
              subscription_id:'<?php echo esc_attr($this->subscription_id); ?>',
              plan_id:plan_id,
              ga_swatch:ga_swatch,
              ga_traking_type:'<?php echo esc_attr($this->ga_traking_type); ?>',
              view_id :'<?php echo esc_attr($this->ga3_view_id); ?>',
              property_id:'<?php echo esc_attr($this->ga4_property_id); ?>',
              ga4_analytic_account_id:'<?php echo esc_attr($this->ga4_analytic_account_id); ?>',
              ga_currency :'<?php echo esc_attr($this->ga_currency); ?>',
              plugin_url:'<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL); ?>',
              start_date :jQuery.trim(start_date.replace(/\//g,"-")),
              end_date :jQuery.trim(end_date.replace(/\//g,"-")),
              g_mail:g_mail,
              google_ads_id:'<?php echo esc_attr($this->google_ads_id); ?>',
              conversios_nonce:'<?php echo wp_create_nonce( 'conversios_nonce' ); ?>'
            };
            // Call API
            if(notice == "" && is_refresh_token_expire == false){
              tvc_helper.get_google_analytics_reports(data);
            }

            if(notice == "" && is_refresh_token_expire == true && g_mail != ""){ 
              tvc_helper.tvc_alert("error","","It seems the token to access your Google Analytics account is expired. Sign in with "+g_mail+" again to reactivate the token. <span class='google_connect_url'>Click here..</span>");
            }else if(notice == "" && is_refresh_token_expire == true ){
              tvc_helper.tvc_alert("error","","It seems the token to access your Google Analytics account is expired. Sign in with the connected email again to reactivate the token. <span class='google_connect_url'>Click here..</span>");
            }
        }
        jQuery('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
      
      //upgrds plan popup
      jQuery(".upgrdsbrs-btn").on( "click", function() {
          jQuery('.upgradsbscrptn-pp').addClass('showpopup');
          jQuery('body').addClass('scrlnone');
      });
      jQuery('body').click(function(evt){ 
        if(jQuery(evt.target).closest('.upgrdsbrs-btn, .upgradsbscrptnpp-cntr').length){
          return;
        }        
        jQuery('.upgradsbscrptn-pp').removeClass('showpopup');
        jQuery('body').removeClass('scrlnone');
      });
      jQuery(".clsbtntrgr").on( "click", function() {
          jQuery(this).closest('.pp-modal').removeClass('showpopup');
          jQuery('body').removeClass('scrlnone');
      });
      //upcoming_featur popup
       jQuery(".upcoming-featur-btn").on( "click", function() {
          jQuery('.upcoming_featur-btn-pp').addClass('showpopup');
          jQuery('body').addClass('scrlnone');
      });
      jQuery('body').click(function(evt){   
        if(jQuery(evt.target).closest('.upcoming-featur-btn, .upgradsbscrptnpp-cntr').length){
          return;
        }        
        jQuery('.upcoming_featur-btn-pp').removeClass('showpopup');
        jQuery('body').removeClass('scrlnone');
      });
      /**
        * Custom js code for API call
        **/
      
      //var start_date = moment().subtract(5, 'months').format('YYYY-MM-DD');
      //var end_date = moment().subtract(1, 'days').format('YYYY-MM-DD');
      

      jQuery(".prmoclsbtn").on( "click", function() {
        jQuery(this).parents('.promobandtop').fadeOut()
      });      
      
      /**
        * table responcive
        **/
        jQuery('.mbl-table').basictable({
          breakpoint: 768
        });
        
        /**
         * Convesios custom script
         */
        //Step-0
        jQuery("#tvc_popup_box").on( "click",'span.google_connect_url', function() {
          console.log("call");
          const w =600; const h=650;
          const dualScreenLeft = window.screenLeft !==  undefined ? window.screenLeft : window.screenX;
          const dualScreenTop = window.screenTop !==  undefined   ? window.screenTop  : window.screenY;

          const width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
          const height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

          const systemZoom = width / window.screen.availWidth;
          const left = (width - w) / 2 / systemZoom + dualScreenLeft;
          const top = (height - h) / 2 / systemZoom + dualScreenTop;
          var url ='<?php echo esc_url_raw($this->connect_url); ?>';
          url = url.replace(/&amp;/g, '&');
          const newWindow = window.open(url, "newwindow", config=      `scrollbars=yes,
            width=${w / systemZoom}, 
            height=${h / systemZoom}, 
            top=${top}, 
            left=${left},toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,directories=no,status=no
            `);
          if (window.focus) newWindow.focus();
        });

    });
    </script>
    <?php
    }
    protected function add_upgrdsbrs_btn_calss($featur_name){
      if($this->plan_id == 1){
        return "upgrdsbrs-btn";
      }else if($featur_name != ""){
        $upcoming_featur  = array('download_pdf','schedule_email');
        if(in_array($featur_name, $upcoming_featur)){
          return "upcoming-featur-btn";
        }
      }
    }

    /**
     * Main html code
     *
     * @since    4.1.4
     */
	  public function current_html(){
      $current_page = admin_url( "admin.php?page=conversios");
	  ?>
    <div class="dashbrdpage-wrap">
      <div class="dflex align-items-center mt24 dshbrdtoparea">
        <div class="ga_swatch">
          <?php if($this->ga_traking_type == "UA" || $this->ga_traking_type == "BOTH"){?>
          <span class="<?php echo esc_attr($this->ga_swatch == "ga3")?"active":""; ?>" id="ga3"><a href="<?php echo esc_url_raw($current_page."&ga_type=ga3"); ?>">GA3</a></span>
        <?php }
        if($this->ga_traking_type == "GA4" || $this->ga_traking_type == "BOTH"){?>
          <span class="<?php echo esc_attr($this->ga_swatch == "ga4")?"active":""; ?>" id="ga4"><a href="<?php echo esc_url_raw($current_page."&ga_type=ga4"); ?>">GA4</a></span>
        <?php } ?>
        </div>
        <div class="dashtp-left">
          <button class="dashtpleft-btn <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('download_pdf')); ?>"><img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/download-icon.png'); ?>" alt="" /><?php esc_html_e("Download PDF","conversios"); ?></button>
          <button class="dashtpleft-btn <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('schedule_email')); ?>"><img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/clock-icon.png'); ?>" alt="" /><?php esc_html_e("Schedule Email","conversios"); ?></button>
        </div>
        <div class="dashtp-right">
          <?php /*
          <div class="dshtprightselect">
              <select>
                  <option>All</option>
                  <option>All</option>
                  <option>All</option>
              </select>
          </div>*/ ?>
          <?php if($this->plan_id != 1){?>
          <div id="reportrange" class="dshtpdaterange" >
            <div class="dateclndicn">
              <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/claendar-icon.png'); ?>" alt="" />
            </div> 
            <span class="daterangearea report_range_val"></span>
            <div class="careticn"><img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/caret-down.png'); ?>" alt="" /></div>
          </div>
        <?php } else{ ?>
          <div class="dshtpdaterange <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('download_pdf')); ?>">
            <div class="dateclndicn">
                <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/claendar-icon.png'); ?>" alt="" />
            </div> 
            <span class="daterangearea report_range_val"></span>
            <div class="careticn"><img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/caret-down.png'); ?>" alt="" /></div>
          </div>
        <?php }?>

        </div>
      </div>
      <?php /*if($this->ga_traking_type == "GA4"){?>
      <div class="temp_note"><p><?php esc_html_e("The reporting dashboard feature is only available for Google Analytics 3 properties currently. We are working on Google Analytics 4 dashboard, we will update you once it is live.","conversios"); ?></p></div>
    <?php }*/ ?>
      <!--- dashboard summary section start -->
      <div class="wht-rnd-shdwbx mt24 dashsmry-wrap">
        <div class="dashsmry-item">
          <?php if($this->ga_swatch == "" || $this->ga_swatch == "ga3"){ ?>
          <div class="dashsmrybx" id="s1_transactionsPerSession">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Conversion Rate","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
              <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/green-up.png'); ?>" alt="" />
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_transactionRevenue">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Revenue","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx" id="s1_transactions">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Total Transactions","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx" id="s1_revenuePerTransaction">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Avg. Order Value","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx flwdthmblbx" id="s1_productAddsToCart">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Added to Cart","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
        </div>
        <div class="dashsmry-item">
          <div class="dashsmrybx" id="s1_productRemovesFromCart">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Removed from Cart","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_sessions">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Sessions","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_users">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Total Users","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_newUsers">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("New Users","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_productDetailViews">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Product Views","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>

        <?php }else { ?>

          <div class="dashsmrybx" id="s1_totalRevenue">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Revenue","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx" id="s1_transactions">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Total Transactions","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx" id="s1_averagePurchaseRevenue">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Avg. Order Value","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx mblsmry3bx flwdthmblbx" id="s1_addToCarts">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Added to Cart","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
        </div>
        <div class="dashsmry-item">
          
          <div class="dashsmrybx" id="s1_sessions">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Sessions","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_totalUsers">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Total Users","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_newUsers">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("New Users","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_itemViews">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Product Views","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
        <?php
        } ?>
          
        </div>
        <?php /*
        <div class="dashsmry-item">
          <div class="dashsmrybx" id="s1_transactionShipping">
            <div class="dshsmrycattxt dash-smry-title"><?php esc_html_e("Shipping","conversios"); ?></div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
          <div class="dashsmrybx" id="s1_transactionTax">
            <div class="dshsmrycattxt dash-smry-title">TAX</div>
            <div class="dshsmrylrgtxt dash-smry-value">-</div>
            <div class="updownsmry dash-smry-compare-val">
                %
            </div>
            <div class="dshsmryprdtxt"><?php esc_html_e("From Previous Period","conversios"); ?></div>
          </div>
        </div> */?>
      </div>
      <!--- dashboard summary section end -->

      <!--- dashboard ecommerce cahrt section start -->
      <div class="mt24 dshchrtwrp ecomfunnchart">
        <div class="row">
          <?php if($this->plan_id != 1){?>
          <div class="col50">
            <div class="chartbx ecomfunnchrtbx ecom-funn-chrt-bx">
              <div class="chartcntnbx">
                <h5><?php esc_html_e("Ecommerce Conversion Funnel","conversios"); ?></h5>
                <div class="chartarea">
                   <canvas id="ecomfunchart" width="400" height="300"></canvas>
                </div>
                <hr>
                <div class="ecomchartinfo">
                  <div class="ecomchrtinfoflex">
                    <div class="ecomchartinfoitem">
                        <div class="ecomchartinfolabel"><?php esc_html_e("Sessions","conversios"); ?></div>
                        <div class="chartpercarrow conversion_s1"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                        <div class="ecomchartinfolabel"><?php esc_html_e("Product View","conversios"); ?></div>
                        <div class="chartpercarrow conversion_s2"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                        <div class="ecomchartinfolabel"><?php esc_html_e("Add to Cart","conversios"); ?></div>
                        <div class="chartpercarrow conversion_s3"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                        <div class="ecomchartinfolabel"><?php esc_html_e("Checkouts","conversios"); ?></div>
                        <div class="chartpercarrow conversion_s4"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                        <div class="ecomchartinfolabel"><?php esc_html_e("Order Confirmation","conversios"); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }else{ ?>
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Ecommerce Conversion Funnel","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/ecom-chart.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      Locked 
                    </div>
                    <h5><?php esc_html_e("Conversion Funnel","conversios"); ?></h5>
                    <p><?php esc_html_e("This Report will help you visualize drop offs at each stage of your shopping funnel starting from home page to product page, cart page to checkout page and to final order confirmation page. Find out the major drop offs at each stage and take informed data driven decisions to increase the conversions and better marketing ROI.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>

          <?php if($this->plan_id != 1 && ($this->ga_swatch == "" || $this->ga_swatch == "ga3") ){?>
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx ecom-checkout-funn-chrt-bx">
                <div class="chartcntnbx">
                  <h5><?php esc_html_e("Ecommerce Checkout Funnel","conversios"); ?></h5>
                  <div class="chartarea">
                     <canvas id="ecomcheckoutfunchart" width="400" height="300"></canvas>
                  </div>
                  <hr>
                <div class="ecomchartinfo ecomcheckoutfunchartinfo">
                  <div class="ecomchrtinfoflex">
                    <div class="ecomchartinfoitem">
                      <div class="ecomchartinfolabel"><?php esc_html_e("Checkout Step 1","conversios"); ?></div>
                      <div class="chartpercarrow checkoutfunn_s1"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                      <div class="ecomchartinfolabel"><?php esc_html_e("Checkout Step 2","conversios"); ?></div>
                      <div class="chartpercarrow checkoutfunn_s2"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                      <div class="ecomchartinfolabel"><?php esc_html_e("Checkout Step 3","conversios"); ?></div>
                      <div class="chartpercarrow checkoutfunn_s3"></div>
                    </div>
                    <div class="ecomchartinfoitem">
                      <div class="ecomchartinfolabel"><?php esc_html_e("Purchase","conversios"); ?></div>
                    </div>
                    
                  </div>
                </div>

                </div>
              </div>
            </div>
          <?php }else if($this->ga_swatch == "" || $this->ga_swatch == "ga3"){ ?>
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Checkout Funnel","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/ecom-chart.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      Locked 
                    </div>
                    <h5><?php esc_html_e("Checkout Funnel","conversios"); ?></h5>
                    <p><?php esc_html_e("This Report will help you in finding out the performance of your checkout page and leakages at each checkout step. Identify the small areas of improvements and fix them for smooth customer experience on your ecommerce site.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php  } ?>
          
        </div>
      </div>
      <!--- dashboard ecommerce cahrt section over -->

      <!--- Product Performance section start -->
      <?php if($this->plan_id != 1){?>
      <div class="mt24 whiteroundedbx dshreport-sec">
        <div class="row dsh-reprttop">
          <div class="dshrprttp-left">
            <h4><?php esc_html_e("Product Performance Report","conversios"); ?></h4>
            <a href="#" class="viewallbtn <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('download_pdf')); ?>"><?php esc_html_e("View all","conversios"); ?> <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/blue-right-arrow.png'); ?>" alt="" /></a>
          </div>
        </div>
        <div class="dashtablewrp product_performance_report" id="product_performance_report">
          <table class="dshreporttble mbl-table" >
              <thead>
                  <tr>
                      <th class="prdnm-cell"><?php esc_html_e("Product Name","conversios"); ?></th>
                      <th><?php esc_html_e("Views","conversios"); ?></th>
                      <th><?php esc_html_e("Added to Cart","conversios"); ?></th>
                      <th><?php esc_html_e("Orders","conversios"); ?></th>
                      <th><?php esc_html_e("Qty","conversios"); ?></th>
                      <th><?php esc_html_e("Revenue","conversios"); ?> (<spn class="ga_currency_symbols"><?php echo esc_attr($this->ga_currency_symbols); ?></spn>)</th>
                      <?php if($this->ga_swatch == "" || $this->ga_swatch == "ga3"){ ?>
                      <th><?php esc_html_e("Avg Price","conversios"); ?> (<?php echo esc_attr($this->ga_currency_symbols); ?>)</th>
                      <th><?php esc_html_e("Refund Amount","conversios"); ?> (<?php echo esc_attr($this->ga_currency_symbols); ?>)</th>
                    <?php } ?>
                      <th><?php esc_html_e("Cart to details (%)","conversios"); ?></th>
                      <th><?php esc_html_e("Buy to details (%)","conversios"); ?></th>
                </tr>
              </thead>
              <tbody>                                    
              </tbody>
          </table>
        </div>
      </div>
      <?php }else{ ?>
        <div class="mt24 whiteroundedbx dshreport-sec">
          <div class="row dsh-reprttop">
            <div class="col">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Product Performance Report","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?>
                    </div>
                    <h5><?php esc_html_e("Product Performance Report","conversios"); ?></h5>
                    <p><?php esc_html_e("This report will help you understand how products in your store are performing and based on it you can take informed merchandising decision to further increase your revenue.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php  } ?>
      <!--- Product Performance section over -->

      <!--- Source Performance Report section start -->
      <?php if($this->plan_id != 1){?>
      <div class="mt24 whiteroundedbx dshreport-sec">
          <div class="row dsh-reprttop">
              <div class="dshrprttp-left">
                <h4><?php esc_html_e("Source/Medium Performance Report","conversios"); ?></h4>
                <a href="" class="viewallbtn <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('download_pdf')); ?>"><?php esc_html_e("View all","conversios"); ?> <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/blue-right-arrow.png'); ?>" alt="" /></a>
              </div>
          </div>
          <div class="dashtablewrp medium_performance_report" id="medium_performance_report">
              <table class="dshreporttble mbl-table" >
                  <thead>
                      <tr>
                          <th class="prdnm-cell"><?php esc_html_e("Source/Medium","conversios"); ?></th>
                          <?php if($this->ga_swatch == "" || $this->ga_swatch == "ga3"){ ?>
                            <th><?php esc_html_e("Conversion (%)","conversios"); ?></th>
                          <?php } ?>
                          <th><?php esc_html_e("Revenue","conversios"); ?> (<spn class="ga_currency_symbols"><?php echo esc_attr($this->ga_currency_symbols); ?></spn>)</th>
                          <th><?php esc_html_e("Total transactions","conversios"); ?></th>
                          <th><?php esc_html_e("Avg Order value","conversios"); ?> (<spn class="ga_currency_symbols"><?php echo esc_attr($this->ga_currency_symbols); ?></spn>)</th>
                          <th><?php esc_html_e("Added to carts","conversios"); ?></th>
                          <?php if($this->ga_swatch == "" || $this->ga_swatch == "ga3"){ ?>
                            <th><?php esc_html_e("removed from cart","conversios"); ?></th>
                          <?php } ?>
                          <th><?php esc_html_e("Product views","conversios"); ?></th>
                          <th><?php esc_html_e("Users","conversios"); ?></th>
                          <th><?php esc_html_e("Sessions","conversios"); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                  </tbody>
              </table>
          </div>
      </div>
      <?php }else{ ?>
        <div class="mt24 whiteroundedbx dshreport-sec">
          <div class="row dsh-reprttop">
            <div class="col">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Source/Medium Performance Report","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?> 
                    </div>
                    <h5><?php esc_html_e("Source/Medium Performance Report","conversios"); ?></h5>
                    <p><?php esc_html_e("Find out the performance of each of your traffic channels. You can access which campaigns or channels are attributing sales, add to carts, product views etc. You can also see your shopping and checkout behavior funnels for each of the channels and take informed decisions of managing your ad spends for each channel.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php  } ?>
      <!--- Source Performance Report section over -->


      <!--- Shopping and Google Ads Performance section start -->
      <?php  if($this->plan_id != 1){?>
      <div class="mt24 whiteroundedbx ggladsperfom-sec">
          <h4><?php esc_html_e("Google Ads Account Performance","conversios"); ?></h4>
          <div class="row">
            <div class="col50">
              <div class="chartbx ggladschrtbx daily-clicks-bx">
                <div class="chartcntnbx">
                  <h5><?php esc_html_e("Clicks","conversios"); ?></h5>
                  <div class="chartarea">
                     <canvas id="dailyClicks" width="400" height="300" class="chartcntainer"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col50">
              <div class="chartbx ggladschrtbx daily-cost-bx">
                <div class="chartcntnbx">
                  <h5><?php esc_html_e("Cost","conversios"); ?></h5>
                  <div class="chartarea">
                     <canvas id="dailyCost" width="400" height="300" class="chartcntainer"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col50">
              <div class="chartbx ggladschrtbx daily-conversions-bx">
                <div class="chartcntnbx">
                  <h5><?php esc_html_e("Conversions","conversios"); ?></h5>
                  <div class="chartarea">
                     <canvas id="dailyConversions" width="400" height="300" class="chartcntainer"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col50">
              <div class="chartbx ggladschrtbx daily-sales-bx">
                <div class="chartcntnbx">
                  <h5><?php esc_html_e("Sales","conversios"); ?></h5>
                  <div class="chartarea">
                     <canvas id="dailySales" width="400" height="300" class="chartcntainer"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> 
      <?php }else{ ?>
        <div class="mt24 whiteroundedbx ggladsperfom-sec">
          <h4><?php esc_html_e("Shopping and Google Ads Performance","conversios"); ?></h4>
          <div class="row">
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Google Ads Clicks Performance","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?> 
                    </div>
                    <h5><?php esc_html_e("Google Ads Clicks Performance","conversios"); ?></h5>
                    <p><?php esc_html_e("This report will help you .","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Google Ads Cost Performance","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?>
                    </div>
                    <h5><?php esc_html_e("Google Ads Cost Performance","conversios"); ?></h5>
                    <p><?php esc_html_e("This report will help you understand how products in your store are performing and based on it you can take informed merchandising decision to further increase your revenue.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Google Ads Conversions Performance","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?> 
                    </div>
                    <h5><?php esc_html_e("Google Ads Conversions Performance","conversios"); ?></h5>
                    <p><?php esc_html_e("This report will help you","conversios"); ?> </p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col50">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Google Ads Sales Performance","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      Locked 
                    </div>
                    <h5><?php esc_html_e("Google Ads Sales Performance","conversios"); ?></h5>
                    <p><?php esc_html_e("This report will help you.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php }  ?>
      <!--- Shopping and Google Ads Performance section start -->

      <!--- Compaign section start -->
      <?php if($this->plan_id != 1){?>
      <div class="mt24 whiteroundedbx dshreport-sec">
          <div class="row dsh-reprttop">
              <div class="dshrprttp-left">
                <h4><?php esc_html_e("Campaign Performance","conversios"); ?></h4>
                <a href="" class="viewallbtn <?php echo esc_attr($this->add_upgrdsbrs_btn_calss('download_pdf')); ?>"><?php esc_html_e("View all","conversios"); ?> <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/blue-right-arrow.png'); ?>" alt="" /></a>
              </div>
          </div>
          <div class="dashtablewrp campaign_performance_report" id="campaign_performance_report">
           <?php if($this->google_ads_id == ""){
              ?>
              <p><?php esc_html_e("Set up your google ads account from","conversios"); ?> <a href="<?php echo esc_url_raw($this->TVC_Admin_Helper->get_onboarding_page_url()); ?>"><?php esc_html_e("here","conversios"); ?></a> <?php esc_html_e("in order to access Campaign performance data.","conversios"); ?></p>
              <?php
            } ?> 
            <table class="dshreporttble mbl-table" >
              <thead>
                <tr>
                  <th class="prdnm-cell"><?php esc_html_e("Campaign Name","conversios"); ?></th>
                  <th><?php esc_html_e("Daily Budget","conversios"); ?></th>
                  <th><?php esc_html_e("Status","conversios"); ?></th>
                  <th><?php esc_html_e("Clicks","conversios"); ?></th>
                  <th><?php esc_html_e("Cost","conversios"); ?></th>
                  <th><?php esc_html_e("Conversions","conversios"); ?></th>
                  <th><?php esc_html_e("Sales","conversios"); ?></th>
                </tr>
              </thead>
              <tbody>                             
              </tbody>
            </table>
          </div>
      </div>
      <?php }else{ ?>
        <div class="mt24 whiteroundedbx dshreport-sec">
          <div class="row dsh-reprttop">
            <div class="col">
              <div class="chartbx ecomfunnchrtbx">
                <div class="chartcntnbx prochrtftr">
                  <h5><?php esc_html_e("Campaign Performance","conversios"); ?></h5>
                  <div class="chartarea">
                     <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/table-data.jpg'); ?>" alt="" />
                  </div>
                </div>
                <div class="prochrtovrbox">
                  <div class="prochrtcntn">
                    <div class="prochrttop">
                      <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/lock-orange.png'); ?>" alt="" />
                      <?php esc_html_e("Locked","conversios"); ?> 
                    </div>
                    <h5><?php esc_html_e("Campaign Performance","conversios"); ?></h5>
                    <p><?php esc_html_e("Access your campaign performance data to know how are they performing and take actionable decisions to increase your marketing ROI.","conversios"); ?></p>
                    <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php  } ?>
      <!--- Source Performance Report section over -->

      <!-- UPGRADE SUBSCRIPTION -->
      <div id="upgradsbscrptn" class="pp-modal whitepopup upgradsbscrptn-pp">
        <div class="sycnprdct-ppcnt">
          <div class="ppwhitebg pp-content upgradsbscrptnpp-cntr">
            <div class="ppclsbtn absltpsclsbtn clsbtntrgr">
              <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/close-white.png'); ?>" alt="">
            </div>
            <div class="upgradsbscrptnpp-hdr">
              <h5><?php esc_html_e("Upgrade to Pro..!!","conversios"); ?></h5>
            </div>
            <div class="ppmodal-body">
              <p><?php esc_html_e("This feature is only available in the paid plan. Please upgrade to get the full range of reports and more.","conversios"); ?></p>
              <div class="ppupgrdbtnwrap">
                <a class="blueupgrdbtn" href="<?php echo esc_url_raw($this->pro_plan_site); ?>" target="_blank"><?php esc_html_e("Upgrade Now","conversios"); ?></a>
              </div>
            </div>              
          </div>
        </div>
      </div>
      <!--  Upcoming featur -->
      <div id="upcoming_featur" class="pp-modal whitepopup upcoming_featur-btn-pp">
        <div class="sycnprdct-ppcnt">
          <div class="ppwhitebg pp-content upgradsbscrptnpp-cntr">
            <div class="ppclsbtn absltpsclsbtn clsbtntrgr">
              <img src="<?php echo esc_url_raw(ENHANCAD_PLUGIN_URL.'/admin/images/close-white.png'); ?>" alt="">
            </div>
            <div class="upgradsbscrptnpp-hdr">
              <h5><?php esc_html_e("Upcoming..!!","conversios"); ?></h5>
            </div>
            <div class="ppmodal-body">
              <p><?php esc_html_e("We are currently working on this feature and we will reach out to you once this is live.","conversios"); ?></p>
              <p><?php esc_html_e("We aim to give you a capability to schedule the reports directly in your inbox whenever you want.","conversios"); ?></p>              
            </div>              
          </div>
        </div>
      </div>
    </div>
    <?php	  	
	  }
	}
}
new Conversios_Dashboard();