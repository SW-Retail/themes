{templater_start}
{template_version:swretail_r5_9_34}
{remark:Render article in a list}

<article class="product {sw_setting_products_per_row_mobile} {sw_setting_products_per_row}" role="region" aria-label="Blouse met print" data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    <div class="col-12 product__content px-3 pt-3 pb-4 position-relative h-100">
        {if:overlay_text:<>:}
            <span class="product__discount position-absolute tmplt_sales_color tmplt_base_color_text">{overlay_text}</span>
        {if_end}
        <div class="product__image d-flex align-items-center justify-content-center p-3">
            {if:has_image:=:false}
                <img class="h-100 w-100 object-fit-contain" src="{article_image:0}" alt="{article_image_alt:0}"/>
            {if_end}
            {if:has_image:=:true}
                <img class="h-100 w-100 object-fit-contain" src="/image/small/{article_image:0}" alt="{article_image_alt:0}"/>
            {if_end}
        </div>
        <div class="product__text text-center">
            <h3 class="fs-5 fw-normal">{*article_name}</h3>
            <p>{*article_ovw_subline}</p>

            <div class="product__bottom mt-3 d-flex flex-wrap justify-content-center gap-2">
                <span class="product__price rounded-pill px-4 py-2 d-flex align-items-center fw-semibold gap-2 tmplt_base_color tmplt_base_color_text">
                    <span class="product__price--discount {uitoggle_pricing_discount} position-relative fw-light">{sap_original_price:format:currency}</span>{sap_price:format:currency}
                </span>
                <div class="product__links d-flex justify-content-center gap-2">
                    <span class="product__link d-flex justify-content-center align-items-center rounded-circle tmplt_base_color tmplt_base_color_text"><i class="fas fa-long-arrow-alt-right"></i></span>
                    {if:st_pr_buy_on_ovw:=:true}
                        {if:maatbalk:=:}
                            <div class="d-flex overview__cart gap-2 {uitoggle_addtocart}">
                                <button class="product__link d-flex justify-content-center align-items-center rounded-circle tmplt_base_color tmplt_base_color_text" onclick="swShop.addToCartExecute({article_id},1);event.stopPropagation();return false;"><i class="fas fa-cart-plus"></i></button>

                                {if:wishlist_active:=:true}
                                    {block:wishlist_add_button}
                                {if_end}
                            </div>

                            {if:show_notify_me_in_stock:=:1}
                            <div class="d-flex overview__cart">
                                <button class="product__link d-flex justify-content-center align-items-center rounded-circle tmplt_base_color tmplt_base_color_text" onclick="swShop.notifyMe(this);event.stopPropagation();return false;">{_Geef me een seintje}</button>
                                {if:wishlist_active:=:true}
                                    {block:wishlist_add_button}
                                {if_end}
                            </div>
                            {if_end}
                        {if_end}
                    {if_end}
                </div>
            </div>
        </div>
    </div>
</article>