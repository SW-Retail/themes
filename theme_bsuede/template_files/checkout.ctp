{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
<!-- do not remove the block declarations as the ajax update of the checkout depends on it! -->

<div class="row">
    <div class="col-12 col-md-6" id="render_cart_here">
        {block_declare:checkout}
        {checkout}
        {block_end}
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6 {uitoggle_checkout_options}" id ="customer_checkout_options">
        <div id="checkout_options_total_line" class="row">
            {block_declare:checkout_options_total}
            <div class="col-6 checkout_total_line">
                <h3>Totaal:</h3>
            </div>
            <div class="col-6 checkout_total_line">
                <h3>{invoice_total_ex_shipping_costs:format:currency}</h3>
            </div>
            {block_end}
        </div>
        <h3>Afrekenen als</h3>
        <div class="webshop_select_option" onclick="swCustomer.loadCustomerLogin();return false" id="checkout_create_account" type="sw_selection">
            Inloggen
        </div>
        <div class="webshop_select_option" onclick="swShop.loadCreateAccount();return false" id="checkout_create_account" type="sw_selection">
            Account aanmaken
        </div>
        <div class="webshop_select_option" onclick="swShop.loadCheckOutAsGuest();return false" id="checkout_guest" type="sw_selection">
            Afrekenen als gast
        </div>
    </div>
</div>



<div class="{uitoggle_checkout_form} row" id="checkout_one_page">
    <div class="col-12 row">
        <div class="col-md-4 ">
            <div class="row">
                <div class="col-12" >
                    <h3>Kortingscode</h3>
                    <!-- form name is hardcoded in the backend -->
                    {form:discountcode}
                    <p>Ik heb een kortingscode</p>
                    {input:discountcode:class=hold_the_line}
                    {form_submit:Kortingscode toevoegen:class=pl-0}
                    {form_end}
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="row">
                <div class="col-12" >
                    <h3>Cadeaubon</h3>
                    <!-- form name is hardcoded in the backend -->
                    {form:vouchercode}
                    <p>Ik heb een cadeaubon</p>
                    {input:vouchercode:class=hold_the_line}
                    {form_submit:Cadeaubon toevoegen:class=pl-0}
                    {form_end}
                </div>
            </div>
        </div>

        <div class="col-md-4 {uitoggle_loyalty_discount}">
            <div class="row">
                <div class="col-12" >
                    <h3>Spaarpunten</h3>
                    <!-- form name is hardcoded in the backend -->
                    {form:loyalty_discount}
                    <p>U heeft voldoende spaarpunten om {loyalty_point_discount:format:currency} korting te krijgen!</p>
                    {form_submit:Spaarpunten inleveren:class=pl-0}
                    {form_end}
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 hide" id="sw_customer_options_back">
        <button onclick="swShopHelper.chooseCheckoutOption();return false;"><i class="fas fa-arrow-left"></i>Terug</button>
    </div>

    <div class="col-md-4 ">
        <div id="invoice_address_form" class="row {uitoggle_checkout_form}">
            <div class="col-12" >
                <h3>Factuuradres</h3>

            <!-- do not just change the backend names as stuff will not be stored! -->
                {form:invoice_address}
                <div class="col-12">


                    *Email adres
                    {input:adres_email:validate_notempty:validate_email}

                    *Voornaam
                    {input:rl_voornaam:validate_notempty}
                    *Achternaam
                    {input:naam:validate_notempty}

                    *Land
                    <select id='country_select' class="form-control">

                        {block_declare:country_line:clear}

                        <option value='{id}' {selected} >{name}</option>

                        {block_end}
                        {countries:country_line}

                    </select>
                </div>
                <div >
                    <div class="col-8">*Postcode {input:adres_postcode:validate_notempty}</div><div class="col-4">*Huisnummer{input:adres_huisnummer:validate_notempty}</div>
                </div>
                <div class="col-12">
                    *Straat
                    {input:adres_straat:validate_notempty}

                    *Woonplaats
                    {input:adres_woonplaats:validate_notempty}

                    Telefoonnummer
                    {input:adres_telefoon1}
                </div>

                <div class="col-12 {uitoggle_account_create}" id="account_create" >
                    Account aanmaken
                    {checkbox:account_create}
                </div>

                <div class="col-12" id="alt_delivery">
                    Ander Afleveradres
                    {checkbox:alternate_address}
                </div>

                <div class="hide">
                    {input:service_point_id:id=service_point_id}
                </div>
                
                {form_end}


            </div>
        </div>

        <div  id="account_create_form" class="{uitoggle_account_create_password}">
            <div class="col-12" >
                {form:invoice_address}
                <div id="checkout_password" class="col-12">
                    Wachtwoord
                    <input type="password" id="checkout_rl_password" onblur="swCustomer.checkPassword()" class="form-control">
                </div>
                {form_end}
            </div>
        </div>

        <div  id="alt_delivery_form" class="hide">
            <div class="col-12" >
                <h3>Afleveradres</h3>
                <!-- do not just change the backend names as stuff will not be stored! -->
                {form:delivery_address}

                *Voornaam
                {input:rl_voornaam:validate_notempty}

                *Achternaam
                {input:naam:validate_notempty}

                *Land
                <select id='country_delivery_select' class="form-control">
                    {block_declare:del_country_line:clear}
                    <option value='{id}' {del_selected} >{name}</option>

                    {block_end}
                    {countries:del_country_line}
                </select>

                <div class="">
                    <div class="col-8">*Postcode {input:adres_postcode:validate_notempty}</div><div class="col-4">*Huisnummer{input:adres_huisnummer:validate_notempty}</div>
                </div>

                *Straat
                {input:adres_straat:validate_notempty}

                *Woonplaats
                {input:adres_woonplaats:validate_notempty}

                {form_end}
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="row">
            <div id="send_methods" class="col-12">
                <h3>Verzendmethode</h3>
                <div id='send_methods_webshop' >
                    {block_declare:sw_sendmethods}

                    {block_declare:send_method_line:clear}
                    <div class='webshop_select_option webshop_select_send_option' sendid='{sendid}' sendprice='{sendprice}' is_selected='{is_selected}' onclick='swSendMethods.selectSendMethod(this);return false;' type='sw_selection' >
                        {name} {price}
                    </div>
                    {block_end}
                    {sendmethods:send_method_line}

                    {block_end}
                </div>
            </div>
            <div class="col-12">
                <h3>Betaalmethode</h3>

                <div id='payment_methods_webshop'>
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
    <div class="col-md-4" id="totals">
        {block_declare:totals}
        <div class="col-12">
            <h3>Totaal</h3>
            <div class="row">
                <div class="col-6">
                    Totaal artikelen:
                </div>
                <div class="col-6 checkout_total_line">
                    {invoice_total_ex_shipping_costs:format:currency}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Verzendkosten:
                </div>
                <div class="col-6 checkout_total_line">
                    {shipping_costs:format:currency}
                </div>
            </div>
            <div class="{uitoggle_paid}">
                <div class="row checkout_total_block">
                    <div class="col-12">
                        <h3>Betaald</h3>
                    </div>
                </div>

                {block_declare:payments_line:clear}
                <div class="row {uitoggle_paid}">
                    <div class="col-6">
                        {paymentmethod}:
                    </div>
                    <div class="col-5 checkout_total_line">
                        {paid:format:currency}
                    </div>
                    <div class="col-1 checkout_total_line">
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
                    <div class="col-5 checkout_total_line">
                        {paid:format:currency}
                    </div>
                    <div class="col-1 checkout_total_line">
                        <span class="close-button" id="{od_id}" onclick="swShop.deleteDiscountCode(this);return false;" >x</span>
                    </div>
                </div>
                {block_end}
                {orderdiscountcodes:orderdiscountcodes_line}

                <div class="row text-warning {uitoggle_still_to_spend}">
                    <div class="col-8">
                        Nog te besteden. Dit zal bij geen gebruik afgerond worden naar 0.
                    </div>
                    <div class="col-4 checkout_total_line">
                        {still_to_spend:format:currency}
                    </div>
                </div>
            </div>
            <div class="row checkout_total_block">
                <div class="col-6">
                    <h3> Te betalen: </h3>
                </div>
                <div id="total_sendprice" class="col-6 checkout_total_line">
                    <h3>{invoice_remaining:format:currency}</h3>
                </div>
            </div>
            <div class="row {uitoggle_still_to_spend}">
                <div class="col-8">
                    Nog te besteden. Dit zal bij geen gebruik afgerond worden naar 0.
                </div>
                <div class="col-4 checkout_total_line">
                    {still_to_spend:format:currency}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    BTW:
                </div>
                <div class="col-6 checkout_total_line">
                    {invoice_total_vat:format:currency}
                </div>
            </div>
            {form:terms_and_conditions}
            <div class="row">
                <div class="col-10">
                    Ik heb de algemene voorwaarden gelezen
                </div>
                <div class="col-2 checkout_total_line">
                    {checkbox:consent:validate_notempty}
                </div>
            </div>

            <div class="col-12">
                <h3>Opmerkingen</h3>
                {textarea:remark}
            </div>

            {form_end}

            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6 checkout_total_line">
                    <button  id="sw_finish_cart" class="tmplt_sales_color" onclick="swPaymentProvider.startPayment();return false">Afrekenen</button>

                </div>
            </div>

        </div>
        {block_end}
    </div>




</div>


{templater_stop}
