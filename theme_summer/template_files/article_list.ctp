{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{remark:Render article in a list}
<div class="{sw_setting_products_per_row_mobile}  {sw_setting_products_per_row}  position-relative article_item"  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    {block:article_list_top:optional}

    {if:overlay_text:<>:}
        <div class="article-item-overlayer aio_rotated {overlay_text_type}" >{overlay_text}</div>
    {if_end}

    <a title="{artoms:format:htmlattribute}" href="{article_link}" class="article_item_link">
        <div class="article_content_list mb-5">
            <div class="article_image_list_container">
                <div class="article_image_list">
                    
                    <div class="row h-100">
                        <div class="col-12 my-auto">
                            {if:has_image:=:false}
                                <img class="img-fluid" src="{article_image:0}" alt="{article_image_alt:0}"/>
                            {if_end}
                            {if:has_image:=:true}
                                <img class="img-fluid" src="/image/small/{article_image:0}" alt="{article_image_alt:0}"/>
                            {if_end}

                        </div>
                    </div>
                    
                </div>
            </div>
            
            {if:st_pr_buy_on_ovw:=:true}
{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{remark:Render article in a list}
<div class="{sw_setting_products_per_row_mobile} {sw_setting_products_per_row}  position-relative article_item" data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    {block:article_list_top:optional}

    {if:overlay_text:<>:}
        <div class="article-item-overlayer aio_rotated {overlay_text_type}" >{overlay_text}</div>
    {if_end}

    <a title="{artoms:format:htmlattribute}" href="{article_link}" class="article_item_link">
        <div class="article_content_list mb-5">
            <div class="article_image_list_container">
                <div class="article_image_list">

                    <div class="row h-100">
                        <div class="col-12 my-auto">
                            {if:has_image:=:false}
                                <img class="img-fluid" src="{article_image:0}" alt="{article_image_alt:0}"/>
                            {if_end}
                            {if:has_image:=:true}
                                <img class="img-fluid" src="/image/small/{article_image:0}" alt="{article_image_alt:0}"/>
                            {if_end}

                        </div>
                    </div>

                </div>
            </div>

            {if:st_pr_buy_on_ovw:=:true}
                {if:maatbalk:=:}
                    <div class="{uitoggle_addtocart}">
                        <button class="btn-addtocart" onclick="swShop.addToCartExecute({article_id},1);event.stopPropagation();return false;"><i class="fas fa-cart-plus"></i></button>
                        {if:wishlist_active:=:true}
                            {block:wishlist_add_button}
                        {if_end}
                    </div>

                    {if:show_notify_me_in_stock:=:1}
                        <div>
                            <button class="btn-addtocart" onclick="swShop.notifyMe(this);event.stopPropagation();return false;">{_Geef me een seintje}</button>
                            {if:wishlist_active:=:true}
                                {block:wishlist_add_button}
                            {if_end}
                        </div>
                    {if_end}
                {if_end}
            {if_end}

            <div class="article_remaining mt-3">
                <div class="article_header">
                    <p><b>{*article_name} </b></p>
                    <p>{*article_ovw_subline}</p>
                </div>
                <div class="{uitoggle_pricing_normal}" >
                    <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                </div>
                <div class="{uitoggle_pricing_discount} hold_the_line">
                    <div id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through;">
                        {sap_original_price:format:currency}
                    </div>
                    <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                </div>
            </div>
        </div>
    </a>
    {block:article_list_bottom:optional}
</div> 
            
            <div class="article_remaining mt-3">
                <div class="article_header">
                    <p><b>{*article_name}  </b></p>
                    <p>{*article_ovw_subline}</p>
                </div>
                <div class="{uitoggle_pricing_normal}" >
                    <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                </div>
                <div class="{uitoggle_pricing_discount} hold_the_line">
                    <div id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through;"> 
                        {sap_original_price:format:currency} 
                    </div>
                    <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                </div>
            </div>
        </div>
    </a>
    {block:article_list_bottom:optional}
</div>
