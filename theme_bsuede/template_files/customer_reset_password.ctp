{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
<div class="col-12">
    <h3>Wachtwoord resetten</h3>

</div>

<div class="row">

    <div class="col-4" id="customer_reset_password_form">
        <div class="col-12">
            Wachtwoord
            <input type="password" id="customer_reset_password_password" class="form-control">

        </div>
        <div class="col-12">
            <button  id="sw_customer_reset_password" class="tmplt_sales_color" onclick="swCustomer.resetPassword();return false">Reset wachtwoord</button>
        </div>
    </div>


</div>


{templater_stop}