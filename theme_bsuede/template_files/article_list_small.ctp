{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{remark: renders articles in a small list}

<div class="col-6 col-md-3 article_item_small mb-5"  data-id="{article_id}" data-link="{article_link}" onclick="swShop.articleLoad(this);">
    <a title="{artoms}" href="{article_link}" class="article_item_link">
        <div class="article_content">
            <div class="row">
                <div class="col-12 my-auto">
                    {if:has_image:=:false}
                        <img class="img-fluid" src="{article_image:0}" alt="{article_image_alt:0}"/>
                    {if_end}
                    {if:has_image:=:true}
                        <img class="img-fluid" src="/image/small/{article_image:0}" alt="{article_image_alt:0}"/>
                    {if_end}
                </div>
            </div>
            <div class="row article-information">
                <div class="col-12 text-center"><b>{*article_name}</b></div>
                <div class="col-12 text-center article_margin">

                    <div class="{uitoggle_pricing_normal}" >
                        <h3 id="article_baseprice" class="tmplt_attention_color pull-right"> {sap_price:format:currency}</h3>
                    </div>
                    <div class="{uitoggle_pricing_discount} hold_the_line">

                        <div id="article_original_price" class="tmplt_attention_color" style="text-decoration: line-through;"> {sap_original_price:format:currency} </div>
                        <h3 id="article_baseprice" class="tmplt_attention_color pull-right"> {sap_price:format:currency}</h3>
                    </div>

                </div>
                <div class="col-12 text-center m-0 addtocart-pos">
                    <div class="addtocart mx-auto"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </a>
</div>


