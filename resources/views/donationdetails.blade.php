<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://sadsindia.org/xmlrpc.php"/>
    <meta name="google" content="notranslate"/>

    <script type="text/javascript">var template_dir = "https://sadsindia.org/wp-content/themes/fusion";var mo_options = mo_options || {};var sads_opt = {"custCareNum":"8884784742"};mo_options.disable_back_to_top = false;mo_options.sticky_menu = false;mo_options.theme_skin = "#e84a52";mo_options.theme_directory_url = "https://sadsindia.org/wp-content/themes/fusion";mo_options.slider_chosen="None";mo_options.disable_smooth_page_load=true;mo_options.disable_animations_on_page=false;</script>
    <title>Donate - Share At Door Step</title>
<meta property="og:image" content="https://sadsindia.org/wp-content/uploads/2018/12/sads_logo_1200x1200-1.jpg"><meta property="fb:app_id" content="754378244703653">    <script>
        var ajaxurl = "https://sadsindia.org/wp-admin/admin-ajax.php";
    </script>
    <div id="header-spacer" class="nodistr"></div>
    <header id="title-area" class="clearfix"><div class="inner"><h1 class="page-title entry-title">Donate</h1></div></header> <!-- title-area --><div id="main" class="clearfix">

        
        <div class="inner clearfix"><div id="one-column-template" class="layout-1c">
    <div class="donation-stepIndicator-container">
        <ul class="nav nav-tabs">
            <li id="tab1" class="step-tab active" data-step-idx="1"><span class="step-title-number">1. </span>Donation Details</li>
            <li id="tab2" class="step-tab" data-step-idx="2"><span class="step-title-number">2. </span>Schedule Pickup</li>
            <li id="tab3" class="step-tab" data-step-idx="3"><span class="step-title-number">3. </span>Donor Verification</li>
            <li id="tab4" class="step-tab" data-step-idx="4"><span class="step-title-number">4. </span>Place Order</li>
        </ul>
    </div>
    <div id="donation-step-container">
        <div class="step-content">
            <div class="tab-content">
                <div id="step1" data-step-idx="1" class="donate-step-item-select tab-pane fade in active">
    <div class="step1-sub-section location">
        <div class="step-heading-container" style="margin-bottom: 50px;">
            <h3 style="margin-bottom: 12px;">HELP US WITH YOUR EXACT LOCATION</h3>
            <p style="width: 250px; margin: 0 auto 30px auto">
                This allows us to check if your area is within our coverage
            </p>
        </div>
        <button type="button" disabled="disabled" id="verifyStep1Location" class="btn btn-primary">SEARCH</button>
        <form action="" onsubmit="return false;" autocomplete="off">
            <div class="form-field-wrap" style="margin-bottom: 20px;">
                <input type="text" name="step1_location" id="step1_location" placeholder="Building name, Block #, Area..." autocomplete="off" />
                <input type="hidden" name="nrstPick" id="step1_nrstPick" />
            </div>
        </form>
        <div class="map-search-holder" style="display: none;">
            <div id="map-overlay-holder">
                <p id="floating-info-box">Drag map to your precise location</p>
                <img id="floating-marker" src="https://sadsindia.org/wp-content/themes/fusion/images/icons/spotlight-poi2_hdpi.png" />
                <div id="map-search-location-render"></div>
            </div>
            <p class="map-search-result" style="font-size: 15px; margin: 40px 0 15px 0;">Please verify the location marked above before proceeding</p>
            <button type="button" id="submitStep1Location" class="btn btn-primary">PROCEED</button>
        </div>
    </div>
    <div class="step1-sub-section pick-drop-selector" style="display: none;">
        <div class="step-heading-container user-chosen-location-text-container">
            <h3>HOW DO YOU WISH TO DONATE?</h3>
            <p class="user-chosen-location-text-holder">Options shown as per your location:<br>
                <span class="user-chosen-location-text"></span><br>
                <a href="#" id="step1-change-location">(Change location?)</a>
            </p>
        </div>
        <div class="pick-drop-selector-container row">
            <div class="col-xs-12 col-sm-6">
                <div class="pick-drop-selector">
                    <div class="radio-btn-sads">
                        <input type="radio" name="ngo_radio" id="transfer" checked="checked" value="pickup">
                    </div>
                    <label for="transfer" class="pick-content"><h4>Pickup from Doorstep</h4>
                        <p>We will pick up donations from your doorstep and deliver them to the NGOs</p>
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="pick-drop-selector">
                    <div class="radio-btn-sads">
                        <input type="radio" name="ngo_radio" id="allot" value="drop">
                    </div>
                    <label for="allot" class="drop-content"><h4>Drop yourself</h4>
                        <p>We will send you NGO drop points where you can drop the donations yourself</p>
                    </label>
                </div>
            </div>
        </div>
        <div class="conditional-spacer"></div>
        <div>
            <div class="items-picker col-xs-12 col-sm-6">
                <div id="tableContainer" class="tableContainer">
                    <div class="fixedHeader">
                        <div class="table-row">
                            <div class="table-col col-items">Items</div>
                            <div class="table-col col-qty">Quantity</div>
                        </div>
                    </div>
                    <div class="scrollContent">
                                                    <div class="table-row">
                                <div class="table-col col-items">
                                    <div class="prod-img"><img src="https://sadsindia.org/wp-content/uploads/2018/07/Donate-Item-01-10-01.png"
                                                               width="121"
                                                               height="121"/>
                                        <p class="product-label Clothes"> Clothes</p>
                                    </div>
                                </div>
                                <div class="table-col col-qty">
                                    <button type="button" data-role="minus" class="unit-qty-minus"><i class="icon-minus"></i></button>
                                    <input type="text" id="Clothes" class="unit-qty" value="0" data-prod-id="4324" data-unit-weight="0.45" />
                                    <button type="button" data-role="add" class="unit-qty-add"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                                                    <div class="table-row">
                                <div class="table-col col-items">
                                    <div class="prod-img"><img src="https://sadsindia.org/wp-content/uploads/2018/07/Donate-Item-01-01-01.png"
                                                               width="121"
                                                               height="121"/>
                                        <p class="product-label Footwear"> Footwear</p>
                                    </div>
                                </div>
                                <div class="table-col col-qty">
                                    <button type="button" data-role="minus" class="unit-qty-minus"><i class="icon-minus"></i></button>
                                    <input type="text" id="Footwear" class="unit-qty" value="0" data-prod-id="14834" data-unit-weight="0.85" />
                                    <button type="button" data-role="add" class="unit-qty-add"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                                                    <div class="table-row">
                                <div class="table-col col-items">
                                    <div class="prod-img"><img src="https://sadsindia.org/wp-content/uploads/2018/07/Donate-Item-01-07-01.png"
                                                               width="121"
                                                               height="121"/>
                                        <p class="product-label Stationery"> Stationery</p>
                                    </div>
                                </div>
                                <div class="table-col col-qty">
                                    <button type="button" data-role="minus" class="unit-qty-minus"><i class="icon-minus"></i></button>
                                    <input type="text" id="Stationery" class="unit-qty" value="0" data-prod-id="4308" data-unit-weight="0.3" />
                                    <button type="button" data-role="add" class="unit-qty-add"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <p class="link-to-bulk-donation">
                    For donating more than 10 kgs or other items (electronics, toys, furniture etc.)<br>
                    Click here to raise a <a href="https://sadsindia.org/corporate-query/" target="_blank">Bulk Donation</a> request
                </p>
            </div>
            <div class="visible-xs conditional-spacer"></div>
            <div class="col-xs-12 col-sm-6">
                <div class="price-meta" style="display: none;">
                    <input type="hidden" id="order_mode" hidden value="pick">
                </div>

                <div class="cost-breakup">
                    <div class="row">
                        <div class="col-left col-xs-7">
                            <p>Estimated Weight</p>
                        </div>
                        <div class="col-right col-xs-5">
                            <p id="est-kgs">-</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-left col-xs-7">
                            <p id="convfee-label">Convenience Fee</p>
                        </div>
                        <div class="col-right col-xs-5">
                            <p id="cost">-</p>
                        </div>
                    </div>
                    <div class="order-info-block" style="display: none;">
                        <div class="pick-info-dynamic" id="pick-info-dynamic">
                            <div class="normal-pick-mode">
                                <span class="tax"><b>Convenience Fee is inclusive of Tax.</b></span><br><span>The convenience fee is estimated based on the average size of items in each category. Call <a href='tel:8884784742'>8884784742</a> for assistance.</span>
                            </div>
                            <div class="coll-drive-pick-mode">
                                <span class="tax"><b>Collection Drive Fee is inclusive of Tax.</b></span><br><span>Since your donation volume is substantial, we'll be booking a whole vehicle for the pickup. We will get in touch with you for further details. Also you may call <a href='tel:8884784742'>8884784742</a> for any assistance.</span>
                            </div>
                        </div>
                        <div class="drop-info-dynamic" id="drop-info-dynamic" style="display: none"><span>We will let you know the drop points near your location that require the items that you want to donate</span></div>
                    </div>
                </div>
                <div style="padding: 40px 0 40px 0; border-bottom: 1px solid #e8e8e8; font-size: 13px;">
                    <p style="text-decoration: underline;">NOTE:</p>
                    <p class="for-pickup-only">Pickup will be done by our partner-assigned Bike Rider. Excess weight (>10KG) may be rejected by rider.</p>
                    <p class="for-pickup-only">Please keep the items packed and ready for pickup.</p>
                    <p class="for-drop-only">Please call and confirm the requirements/timings with the NGO you choose from the drop off list before your visit.</p>
                    <p>Convenience Fee is inclusive of Tax.</p>
                </div>

                <div class="step-nav-back-next">
                    <div class="col-xs-6 col-xs-offset-6 col-sm-4 col-sm-offset-8" style="padding: 0;">
                        <button type="button" class="btn btn-primary next-step" data-next-step-idx="2">PROCEED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                <div id="step2" data-step-idx="2" class="donate-step-pickup-sched tab-pane fade">
    <div class="step-heading-container" style="margin-bottom: 50px;">
        <div class="pickup-heading">
            <h3>SCHEDULE A PICKUP</h3>
            <p>Please select a convenient slot as per your availability</p>
        </div>
        <div class="drop-heading">
            <h3>DONOR DETAILS</h3>
            <p>We'll send a list of relevant NGOs to your email ID<br>based on details you enter below</p>
        </div>
    </div>
    <div style="overflow: hidden;padding: 16px 0;">
        <div class="pickup-slot-column col-xs-12 col-sm-6">
            <div id="pickup-slot-selector-section">
                <h3>1. CHOOSE A PICKUP SLOT</h3>
                <div id="pickup-slot-selector"></div>
                <hr>
                <h3>2. NOTES FOR PICKUP PERSON <span style="font-size: 12px;">(Optional)</span></h3>
                <p style="font-size: 12px;">* We'll do our best to pass along your instructions to our Pickup Partner. Compliance isn't guaranteed.</p>
                <div class="form-field-wrap AnySuggestions">
                    <textarea name="AnySuggestions"
                          id="pickup_note"
                          class="suggest"
                          aria-required="false"
                          aria-invalid="false"
                          placeholder="Ex- Please don't ring the bell"></textarea>
                </div>
            </div>
        </div>
        <div class="pickup-form col-xs-12 col-sm-5 col-sm-offset-1">
            <h5>DONOR DETAILS</h5>
            <div role="form" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="" method="post" class="wpcf7-form">
                    <div>
                        <div class="form-field-wrap Name">
                            <input type="text" id="pickup_name"
                                   name="Name" value=""
                                   class="name"
                                   autocomplete="name"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="Name">
                        </div>
                        <div class="form-field-wrap E-Mail">
                            <input type="email" id="pickup_email"
                                   name="E-Mail" value=""
                                   class="email"
                                   pattern=".+@.+\..+"
                                   autocomplete="email"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="E-Mail">
                        </div>
                        <div class="form-field-wrap PickupLocation" style="display: none">
                            <input type="text" id="pickup_location" name="address" value=""
                                   hidden
                                   class="pickup"
                                   autocomplete="street-address"
                                   aria-required="true"
                                   aria-invalid="false" placeholder="Address">
                        </div>
                        <div class="form-field-wrap DoorNo_Street">
                            <input type="text" name="doorno"
                                   id="pickup_doorno" value=""
                                   autocomplete="address-line1"
                                   class="area"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="Flat/Door #">
                            <input type="text" name="address-line2"
                                   id="pickup_street" value=""

                                   class="street"
                                   autocomplete="address-line2"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="Street">
                        </div>
                        <div class="form-field-wrap City_Pincode">
                            <input type="text" name="city"
                                   id="pickup_city" value=""
                                   class="city"
                                   autocomplete="address-level2"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="City">
                            <input type="text" name="postal"
                                   id="pickup_pincode" value=""
                                   class="pin"
                                   pattern="[1-9]{1}[0-9]{5}"
                                   autocomplete="postal-code"
                                   aria-required="true"
                                   aria-invalid="false"
                                   placeholder="Pincode">
                        </div>
                    </div>
                </form>
            </div>
            <div class="button-holder">
                <button type="button" style="float: right;" hidden id="donate_drop">Proceed</button>
                <button type="button" hidden id="place_order" disabled="disabled" style="display: none;float: right;">Place Order</button>
            </div>
        </div>
    </div>
