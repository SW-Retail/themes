{templater_start}
{template_version:swretail_r5_9_34}

<footer>
    <div class="footer__top tmplt_base_color">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    {block:menu:footer-col-1:class=tmplt_base_color_text menu-vertical}
                    {block:plugin:facebook}
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    {block:menu:footer-col-2:class=tmplt_base_color_text menu-vertical}
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    {block:menu:footer-col-3:class=tmplt_base_color_text menu-vertical}
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    {block:menu:footer-col-4:class=tmplt_base_color_text menu-vertical}
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom py-3">
        <div class="container">
            <div class="row">
                {block:cms:footer}
            </div>
        </div>
    </div>
</footer>