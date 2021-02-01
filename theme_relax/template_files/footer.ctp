{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}


{if:current_url:=:/thisistheold344fd82js781k047.html}
    <div class="newsletter mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Meld u aan voor onze nieuwsbrief</p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</span>
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3 mt-5">
                                {form:newslettersubscribe}
                                {input:email:class=newsletter col-7}
                                {form_submit:Aanmelden:class=col-3 ml-2 btn btn-aanmelden}
                                {form_param:newsletter:1:}
                                {form_param:after_submit:Bedankt voor het inschrijven op onze nieuwsbrief}
                                {form_end}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{if_end}

<div class="footer">
    <hr>
        <div class="container">
            <div class="row mob-text-center">
                <div class="col-12 col-md-3">
                    {block:menu:footer-col-1:class_menu-vertical:class_tmplt_base_color_text}
                    {facebook_widget}
                </div>
                <div class="col-12 col-md-3">
                    {block:menu:footer-col-2:class_menu-vertical:class_tmplt_base_color_text}
                </div>
                <div class="col-12 col-md-3">
                    {block:menu:footer-col-3:class_menu-vertical:class_tmplt_base_color_text}
                </div>
                <div class="col-12 col-md-3">
                    {block:menu:footer-col-4:class_menu-vertical:class_tmplt_base_color_text}
                </div>
            </div>
            <div class="row row mob-text-center">
                <div class="col-9">

                </div>
                <div class="col-3">
                    {block:plugin:webwinkelkeur:autofooter}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {block:cms:footer}
                </div>
            </div>
        </div>
        </div>
</div>