</div>                <div id="step3" data-step-idx="3" class="donate-step-otp tab-pane fade">
    <hr class="visible-xs">
    <div class="enter">
        <h4 class="send-otp-heading">I. Enter Mobile Number</h4>
        <form name="send-otp-form">
            <input type="text" hidden>
            <div class="user-known-msg-block">
                <h4>Your Email ID is registered with us.<br>A Login OTP will be sent to:</h4>
                <h3></h3>
            </div>
            <input name="phone" value="" id="mobile" type="number" autocomplete="tel"
                   placeholder="Enter your 10 digit Mobile Number">
            <input type="text" style="display:none;">
            <button type="submit" id="otp">Send OTP</button>
        </form>
    </div>
    <hr>
    <div class="verify hide-overlay" style="text-align: center;">
        <h4>II. Enter Received OTP</h4>
        <form name="verify-otp-form">
            <input name="mobile_otp" type="text" id="mobile_otp"
                   aria-required="true"
                   aria-invalid="false"
                   placeholder="Enter OTP">
            <input type="text" style="display:none;">
            <button type="submit" id="verify">Verify</button>
        </form>
        <a href="#" id="resend-otp">Didn't get an OTP? Click here to try again.</a>
    </div>
</div>                <div id="step4" data-step-idx="4" class="donate-step-order-placed tab-pane fade">
    <div class="order-status in-progress">
        <div class="order-status-icon-holder">
            <div class="order-status-icon-anchor">
                <div class="order-status-icon wip">
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>
                <div class="order-status-icon check">
                    <i class="icon-check"></i>
                </div>
                <div class="order-status-icon error">
                    <div class="exclamation-holder">
                        <i class="icon-exclamation"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="confirm">
            <h4 class="order-status-heading confirm-msg-order-id"></h4>
        </div>
        <div class="order-sharepoints-earned">
            <p class="sp-heading">You've earned Share Points!</p>
            <p class="sp-value"><i class="icon-sp-symbol"></i><span></span></p>
            <p class="sp-fineprint">* will be credited to your account on order completion.</p>
        </div>
        <div class="order-status-text-holder">
            <div class="order-status-text verifying-otp">
                <h4 class="order-status-heading-light">verifying otp...</h4>
            </div>
            <div class="order-status-text awaiting-payment">
                <h4 class="order-status-heading-light">awaiting payment...</h4>
            </div>
            <div class="order-status-text payment-failed">
                <h4 class="order-status-heading">Payment Failed / Cancelled</h4>
                <div class="order-status-body">
                    <button type="button" onclick="retryPayment();">PLEASE RETRY</button>
                    <p>If you're having any difficulty making the payment, please feel free to call <a href='tel:8884784742'>8884784742</a> for assistance.</p>
                </div>
            </div>
            <div class="order-status-text in-progress">
                <h4 class="order-status-heading-light">placing order...</h4>
            </div>
            <div class="order-status-text confirm-text">
                <div class="order-status-body save">
                    <h4 class="confirm-msg-head visible-for-drop-mode">Your donation drop request has been received.</h4>
                    <h4 class="confirm-msg-head visible-for-pick-mode">Your donation pickup request has been received.</h4>
                    <p class="confirm-msg-body visible-for-drop-mode">
                        You will receive a mail shortly containing a list of nearby Drop-off points/NGOs that require your donations.
                    </p>
                    <p class="confirm-msg-body visible-for-pick-mode">
                        You will receive a confirmation mail for your request shortly. Please make sure you're available to hand over the donation during the chosen pickup slot. Please call <a href='tel:8884784742'>8884784742</a> for any quick queries.
                    </p>
                </div>
            </div>
            <div class="order-status-text order-failed">
                <h4 class="order-status-heading">Uh-oh!<br>Order couldn't be placed.</h4>
                <div class="order-status-body">
                    <p>An error occurred while placing the order. Please try again later. Or call <a href='tel:8884784742'>8884784742</a> for assistance.</p>
                    <p>Any money deducted from your bank account will be automatically refunded within 4-5 work days.</p>
                </div>
            </div>
        </div>
    </div>
