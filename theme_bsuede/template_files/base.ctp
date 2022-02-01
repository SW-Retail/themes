<!DOCTYPE html> 

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://cdn.swretail.nl">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <style>
        .hide {
            display: none;
        }

        .sw-modal {
            visibility: hidden;
        }

    </style>

{templater_start}

{template_name:swretail_bsuede}
    <meta name="description" content="{meta_description}"/>
    <meta name="keywords"    content="{meta_keywords}" />
    <meta name="title"       content="{meta_title}" />
    <meta name="robots"      content="{meta_seo_tags}">
    
    <title>{meta_title}</title>

    <script src="{sw_cdn_url}/js/jquery-3.5.1.min.js?v={version}" async></script>

    
    <!-- bootstrap -->
    <link   rel="preload" as="style"  type="text/css" href="{sw_cdn_url}/plugins/bootstrap/css/bootstrap.min.css?v={version}" onload="this.onload=null;this.rel='stylesheet'" />
    <!-- master stylesheet -->
    <link rel="preload" as="style"  type="text/css" href="{static_content}/css/stylesheet.css?v={version}" onload="this.onload=null;this.rel='stylesheet'" />
    <!-- some icons -->
    <link rel="preload" as="style" type="text/css" href="{sw_cdn_url}/plugins/fontawesome/css/font_awesome_all.min.css?v={version}" onload="this.onload=null;this.rel='stylesheet'" />
    <!-- this stylesheet handles the configuration from the application -->
    <link rel="preload" as="style"   type="text/css" href="/webshop_stylesheet/1?v={static_version}" onload="this.onload=null;this.rel='stylesheet'"/>
    <!-- nice menu --> 
    <link rel="preload" as="style"   type="text/css" href="{sw_cdn_url}/css/fancy-menu.css?v={version}" onload="this.onload=null;this.rel='stylesheet'"/>
    <link rel="preload" as="style" href="{sw_cdn_url}/plugins/splide/splide.min.css" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <!-- grid stylesheet with fonts -->
        <link rel="stylesheet" type="text/css" href="{sw_cdn_url}/plugins/bootstrap/css/bootstrap.min.css?v={version}"/>
        <!-- master stylesheet -->
        <link rel="stylesheet" type="text/css" href="{static_content}/css/stylesheet.css?v={version}"/>
        <!-- some icons -->
        <link rel="stylesheet" type="text/css" href="{sw_cdn_url}/plugins/fontawesome/css/font_awesome_all.min.css?v={version}"/>
        <!-- this stylesheet handles the configuration from the application -->
        <link rel="stylesheet"  type="text/css" href="/webshop_stylesheet?v={version}"/>
        <!-- nice menu --> 
        <link rel="stylesheet" type="text/css" href="{sw_cdn_url}/css/fancy-menu.css?v={version}"/>
        <!-- splider -->
        <link rel="stylesheet" href="{sw_cdn_url}/plugins/splide/splide.min.css">
        
    </noscript>



    <script src="{sw_cdn_url}/plugins/bootstrap/js/bootstrap.bundle.min.js?v={version}" async></script>


    <!-- The webshop app -->
    <script src="/javascript.js?v={version}" async></script>


    <link rel="icon" href="/{favicon}">

    <!-- splider is there for sliders -->
    <script src="{sw_cdn_url}/plugins/splide/splide.min.js" async></script>


    <!-- SW-Retail theme bsuede -->

    {swretail_plugin_place_head}

</head>

<body>

    {swretail_plugin_place_top}

    <!--  some cart buttons -->
    <div id="cart_putin_confirmation" class="hide">
        <button onclick="swShopHelper.modalHide();"   >Verder winkelen</button>
        <button onclick="swShopHelper.loadCheckout();"><i class="fas fa-shopping-cart"></i> Winkelwagen</button>
    </div>

    <!-- modal dialog  -->
    <div id="modal_ok" class="hide">
        <button onclick="swShopHelper.modalHide();"   >OK</button>
    </div>

    <!-- UI blocking div can be accessed using swShopHelper.blockUI  -->
    <div class="blocked" id="block-ui"> <i class="fas fa-spinner fa-pulse" style="font-size:100px; position:relative;top: calc(50% - 100px);left: 50%;"></i> </div>

    <!-- Modal div, can be handled using swShopHelper.modalShow, better not to delete this-->
    <div class="sw-modal" id="sw-modal-dialog">
        <div class="sw-modal-content">
            <span class="close-button" onclick="swShopHelper.modalHide();">&times;</span>
            <div id="sw-modal-title">
                <h3>Titel</h3>
            </div>
            <div id="sw-modal-text">
                <p>Text</p>
            </div>

            <div id="sw-modal-footer">

            </div>
        </div>
    </div>


    <!-- Message for cookies -->
    <div id="cookie-message"><div id="cookie-message-text"></div><button onclick="swShop.cookieDismiss('ok');return false;" >OK</button></div>
    {header}
    {block:hook:hook_after_header:page_block}

    <div class="container">
        <!-- main content -->
        <div class="main mt-2" id="main_content">
            <div id="content" >
                <!-- here the content will be inserted -->
                {content}
            </div>
        </div>
    </div>



    {block:hook:hook_above_footer:page_block}
    {footer}
    {block:hook:hook_below_footer:page_block}

</body>


</html>

<script>
    // it is very important that this line is preserved in order for the webshop to keep functioning. do not meddle with this
    var shopConfiguration={configuration_json};

    // the additional javascript which will be inlcuded from the configuration
    {additional_javascript}


</script>

{templater_stop}

