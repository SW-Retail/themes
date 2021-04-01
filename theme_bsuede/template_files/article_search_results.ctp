{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}

<div class="row"><div class="col-12">{breadcrumb_content}</div></div>

<div class="row mt-2">
    <!-- filter over 2 columns, will automaticall collapse on mobile -->
    <div class="col-md-2" id="category-filter" data-view="filter">
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
    <div class="filter-button tmplt_sales_color text-center" id="category-filter-button" onclick="swShop.mobileFilterShow()">
        <i class="fas fa-filter"></i> <p>Filter</p>
    </div>
    <!-- main content -->
    <div class="col-md-10">
        <!-- paging and sort handler  -->
        <div class="col-12">
            {amt_handler}
            {sort_handler}
        </div>
        <div class="row">
            {page_data}
        </div>
        <div class="col-12">
            <div class="pull-left" style="padding:10px;">{*theme_article_amounts}</div>
            {paging_handler}
        </div>
    </div>

</div>
{templater_stop}