</div>            </div>
        </div>
    </div>
</div> <!-- #one-column-template -->


</div><!-- #main .inner -->


</div><!-- #main -->


</div><!-- #container -->





<div id="um_upload_single" style="display:none">
    
</div><div id="um_view_photo" style="display:none">

    <a href="#" data-action="um_remove_modal" class="um-modal-close"><i class="um-faicon-times"></i></a>
    
    <div class="um-modal-body photo">
    
        <div class="um-modal-photo">

        </div>

    </div>
    
</div>  <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/page-donate.js?ver=1575458501'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/sadsindia.org\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.5'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/sadsindia.org","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d05137844267e1c7c9e234c529e8f4e6","fragment_name":"wc_fragments_d05137844267e1c7c9e234c529e8f4e6"};
/* ]]> */
</script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.tools.min.js?ver=1.2.7'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/drop-downs.js?ver=1.4.8'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/waypoints.js?ver=2.0.2'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.plugins.lib.js?ver=1.0'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/skrollr.min.js?ver=1.0'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/modernizr.js?ver=2.7.1'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.flexslider.js?ver=1.2'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/owl.carousel.min.js?ver=4.1'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.validate.min.js?ver=1.9.0'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.mb.YTPlayer.js?ver=1.0'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/jquery.prettyPhoto.js?ver=3.1.6'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/isotope.pkgd.min.js?ver=3.0.2'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/imagesloaded.pkgd.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/slider.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mo_theme = {"name_required":"Please provide your name","name_format":"Your name must consist of at least 5 characters","email_required":"Please provide a valid email address","url_required":"Please provide a valid URL","phone_required":"Minimum 5 characters required","message_required":"Please input the message","message_format":"Your message must be at least 15 characters long","success_message":"Your message has been sent. Thanks!","blog_url":"https:\/\/sadsindia.org","loading_portfolio":"Loading the next set of posts...","finished_loading":"No more items to load..."};
/* ]]> */
</script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/main.js?ver=1575322086'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/sads-user-management/js/User.js?ver=1575378221'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script crossorigin="anonymous" integrity="sha256-vOtzmT0JTEyCHHVxkhEDvcjAXpCCxPxRPSRDWNU1k9s=" type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/autotrack/2.4.1/autotrack.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://sadsindia.org/wp-content/themes/fusion/js/libs/waypoints.sticky.min.js?ver=2.0.2'></script>
        <script type="text/javascript">
            jQuery( '#request' ).val( '' );
        </script>
    
</body>
</html><script async defer src="https://checkout.razorpay.com/v1/checkout.js" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFwT8n-b4NcP8JRWpc6WG0ymcwj2icBU4&libraries=places&callback=gmapsLibLoaded"
        async></script>
<script>
    var gmapLibLoadedAttempt = 0;
    function gmapsLibLoaded() {
        if(typeof initPlacesAutocomplete == "undefined") {
            if(gmapLibLoadedAttempt <= 10) {
                gmapLibLoadedAttempt++;
                setTimeout("gmapsLibLoaded", 500);
            } else {
                alert("There seems to be a network issue. Please refresh the page to hopefully resolve the same.");
                window.location.reload();
            }
        } else {
            initPlacesAutocomplete();
        }
    }
</script>