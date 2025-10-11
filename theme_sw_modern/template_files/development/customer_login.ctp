{templater_start}
{template_version:swretail_r5_9_34}
<div class="container cms__object">
    <div class="row">

        <div class="col-12" id="sw_customer_login_back">
            <button class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="window.history.back();return false;">Terug</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Inloggen</h3>
        </div>

    </div>


    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <form id="customer_login_form">
                <label>Email adres</label>
                <input type="text" id="customer_login_mailaddress" class="form-control">

                <label>Wachtwoord</label>
                <input type="password" id="customer_login_password" class="form-control">

            </form>
        </div>


    </div>
    <div class="row" data-view="login-buttons">
        <div class="col-12 col-md-6 col-lg-4">
            <button  id="sw_custom_login" class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swCustomer.login(document.referrer);return false">Inloggen</button>
            <button  id="sw_custom_reset_password" class="btn-solid tmplt_base_color tmplt_base_color_text" onclick="swCustomer.sendPasswordResetLink();return false">Wachtwoord vergeten</button>
        </div>
    </div>
</div>


{templater_stop}