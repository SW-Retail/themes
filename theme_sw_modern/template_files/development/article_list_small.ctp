{templater_start}
{template_version:swretail_r5_9_34}
{remark: renders articles in a small list}

{define_c:slider:0}

{if:slider:=:0}
<article class="product col-12 col-sm-6 col-lg-4" role="region" aria-label="Blouse met print" data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
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

            <div class="product__bottom mt-3 d-flex flex-wrap justify-content-center gap-2">
                <span class="product__price rounded-pill px-4 py-2 d-flex align-items-center fw-semibold gap-2 tmplt_base_color tmplt_base_color_text">
                    <span class="product__price--discount {uitoggle_pricing_discount} position-relative fw-light">{sap_original_price:format:currency}</span>{sap_price:format:currency}
                </span>
                <a class="product__link d-flex justify-content-center align-items-center rounded-circle tmplt_base_color tmplt_base_color_text" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
</article>
{if_end}



{if:slider:=:1}
<li class="splide__slide">
    <article class="product" role="region" aria-label="Blouse met print" data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
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

                <div class="product__bottom mt-3 d-flex flex-wrap justify-content-center gap-2">
                    <span class="product__price rounded-pill px-4 py-2 d-flex align-items-center fw-semibold gap-2 tmplt_base_color tmplt_base_color_text">
                        <span class="product__price--discount {uitoggle_pricing_discount} position-relative fw-light">{sap_original_price:format:currency}</span>{sap_price:format:currency}
                    </span>
                    <a class="product__link d-flex justify-content-center align-items-center rounded-circle tmplt_base_color tmplt_base_color_text" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </article>
</li>
{if_end}

