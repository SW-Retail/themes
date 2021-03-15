{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}

<div class="row">

    <div class="col-12" id="sw_customer_login_back">
        <button onclick="window.history.back();return false;"><i class="fas fa-arrow-left"></i>Terug</button>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h3>Inloggen</h3>
    </div>

</div>


<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <form id="customer_login_form">
            Email adres
            <input type="text" id="customer_login_mailaddress" class="form-control">

            Wachtwoord
            <input type="password" id="customer_login_password" class="form-control">

        </form>
    </div>


</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <button  id="sw_custom_login" class="tmplt_sales_color" onclick="swCustomer.login(document.referrer);return false">Inloggen</button>
        <button  id="sw_custom_reset_password" class="tmplt_sales_color" onclick="swCustomer.sendPasswordResetLink();return false">Wachtwoord vergeten</button>
    </div>
</div>


{templater_stop}
