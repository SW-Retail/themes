{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
<div class="row">
    <div class="col-6" id="customer_modify">
        <h3>Accountgegevens bijwerken</h3>
        <div id="customer_modify_form">
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
                    <div class="col-8">*Postcode {input:adres_postcode:validate_notempty}</div><div class="col-4">*Huisnummer{input:adres_huisnummer:validate_notempty}</div>
                </div>
                <div class="row">
                    Straat
                    {input:adres_straat}

                    Woonplaats
                    {input:adres_woonplaats}

                    Telefoonnummer
                    {input:adres_telefoon1}
                </div>

                {form_end}

                <div class="row">
                    <button  id="sw_customer_modify_button" class="tmplt_sales_color" onclick="swCustomer.modifyCustomerInfo();return false">Wijzigen</button>
                </div>

        </div>
    </div>
</div>

{templater_stop}