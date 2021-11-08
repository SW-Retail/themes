{templater_start}
{template_version:swretail_r5_9_66}

{block_declare:cart_button:clear}
    {if:show_add_to_cart:<>:}
        {if:st_pr_show_amt:=:true}
            <div class="col-12  {uitoggle_addtocart}  ">
                <div class="input-group ">
                    <input id="cart_amount" type="text" class="form-control  " placeholder="Aantal" style="width:50px"/>
                    <div class="input-group-append ">
                        <button class="btn btn-outline-secondary tmplt_sales_color " onclick="swShop.addToCart(this);return false;"  >Aan winkelwagen toevoegen</button>
                    </div>
                </div>
            </div>
        {if_end}

        {if:st_pr_show_amt:<>:true}
            <div class="col-12 {uitoggle_addtocart}">
                <button class="btn btn-addtocart  sw-add-to-cart-button" onclick="swShop.addToCart(this);return false;">Aan winkelwagen toevoegen</button>
            </div>
        {if_end}
    {if_end}
{block_end}

{block_declare:article_default}

{breadcrumb}

<div class="row">
    <div class="col-12"><button onclick="swShop.gotoPreviousURL();return false;"><i class="fas fa-arrow-left"></i>Terug</button></div>
</div>
<div class="row"">

<div class="col-12 col-md-8"><h1>{*article_name}</h1></div>
<div class="col-12 col-md-4">
    <div style="max-width:100px">
        <a href="{rl_web_url}"><img style="max-width:100px" src="/{rl_web_logo}" alt="{rl_web_title}"/></a>

    </div>
</div>

</div>
<div class="row" data-view="article-detail">
    <div class="col-5" style="position:relative;">
        {if:overlay_text:<>:}
        <div class="article-item-overlayer aio_rotated">{overlay_text}</div>
        {if_end}
        {if:product_zoom:=:true}
        <div class="article-item-overlayer zoom_overlay"><i class="fas fa-search-plus"></i></div>
        {if_end}

        <div class="article_image_detail"  ><img src="/image/{article_image:0}" alt="{article_image_alt:0}"/></div>
        {article_images}
    </div>
    <div class="col-7">
        <!-- do not change the id (or change the javascript also) and do not remove the block. it is needed for ajax loading for prices -->

        <div class="row" id="render_article_detail_here">

            {block_declare:article_prices:clear}

            <div class="col-12">
                <p>{*theme_article_description}</p>
            </div>

            {block:article_stock}

            <div class="col-12">
                <div class="{uitoggle_pricing_normal}">
                    <h1 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h1>
                </div>
                <div class="{uitoggle_pricing_discount}">
                    <h3 id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through"> {sap_original_price:format:currency}</h3>
                    <p>{sap_description}  Nu Voor</p>
                    <h1 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h1>
                </div>
            </div>

            <div class="col-12">
                <div class="{uitoggle_tierprices}">
                    <p><b>Koop meer en bespaar !</b> </p>
                    {tierprices}
                </div>
            </div>


            {if:article_filter.iaf_is_virtual:=:1}
                <div class="col-12">
                    {if:st_pr_sizeselect:=:1}
                        <select onchange="swShop.loadArticlePrices($(this).val());" id="sw_virtual_selected">
                            <option value="">Geen</option>
                            {foreach:array_virtual:virtual}
                            <option value ="{virtual.af_linked_hoofdlijst_id}" {virtual.af_selected} >{virtual.af_value3}</option>
                            {foreach_end}
                        </select>
                    {if_end}

                    {if:st_pr_sizeselect:=:0}
                        <div class="size_select_buttons ">
                            {foreach:array_virtual:virtual}
                                <button  class="{virtual.af_selected}" value="{virtual.af_linked_hoofdlijst_id}" data-type="virtual" onclick="swShop.sizeSelected(this);return false;">{virtual.af_value3}</button>
                            {foreach_end}

                            {remark:We work with a hidden selector that gets set by the buttons}
                            <select onchange="swShop.loadArticlePrices($(this).val());" class="hide" id="sw_virtual_selected">
                                <option value="">Geen</option>
                                {foreach:array_virtual:virtual}
                                <option value ="{virtual.af_linked_hoofdlijst_id}" {virtual.af_selected} >{virtual.af_linked_hoofdlijst_id}</option>
                                {foreach_end}
                            </select>
                        </div>
                    {if_end}
                </div>
            {if_end}

            <div class="col-12">

                {define_c:st_pr_sizeselect:1}

                {if:st_pr_sizeselect:=:1}
                <div class="{hide_sizeruler_selection}">Kies uw maat</div>
                <select class="size-selector {hide_sizeruler_selection}" id="sw_sizeruler_select"> {size_select} </select>
                <div class="col-12 pt-3 px-0 {uitoggle_addtocart}  sw-add-to-cart-button">

                    <button class="tmplt_sales_color" onclick="swShop.addToCart(this);return false;">Aan winkelwagen toevoegen</button>
                </div>
                {if_end}


                {if:st_pr_sizeselect:=:0}

                <div class="size_select_buttons {hide_sizeruler_selection}"  >
                    {size_select}
                </div>
                {define:st_pr_sizeselect:1}
                {remark:We work with a hidden selector that gets set by the buttons}
                <select class="size-selector hide" id="sw_sizeruler_select"> {size_select} </select>
                {define:st_pr_sizeselect:0}
                {block:cart_button}
                {if_end}
            </div>


            {block_end}

        </div>

        <div class="col-12 px-0">
            <!-- you can place references to individual fields here. you can also use the meta *article_information -->
            {*article_information}

        </div>

        <div class="col-12 px-0">
            <!-- you can place references to individual fields here. you can also use the article_freefields for a generic free field representation -->
            <p>
                {article_freefields}
            </p>
        </div>


    </div>

</div>

<div  class="row">
    <div class="col-12">
        <p>{artaddinfo}</p>
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

{block_end}


{templater_stop}
<script>
    // init product zoom
    $(function() {
        swShopHelper.setupZoom();
    });
</script>
