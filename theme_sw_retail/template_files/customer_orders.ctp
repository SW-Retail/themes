{templater_start}
{template_version:swretail_r5_9_34}

<div class="row  ">
    <div class="col-12">
        <h3>Order geschiedenis</h3>

        <p>Hieronder vind u een overzicht van uw orders:</p>
        <div class="row visible-large" id="customer_order_history">
            <div class="col-2">Factuur</div>
            <div class="col-2">Order#</div>
            <div class="col-2">Factuur#</div>
            <div class="col-2"><div class="pull-right">Bedrag</div></div>
            <div class="col-2">Status</div>
            <div class="col-2">Datum</div>
        </div>

        {block_declare:customer_order_line:clear}
        <div class="row">
            <div class="visible-large" id='customer_orders'>

                <div class="col-2"><button class="btn btn-primary btn-small-icon" order_id="{id}" onclick="swCustomer.downloadPrintout(this);return false;" ><i class="fas fa-download"  aria-hidden="true"></i></button> </div>
                <div class="col-2">{ordernummer}</div>
                <div class="col-2">{bonnummer}</div>
                <div class="col-2"> <div class="pull-right">{invoice_total:format:currency}</div></div>
                <div class="col-2">{orderstatus}</div>
                <div class="col-2">{orderdatum}</div>

            </div>

            <div class="visible-small" id='customer_orders_small'>
                <div class="grouped">
                    <button class="btn btn-primary btn-small-icon" order_id="{id}" onclick="swCustomer.downloadPrintout(this);return false;" ><i class="fas fa-download"  aria-hidden="true"></i></button>
                    <div >Order {ordernummer}, {invoice_total:format:currency}, {orderdatum}</div>
                </div>
            </div>


        </div>
        {block_end}
        {customer_orderhistory:customer_order_line}

    </div>



</div>





{templater_stop}