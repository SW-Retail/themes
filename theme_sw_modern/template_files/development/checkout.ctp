{templater_start}
{template_version:swretail_r5_9_34}
<!-- do not remove the block declarations as the ajax update of the checkout depends on it! -->
<div class="container cms__object">
    <div class="row pt-3">
        <div class="col-12 col-lg-6 " id="render_cart_here">

            {block_declare:checkout}
            {checkout}
            {block_end}
        </div>
    </div>


    <div class="row pt-3">
        <div id="wishlist_cart" class="col-12 col-lg-6 {uitoggle_checkout_wishlist}">
            {block:wishlist}

            {block_declare:wishlist_cart}
            {foreach:wishlist_articles:wishlist_article}
                {define:wishlist_cart_article:{@load:article:{wishlist_article.article_id}}}
                    {block:wishlist_article_line}
            {foreach_end}


        </div>
    </div>

    {block_declare:wishlist_article_line:clear}
    <div class="row {uitoggle_checkout_wishlist}">

        <div class="col-4 checkout_article_img sw_pointer" onclick="swShop.articleLoad(this);" data-link="/{wishlist_cart_article:article_link}">
                    <img src="/image/small/{wishlist_cart_article:array_images:value:0:af_value2}">
        </div>
        <div class="col-8">
            <div class="row " >
                <div class="col-6 sw_pointer" onclick="swShop.articleLoad(this);" data-link="/{wishlist_cart_article:article_link}"  ><b>{wishlist_cart_article:artoms}</b></div>
                <div class="col-6">

                    <button title="Voeg het artikel toe aan uw winkelwagen" onclick="swShop.wishlistAddToShoppingCart({wishlist_article.id});return false;" >
                        <i class="fa fas fa-shopping-cart"></i>
                    </button>

                    <button title="Verwijder artikel van verlanglijst" order-det-id="{wishlist_article.id}" onclick="swShop.wishlistDeleteLine({wishlist_article.id});return false;" >
                        <i class="fa fas fa-trash"></i>
                    </button>

                </div>

            </div>

            {define:wishcartprice:{wishlist_cart_article:sap_price}}

            <div class="col-6">
                <div class="pull-right">
                    <b>{wishcartprice:format:currency}</b>
                </div>
            </div>
        </div>
    </div>

    {block_end}



    <div class="row">
        <div class="col-12 col-md-6 mt-3 {uitoggle_checkout_options}" id ="customer_checkout_options">
            <div id="checkout_options_total_line" class="row">
                {block_declare:checkout_options_total}
                <div class="col-6 checkout_total_line text-left">
                    <h3>{_Totaal:}</h3>
                </div>
                <div class="col-6 checkout_total_line text-left">
                    <h3>{invoice_total_ex_shipping_costs:format:currency}</h3>
                </div>
                {block_end}
            </div>

            <div class="row">
                <div class="col-12">
                    <h3>{_Afrekenen als}</h3>
                </div>
            </div>

            <div class="webshop_select_option" onclick="swCustomer.loadCustomerLogin();return false" id="checkout_create_account" type="sw_selection">
                {_Inloggen}
            </div>
            <div class="webshop_select_option" onclick="swShop.loadCreateAccount();return false" id="checkout_create_account" type="sw_selection">
                {_Account aanmaken}
            </div>
            <div class="webshop_select_option" onclick="swShop.loadCheckOutAsGuest();return false" id="checkout_guest" type="sw_selection">
                {_Afrekenen als gast}
            </div>


        </div>
    </div>



    <div class="{uitoggle_checkout_form} row" id="checkout_one_page">
        <div class="row col-12 checkout__discounts">
            <div class="col-lg-4 {uitoggle_discountcodes_redeem}">
                <div class="row">
                    <div class="col-12" >
                        <h3>{_Kortingscode}</h3>
                        <!-- form name is hardcoded in the backend -->
                        {form:discountcode}
                        <p>{_Ik heb een kortingscode}</p>

                        {input:discountcode:class=hold_the_line}
                        {form_submit:{_Kortingscode toevoegen}}

                        {form_end}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 {uitoggle_giftcards_redeem}">
                <div class="row">
                    <div class="col-12" >
                        <h3>{_Cadeaubon}</h3>
                        <!-- form name is hardcoded in the backend -->
                        {form:vouchercode}
                        <p>{_Ik heb een cadeaubon}</p>
                        {input:vouchercode:class=hold_the_line}
                        {form_submit:Cadeaubon toevoegen}
                        {form_end}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 {uitoggle_loyalty_discount}" >
                <div class="row">
                    <div class="col-12" >
                        <h3>{_Spaarpunten}</h3>
                        <!-- form name is hardcoded in the backend -->
                        {form:loyalty_discount}
                        <p>{_U heeft voldoende spaarpunten om} {loyalty_point_discount:format:currency} {_korting te krijgen!}</p>

                    </div>

                </div>
                <div class="row">
                    {form_submit:Spaarpunten inleveren}
                    {form_end}
                </div>
            </div>
        </div>

        <div class="col-12 hide" id="sw_customer_options_back">
            <button onclick="swShopHelper.chooseCheckoutOption();return false;"><i class="fas fa-arrow-left"></i>Terug</button>
        </div>

        <div class="col-lg-4 ">
            <div id="invoice_address_form" class="row {uitoggle_checkout_form}">
                <div class="col-12" >
                    <h3>Factuuradres</h3>

                    <!-- do not just change the backend names as stuff will not be stored! -->
                    {form:invoice_address}
                    <div>


                        <label>*{_E-mailadres}</label>
                        {input:adres_email:validate_notempty:validate_email}

                        <label>*{_Voornaam}</label>
                        {input:rl_voornaam:validate_notempty}
                        <label>*Achternaam</label>
                        {input:naam:validate_notempty}

                        <label>*{_Land}</label>
                        <select id='country_select' class="form-control">
                            {block_declare:country_line:clear}

                            <option value='{id}' {selected} >{name}</option>

                            {block_end}
                            {countries:country_line}

                        </select>
                    </div>


                    <div>
                        <div class="col-8 px-0">*Postcode {input:adres_postcode:validate_notempty}</div><div class="col-4 px-0">*Huisnummer{input:adres_huisnummer:validate_notempty}</div>
                    </div>
                    <div>
                        <label>*{_Straat}</label>
                        {input:adres_straat:validate_notempty}

                        <label>*{_Woonplaats}</label>
                        {input:adres_woonplaats:validate_notempty}

                        <label>{_Telefoonnummer}</label>
                        {input:adres_telefoon1}
                    </div>



                    <div class="{uitoggle_account_create}" id="account_create" >
                        {_Account aanmaken}
                        {checkbox:account_create}
                    </div>

                    <div id="alt_delivery">
                        {_Ander Afleveradres}
                        {checkbox:alternate_address}
                    </div>

                    <div class="{uitoggle_newsletter_subscribe}" id="checkout_newsletter_subscribe" >
                        {if:checkout_newsletter_subscribe_text:=:}
                            {_Inschrijven voor nieuwsbrief}
                        {if_end}

                        {checkout_newsletter_subscribe_text}
                        {checkbox:rl_newsletter}
                    </div>

                    <div class="hide">
                        {input:service_point_id:id=service_point_id}
                    </div>

                    {form_end}

                </div>
            </div>

            <div  id="account_create_form" class="{uitoggle_account_create_password}">
                <div class="col-12 px-0" >
                    {form:invoice_address}
                    <div id="checkout_password">
                        {_Wachtwoord}
                        <input type="password" id="checkout_rl_password" onblur="swCustomer.checkPassword()" class="form-control">
                    </div>
                    {form_end}
                </div>
            </div>

            <div  id="alt_delivery_form" class="hide">
                <div class="col-12 px-0" >
                    <h3>{_Afleveradres}</h3>
                    <!-- do not just change the backend names as stuff will not be stored! -->
                    {form:delivery_address}

                    *{_Voornaam}
                    {input:rl_voornaam:validate_notempty}

                    *{_Achternaam}
                    {input:naam:validate_notempty}

                    *{_Land}
                    <select id='country_delivery_select' class="form-control">
                        {block_declare:del_country_line:clear}
                        <option value='{id}' {del_selected} >{name}</option>

                        {block_end}
                        {countries:del_country_line}
                    </select>

                    <div class="">
                        <div class="col-8 px-0">*{_Postcode} {input:adres_postcode:validate_notempty}</div><div class="col-4 px-0">*{_Huisnummer}{input:adres_huisnummer:validate_notempty}</div>
                    </div>

                    *{_Straat}
                    {input:adres_straat:validate_notempty}

                    *{_Woonplaats}
                    {input:adres_woonplaats:validate_notempty}

                    {form_end}
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="row">
                <div id="send_methods" class="col-12">
                    <h3>{_Verzendmethode}</h3>
                    <div id='send_methods_webshop' >
                        {block_declare:sw_sendmethods}

                        {block_declare:send_method_line:clear}
                        <div class='webshop_select_option webshop_select_send_option' sendid='{sendid}' sendprice='{sendprice}' is_selected='{is_selected}' onclick='swSendMethods.selectSendMethod(this);return false;' type='sw_selection' >
                            {name} {price}
                        </div>
                        <div class="send_methods_pickuplocations" id="send_methods_pickuplocations_{sendid}"></div>
                        {block_end}
                        {sendmethods:send_method_line}

                        {block_end}
                    </div>
                </div>

                <div class="col-12" >
                    <h3>{_Betaalmethode}</h3>

                    <div id='payment_methods_webshop' >
                        {ideal_options}
                        {block_declare:payment_option_line:clear}
                        <div class='webshop_select_option webshop_select_payment_option' id='{id}' is_selected='{selected}' onclick='swPaymentProvider.selectPaymentOption(this);return false;' type='sw_selection' paymentid='{paymentid}' >
                            <img src="{image}"   />
                            {name}
                        </div>
                        {block_end}
                        {paymentoptions:payment_option_line}
                    </div>
                </div>
            </div>
        </div>

        <!-- do not remove the block declarations as the ajax update of the checkout depends on it! -->
        <div class="col-lg-4" id="totals">
            {block_declare:totals}
            <div class="col-12">
                <h3>{_Totaal}</h3>
                <div class="row">
                    <div class="col-6">
                        {_Totaal artikelen:}
                    </div>
                    <div class="col-6 checkout_total_line text-left">
                        {invoice_total_ex_shipping_costs:format:currency}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        {_Verzendkosten:}
                    </div>
                    <div class="col-6 checkout_total_line text-left">
                        {shipping_costs:format:currency}
                    </div>
                </div>
                <div class="row {uitoggle_paid}">
                    <div class="col-12">
                        <h3>{_Betaald}</h3>

                    </div>

                    {block_declare:payments_line:clear}
                    <div class="row {uitoggle_paid}">
                        <div class="col-6">
                            {paymentmethod}:
                        </div>
                        <div class="col-5 checkout_total_line text-left">
                            {paid:format:currency}
                        </div>
                        <div class="col-1 checkout_total_line text-left">
                            <span class="close-button" payment_info="{payment_info}" id="{ob_id}" onclick="swShop.deletePayment(this);return false;" >x</span>
                        </div>
                    </div>
                    {block_end}
                    {payments:payments_line}
                    {block_declare:orderdiscountcodes_line:clear}
                    <div class="row {uitoggle_paid}">
                        <div class="col-6">
                            {paymentmethod}:
                        </div>
                        <div class="col-5 checkout_total_line text-left">
                            {paid:format:currency}
                        </div>
                        <div class="col-1 checkout_total_line text-left">
                            <span class="close-button" id="{od_id}" onclick="swShop.deleteDiscountCode(this);return false;" >x</span>
                        </div>
                    </div>
                    {block_end}
                    {orderdiscountcodes:orderdiscountcodes_line}
                </div>
                <div class="row text-warning {uitoggle_still_to_spend}">
                    <div class="col-8">
                        {_Nog te besteden. Dit zal bij geen gebruik afgerond worden naar 0.}
                    </div>
                    <div class="col-4 checkout_total_line text-left">
                        {still_to_spend:format:currency}
                    </div>
                </div>
                <div class="row checkout_total_block">
                    <div class="col-6">
                        <h3>{_Te betalen:}</h3>
                    </div>
                    <div class="col-6 checkout_total_line text-left">
                        <h3>{invoice_remaining:format:currency}</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {_BTW:}
                    </div>
                    <div class="col-6 checkout_total_line text-left">
                        {invoice_total_vat:format:currency}
                    </div>
                </div>
                {form:terms_and_conditions}
                <div class="row">
                    <div class="col-10">
                        {_Ik heb de algemene voorwaarden gelezen}
                    </div>
                    <div class="col-2 checkout_total_line text-left">
                        {checkbox:consent:validate_notempty}
                    </div>

                    <div class="col-12">
                        <h3>{_Opmerkingen}</h3>
                        {textarea:remark}
                    </div>
                </div>
                {form_end}

                <div class="row">
                    <div class="col-12 pt-3 checkout_total_line text-right">
                        <button  id="sw_finish_cart" class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swPaymentProvider.startPayment();return false">{_Afrekenen}</button>

                    </div>
                </div>

            </div>
            {block_end}
        </div>
    </div>
</div>


{templater_stop}
