{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{remark: renders articles in a small list}

{if:slider:=:0}
    <div class="col-6 col-lg-3 article_item_small"  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
        {block:article_list_small_top:optional}
        <a title="{artoms}" href="{article_link}" class="article_item_link">
            <div class="article_content">
                <div class="row">
                    <div class="article_image_list col-12">
                        <div class="row h-100">
                            <div class="col-12 my-auto">
                                {if:has_image:=:false}
                                    <img class="img-fluid" src="{article_image:0}" alt="{article_image_alt:0}"/>
                                {if_end}
                                {if:has_image:=:true}
                                    <img class="img-fluid" src="/image/mini/{article_image:0}" alt="{article_image_alt:0}"/>
                                {if_end}
                            </div>
                        </div>
                    </div>
                    <div class="article_header pt-3 col-12">
                        <b class="tmplt_base_color_text">{*article_name}</b>
                    </div>
                    <div class="{uitoggle_pricing_normal} col-12">
                        <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                    </div>
                    <div class="{uitoggle_pricing_discount} hold_the_line col-12">

                        <div id="article_original_price" class="tmplt_base_color_text" style="text-decoration: line-through;"> {sap_original_price:format:currency} </div>
                        <h3 id="article_baseprice" class="tmplt_attention_color"> {sap_price:format:currency}</h3>
                    </div>
                </div>
            </div>
        </a>
        {block:article_list_small_bottom:optional}
    </div>
{if_end}

{if:slider:=:1}
    <li class="splide__slide">
        <div class=""  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
            <div class="article_item_small_overlay">
                <a title="{artoms}" href="{article_link}" class="article_item_link">
                    <div class="article_content">
                        {if:overlay_text:<>:}
                        <div class="article-item-overlayer aio_rotated">{overlay_text}</div>
                        {if_end}
                        <div class="article_header">
                            <b>{artoms}</b>
                        </div>

                        <div class="article_image_list_mini_container">
                            <div class="article_image_list">
                                {if:has_image:=:false}
                                    <img src="{article_image:0}" alt="{article_image_alt:0}"/>
                                {if_end}
                                {if:has_image:=:true}
                                    <img src="image/mini/{article_image:0}" alt="{article_image_alt:0}"/>
                                {if_end}
                            </div>
                        </div>

                        <h3 class="tmplt_attention_color pull-right">{sap_price:format:currency}</h3>
                    </div>
                </a>
            </div>
        </div>
    </li>
{if_end}

