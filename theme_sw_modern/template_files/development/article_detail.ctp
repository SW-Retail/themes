{templater_start}
{template_version:swretail_r5_9_66}

{block_declare:cart_button:clear}
    {if:show_add_to_cart:<>:}
        {if:st_pr_show_amt:=:true}
            <div class="col-12  {uitoggle_addtocart}  ">
                <div class="input-group ">
                    <input id="cart_amount" type="text" class="form-control  " placeholder="Aantal" style="width:50px"/>
                    <div class="input-group-append ">
                        <button class="btn btn-outline-secondary tmplt_sales_color " onclick="swShop.addToCart(this);return false;" >{_Aan winkelwagen toevoegen}</button>
                    </div>
                </div>
            </div>
        {if_end}

        {if:st_pr_show_amt:<>:true}
            <div class="col-12 {uitoggle_addtocart}">
                <button class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swShop.addToCart(this);return false;">{_Aan winkelwagen toevoegen}</button>
            </div>
        {if_end}
    {if_end}


    {if:show_notify_me_in_stock:<>:}
        <div class="col-12">
            <button class="btn  btn-warning" onclick="swShop.notifyMe(this);return false;">{_Geef me een seintje}</button>
            <p>{_Ontvang een e-mail van ons wanneer dit artikel weer op voorraad is!}</p>
        </div>
    {if_end}


    <div class="col-12">
        {if:wishlist_active:=:true}
            {block:wishlist_add_button}
        {if_end}
    </div>
{block_end}



{block_declare:article_default}

<nav class="breadcrumbs mt-5">
    <div class="container">
        <div class="row flex-wrap gap-3">
            <button class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swShop.gotoPreviousURL();return false;">{_Terug}</button>
            {breadcrumb}
        </div>
    </div>
</nav>

<section class="header--product mt-5" aria-labelledby="header__title">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 ms-auto me-auto">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="header__images">
                            {block_declare:article_image_detail}
                                <div class="article_image_detail"><img src="/image/{article_image:0}" alt="{article_image_alt:0}"/></div>
                                {article_images}
                            {block_end}
                        </div>
                    </div>
                    <div class="ms-auto col-12 col-lg-5">
                        <span class="header__subtitle">{*theme_article_description}</span>
                        <h1 id="header__title">{*article_name}</h1>

                        <div class="col-12">
                            <div class="{uitoggle_pricing_normal}">
                                <span class="header__price position-relative d-block fw-bold">{sap_price:format:currency}</span>
                            </div>
                            <div class="{uitoggle_pricing_discount}">
                                <span class="header__price position-relative d-block fw-bold">{sap_price:format:currency}</span>
                                <span class="header__price--old position-relative d-inline-block">{sap_original_price:format:currency}</span>
                            </div>
                        </div>

                        <div class="col-12">
                            {define_c:st_pr_sizeselect:1}

                            {if:st_pr_sizeselect:=:1}
                                <span class="size__label{hide_sizeruler_selection}">{_Kies uw maat}</span>
                                <div class="size__select">
                                    {block:full_sizeruler_selectbox}
                                </div>
                            {if_end}
                        </div>

                        <div class="col-12">
                            <div class="col-12">
                                {*article_information}
                            </div>
                            <div class="col-12">
                                {article_freefields}
                            </div>
                        </div>

                        {if:st_pr_sizeselect:=:1}
                            <div class="col-12">
                                {block:cart_button}
                            </div>
                        {if_end}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="paragraphs fs-6" aria-labelledby="paragraphs__title--first">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <h2 class="fw-bold text-uppercase fs-5" id="paragraphs__title--first">{_Extra informatie}</h2>
                <p>{artaddinfo}</p>
            </div>
        </div>
    </div>
</section>

{block_end}


{templater_stop}
<script>
    // init product zoom
    $(function() {
        swShopHelper.setupZoom();
    });
</script>

