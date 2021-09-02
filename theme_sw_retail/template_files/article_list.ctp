{templater_start}
{template_version:swretail_r5_9_34}
{remark:Render article in a list}

<div class="{sw_setting_products_per_row_mobile} {sw_setting_products_per_row} article_item"  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    {block:article_list_top:optional}
    {if:overlay_text:<>:}
        <div class="article-item-overlayer aio_rotated">{overlay_text}</div>
    {if_end}
    <a title="{artoms}" href="{article_link}" class="article_item_link">


        <div class="article_content_list">
            <div class="article_header">
                <p><b>{*article_name}  </b></p>

            </div>
            <div class="article_image_list_container">
                <div class="article_image_list">
                    {if:has_image:=:false}
                        <img src="{article_image:0}" alt="{article_image_alt:0}"/>
                    {if_end}
                    {if:has_image:=:true}
                        <img src="/image/small/{article_image:0}" alt="{article_image_alt:0}"/>
                    {if_end}
                </div>
            </div>

            <div class="article_remaining">
                <div class="row"><p>{*article_ovw_subline}</p> </div>

                {if:st_pr_buy_on_ovw:=:true}
                    {if:maatbalk:=:}
                    <div style="float:left">
                        <button onclick="swShop.addToCartExecute({article_id},1);event.stopPropagation();return false;"><i class="fas fa-cart-plus"></i></button>
                    </div>
                    {if_end}
                {if_end}
                <div style="float:right">

                    <div class="{uitoggle_pricing_normal}" >

                        <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>

                    </div>
                    <div class="{uitoggle_pricing_discount} hold_the_line">
                            <div id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through;"> {sap_original_price:format:currency} </div>
                            <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                    </div>
                </div>
            </div>
        </div>
    </a>
    {block:article_list_bottom:optional}
</div>


