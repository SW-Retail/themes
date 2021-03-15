{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
<div class="row">
    <div class="col-12">

            <div class="row">
                <div class="col-12">
                    <h2>Accountgegevens</h2>
                </div>
            </div>
        <div class="row">    <div class="col-12"><a href="/customer_orders"  id="customer_orders_link" >Ordergeschiedenis</a></div></div>
        <div class="col-sm-12 col-md-12" id="customer_modify">
            <div id="customer_modify_form" class="md-3">
                <div class="row col-12">
                    <!-- do not just change the backend names as stuff will not be stored! -->
                    {form:customer_modify_form}
                    <div class="row {uitoggle_customer_loyalty}">
                        Openstaande Spaarpunten
                        <input type="text" class="form-control" readonly edit="0" value="{loyaltypoints}">
                    </div>
                    <div class="row">

                        Email adres
                        {input:adres_email:validate_notempty:validate_email}

                        Voornaam
                        {input:rl_voornaam:validate_notempty}
                        Achternaam
                        {input:naam:validate_notempty}
                    </div>
                    <div class="row" >
                        <div class="col-8" style="padding-left:0px;">*Postcode {input:adres_postcode:validate_notempty}</div><div class="col-4" style="padding-right:0px;">*Huisnummer{input:adres_huisnummer:validate_notempty}</div>
                    </div>
                    <div class="row">
                        Straat
                        {input:adres_straat}

                        Woonplaats
                        {input:adres_woonplaats}

                        Telefoonnummer
                        {input:adres_telefoon1}
                        <button  id="sw_customer_modify_button" class="tmplt_sales_color" onclick="swCustomer.modifyCustomerInfo();return false">Wijzigen</button>
                    </div>

                    {form_end}




                </div>


            </div>
        </div>
    </div>
</div>

{templater_stop}
