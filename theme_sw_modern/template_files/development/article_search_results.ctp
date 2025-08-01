{templater_start}
{template_version:swretail_r6_4_54}

{if:current_cat.cms_show_cat_blocks:<>:}
    {block:auto_categories}
{if_end}

{if:current_cat.cms_show_cat_blocks:<>:only_cat}
    <section class="products" aria-labelledby="overview-products__title">
        <div class="container">
            <div class="row ml-0 mr-0 g-4">
                <div class="col-12 p-0">
                    <div class="row ml-0 mr-0 g-4 mb-1 mb-md-3">
                        <div class="col-12 col-sm-3 h-100 d-flex align-items-center p-0">
                            <span class="products__filter-title d-block pb-1 fs-4 fw-bold w-100">{breadcrumb_content}</span>
                        </div>
                        <div class="col-12 col-sm-9 h-100 d-flex flex-wrap align-items-center gap-3 justify-content-center justify-content-sm-end p-0">
                            {amt_handler}
                            {sort_handler}
                        </div>
                    </div>
                </div>
                <div class="col-3 p-0" id="category-filter" data-view="filter">
                    <div class="col-12 p-0">
                        <div class="filter-overview">
                            <div class="tmplt_sales_color" id="filter-closer" onclick="swShop.mobileFilterShow(false);">
                                <i class="fas fa-times"></i> <p>Sluit filter</p>
                            </div>
                            {if:theme_group_filter:=:1}
                                {block:menu:leftmenu:class=menu-vertical menu-navigator}
                            {if_end}
                            {filter}
                        </div>
                    </div>
                </div>
                <div class="filter-button tmplt_sales_color text-center" id="category-filter-button" onclick="swShop.mobileFilterShow()">
                    <i class="fas fa-filter"></i> <p>Filter</p>
                </div>
                <div class="col-12 col-md-9 p-0">
                    <div class="row g-4 gy-lg-5">
                        {page_data}
                    </div>
                    <div class="col-12 pt-3 pt-lg-4 p-0">
                        <div class="row ml-0 mr-0 gx-4 gy-1">
                            <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center justify-content-sm-start fs-6 p-0">
                                <p>{*theme_article_amounts}</p>
                            </div>
                            <div class="col-12 col-sm-8 p-0">
                                {paging_handler}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{if_end}

{templater_stop}
