{templater_start}
{template_version:swretail_r5_9_34}
<div class="container cms__object">
    <div class="col-12">
        <h3>Wachtwoord resetten</h3>

    </div>

    <div class="row {uitoggle_customer_reset_error}">
        <div class="col-12">
            Deze wachtwoord reset link is niet (meer) geldig. U kunt een nieuwe wachtwoord reset link aanvragen vanuit de inlog pagina.
        </div>
    </div>

    <div class="row {uitoggle_customer_reset_form}">

        <div class="col-4" id="customer_reset_password_form">
            <div class="col-12">
                <label>Wachtwoord</label>
                <input type="password" id="customer_reset_password_password" class="form-control">

            </div>
            <div class="col-12">
                <button  id="sw_customer_reset_password" class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swCustomer.resetPassword();return false">Reset wachtwoord</button>
            </div>
        </div>


    </div>
</div>


{templater_stop}