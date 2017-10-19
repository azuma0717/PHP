
<div style="width:80%; height:80%; margin-left:10%;">
<h1>Address</h1>

<form action="/eccakedemo/shop/address" id="OrderAddressForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
<hr>

<div class="row">
    <div class="col col-sm-4">

        <div class="input text"><label for="OrderFirstName">First Name</label><input name="data[Order][first_name]" class="form-control" maxlength="255" type="text" value="yuki" id="OrderFirstName"/></div>        <br />
        <div class="input text"><label for="OrderLastName">Last Name</label><input name="data[Order][last_name]" class="form-control" maxlength="255" type="text" value="azuma" id="OrderLastName"/></div>        <br />
        <div class="input email required"><label for="OrderEmail">Email</label><input name="data[Order][email]" class="form-control" maxlength="255" type="email" value="yuki@gmail.com" id="OrderEmail" required="required"/></div>        <br />
        <div class="input tel required"><label for="OrderPhone">Phone</label><input name="data[Order][phone]" class="form-control" maxlength="255" type="tel" value="12345678900" id="OrderPhone" required="required"/></div>        <br />
        <br />

    </div>
    <div class="col col-sm-4">

        <div class="input text required"><label for="OrderBillingAddress">Billing Address</label><input name="data[Order][billing_address]" class="form-control" maxlength="255" type="text" value="aa" id="OrderBillingAddress" required="required"/></div>        <br />
        <div class="input text"><label for="OrderBillingAddress2">Billing Address2</label><input name="data[Order][billing_address2]" class="form-control" maxlength="255" type="text" value="aa" id="OrderBillingAddress2"/></div>        <br />
        <div class="input text required"><label for="OrderBillingCity">Billing City</label><input name="data[Order][billing_city]" class="form-control" maxlength="255" type="text" value="aa" id="OrderBillingCity" required="required"/></div>        <br />
        <div class="input text required"><label for="OrderBillingState">Billing State</label><input name="data[Order][billing_state]" class="form-control" maxlength="255" type="text" value="aa" id="OrderBillingState" required="required"/></div>        <br />
        <div class="input text"><label for="OrderBillingZip">Billing Zip</label><input name="data[Order][billing_zip]" class="form-control" maxlength="255" type="text" value="aa" id="OrderBillingZip"/></div>        <br />
        <div class="input text"><label for="OrderBillingCountry">Billing Country</label><input name="data[Order][billing_country]" class="form-control" maxlength="255" type="text" value="aaa" id="OrderBillingCountry"/></div>        <br />
        <br />

        <div class="input checkbox"><input type="hidden" name="data[Order][sameaddress]" id="OrderSameaddress_" value="0"/><input type="checkbox" name="data[Order][sameaddress]" value="1" id="OrderSameaddress" checked="checked"/><label for="OrderSameaddress">Copy Billing Address to Shipping</label></div>
    </div>
    <div class="col col-sm-4">

        <div class="input text required"><label for="OrderShippingAddress">Shipping Address</label><input name="data[Order][shipping_address]" class="form-control" maxlength="255" type="text" value="aa" id="OrderShippingAddress" required="required"/></div>        <br />
        <div class="input text"><label for="OrderShippingAddress2">Shipping Address2</label><input name="data[Order][shipping_address2]" class="form-control" maxlength="255" type="text" value="aa" id="OrderShippingAddress2"/></div>        <br />
        <div class="input text required"><label for="OrderShippingCity">Shipping City</label><input name="data[Order][shipping_city]" class="form-control" maxlength="255" type="text" value="aa" id="OrderShippingCity" required="required"/></div>        <br />
        <div class="input text required"><label for="OrderShippingState">Shipping State</label><input name="data[Order][shipping_state]" class="form-control" maxlength="255" type="text" value="aa" id="OrderShippingState" required="required"/></div>        <br />
        <div class="input text"><label for="OrderShippingZip">Shipping Zip</label><input name="data[Order][shipping_zip]" class="form-control" maxlength="255" type="text" value="aa" id="OrderShippingZip"/></div>        <br />
        <div class="input text"><label for="OrderShippingCountry">Shipping Country</label><input name="data[Order][shipping_country]" class="form-control" maxlength="255" type="text" value="aaa" id="OrderShippingCountry"/></div>        <br />
        <br />

    </div>
</div>

<br />

<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check"></i> &nbsp; Continue</button></form>
            <br />
            <div id="msg"></div>
            <br />

        </div>
