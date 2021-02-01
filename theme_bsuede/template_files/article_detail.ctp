{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}

<div class="row">
    <div class="col-12"><button onclick="swShop.gotoPreviousURL();return false;"><i class="fas fa-arrow-left"></i>Terug</button></div>
    <div class="col-12 col-md-6" style="position:relative;">
        {if:overlay_text:<>:}
            <div class="article-item-overlayer aio_rotated">{overlay_text}</div>
        {if_end}
        {if:product_zoom:=:true}
            <div class="article-item-overlayer zoom_overlay"><i class="fas fa-search-plus"></i></div>
        {if_end}
        <div class="article_image_detail"><img src="/image/{article_image:0}" alt="{article_image_alt:0}"/></div>
        {article_images}
    </div>
    <div class="col-10 offset-1 offset-md-0 col-md-5 col-lg-5 product-details">
        <!-- do not change the id (or change the javascript also) and do not remove the block. it is needed for ajax loading for prices -->
        <div class="row" id="render_article_detail_here">
            {block_declare:article_prices}
            <div class="col-12 mb-3">
                <h1>{*article_name}</h1>
                <a href="{rl_web_url}"><img style="max-width:100px" src="/{rl_web_logo}" alt="{rl_web_title}"/></a>
                <p>{*theme_article_description}</p>
            </div>
            <div class="col-12">
                <div class="{uitoggle_pricing_normal}">
                    <h1 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h1>
                </div>
                <div class="{uitoggle_pricing_discount}">
                    <h3 id="article_original_price" class="tmplt_attention_color d-inline detail-pricing" style="text-decoration: line-through"> {sap_original_price:format:currency}</h3>
                    <p class="d-inline detail-pricing">{sap_description}  Nu Voor</p>
                    <h1 id="article_baseprice" class="tmplt_attention_color d-inline detail-pricing"> {sap_price:format:currency}</h1>
                </div>
            </div>
            <div class="col-12 mt-3 mb-5">
                {define_c:st_pr_sizeselect:1}

                {if:st_pr_sizeselect:=:1}
                    <div class="{hide_sizeruler_selection}">Kies uw maat</div>
                    <select class="size-selector {hide_sizeruler_selection}" id="sw_sizeruler_select"> {size_select} </select>

                {if_end}

                {if:st_pr_sizeselect:=:0}
                    <div class="size_select_buttons {hide_sizeruler_selection}"  >
                        {size_select}
                    </div>
                    {define:st_pr_sizeselect:1}
                    {remark:We work with a hidden selector that gets set by the buttons}
                    <select class="size-selector hide" id="sw_sizeruler_select"> {size_select} </select>
                    {define:st_pr_sizeselect:0}

                {if_end}
            </div>
            <div class="col-12">
                <div class="{uitoggle_tierprices}">
                    <p><b>Koop meer en bespaar !</b> </p>
                    {tierprices}
                </div>
            </div>
            
            <div class="col-12 {uitoggle_addtocart}">
                <button class="tmplt_sales_color addtocart-article margin-top-1   sw-add-to-cart-button" onclick="swShop.addToCart(this);return false;">Toevoegen <i class="fas fa-shopping-cart"></i></button>
            </div>
            {block_end}

        </div>
    </div>

</div>

<div  class="row mt-5">
    <div class="col-12">
        <hr>
        <h2>Productomschrijving</h2>
        <p>{artaddinfo}</p>
        <p>{*article_information}</p>
        <p>{article_freefields}</p>
        <hr>
    </div>
</div>

<!-- uitoggle_upsell_available will evaluate to hide when there are no upsells -->
<div class="article-list-small upsell {uitoggle_upsell_available} ">
    <h3>Alternatieve producten</h3>
    <div class="row">
        {upsell}
    </div>
</div>

<!-- uitoggle_crosssell_available will evaluate to hide when there are no upsells -->
<div class="article-list-small  crosssell {uitoggle_crosssell_available} ">
    <h3>Bijbehorende producten</h3>
    <div class="row">
        {crosssell}
    </div>
</div>



{templater_stop}
<script>
    // init product zoom
    $(function() {
        swShopHelper.setupZoom();
    });
</script>
