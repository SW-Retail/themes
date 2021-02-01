{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
<div class="row">
    <!-- filter over 2 columns, will automaticall collapse on mobile -->
    <div class="col-md-2">
        {if:theme_group_filter:=:1}
            {block:menu:leftmenu:class=menu-vertical menu-navigator}
        {if_end}
        {filter}
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