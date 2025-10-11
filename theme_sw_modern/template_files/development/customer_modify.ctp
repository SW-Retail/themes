{templater_start}
{template_version:swretail_r5_9_34}
<div class="container cms__object">
    <div class="row">
        <div class="col-6 p-0" id="customer_modify">

            <div class="row">
                <div class="col-8">
                    <h3>Accountgegevens bijwerken</h3>
                </div>

                <div class="col-4">
                    <a href="/customer_orders" id="customer_orders_link" >Ordergeschiedenis inzien </a>
                </div>

            </div>

            <div id="customer_modify_form">
                <div class="col-12 row" >

                    <!-- do not just change the backend names as stuff will not be stored! -->
                    {form:customer_modify_form}
                    <div class="row">
                        <div class="{uitoggle_customer_loyalty}">
                            Openstaande Spaarpunten
                            <input type="text" class="form-control" readonly edit="0" value="{loyaltypoints}">
                        </div>

                        <label>Email adres</label>
                        {input:adres_email:validate_notempty:validate_email}

                        <label>Voornaam</label>
                        {input:rl_voornaam:validate_notempty}
                        <label>Achternaam</label>
                        {input:naam:validate_notempty}
                    </div>
                    <div class="row" >
                        <div class="col-8"><label>*Postcode</label> {input:adres_postcode:validate_notempty}</div><div class="col-4"><label>*Huisnummer</label>{input:adres_huisnummer:validate_notempty}</div>
                    </div>
                    <div class="row">
                        <label>Straat</label>
                        {input:adres_straat}

                        <label>Woonplaats</label>
                        {input:adres_woonplaats}

                        <label>Telefoonnummer</label>
                        {input:adres_telefoon1}
                    </div>

                    {form_end}

                    <div class="row">
                        <button  id="sw_customer_modify_button" class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swCustomer.modifyCustomerInfo();return false">Wijzigen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{templater_stop}