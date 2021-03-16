{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{remark: renders articles in a small list}

<div class="col-6 col-md-3 article_item_small"  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    <a title="{artoms}" href="{article_link}" class="article_item_link">
        <div class="article_content">
            <div class="article_image_list_mini_container">
                <div class="article_image_list">
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
            </div>
             <div class="article_header pt-3">
                <b>{*article_name}</b>
                <p>{artfabr}</p>
            </div>
            <div class="{uitoggle_pricing_normal}" >
                <h3 id="article_baseprice" class="tmplt_attention_color pull-right"> {sap_price:format:currency}</h3>
            </div>
            <div class="{uitoggle_pricing_discount} hold_the_line">

                <div id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through;"> {sap_original_price:format:currency} </div>
                <h3 id="article_baseprice" class="tmplt_attention_color pull-right"> {sap_price:format:currency}</h3>
            </div>
        </div>
    </a>
</div>
