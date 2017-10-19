


<div style="width:80%; height:80%; margin-left:10%;">



<h1>Review And Place Your Order</h1>

<hr>

<div class="row">
  <div class="col col-sm-4">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Customer Info</h3>
          </div>
          <div class="panel-body">
              yuki azuma<br />
              Email: yuki@gmail.com<br />
              Phone: 12345678900            </div>
      </div>
  </div>
  <div class="col col-sm-4">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Billing Address</h3>
          </div>
          <div class="panel-body">
              yuki azuma<br />
              aa<br />
              aa<br />
              aa, aa aa<br />
              aaa            </div>
      </div>
  </div>
  <div class="col col-sm-4">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Shipping Address</h3>
          </div>
          <div class="panel-body">
              yuki azuma<br />
              aa<br />
              aa<br />
              aa, aa aa<br />
              aaa            </div>
      </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="col col-sm-1">#</div>
  <div class="col col-sm-6">ITEM</div>
  <div class="col col-sm-1">WEIGHT</div>
  <div class="col col-sm-1">WEIGHT</div>
  <div class="col col-sm-1">PRICE</div>
  <div class="col col-sm-1" style="text-align: right;">QUANTITY</div>
  <div class="col col-sm-1" style="text-align: right;">SUBTOTAL</div>
</div>

<br />
<br />

<div class="row">
  <div class="col col-sm-1"><img src="/eccakedemo/images/small/celtek-merit-facemask-orange-black.jpg" height="60" class="px60" alt=""/></div>
  <div class="col col-sm-6">
  Celtek Merit Facemask Orange/Black        <br />
  <small></small>
      </div>
  <div class="col col-sm-1">7.00</div>
  <div class="col col-sm-1">7.00</div>
  <div class="col col-sm-1">$19.95</div>
  <div class="col col-sm-1" style="text-align: right;">1</div>
  <div class="col col-sm-1" style="text-align: right;">$19.95</div>
</div>
<div class="row">
  <div class="col col-sm-1"><img src="/eccakedemo/images/small/burton-society-snowboard-pants-capers.jpg" height="60" class="px60" alt=""/></div>
  <div class="col col-sm-6">
  Burton Society Snowboard Pants Capers        <br />
  <small></small>
      </div>
  <div class="col col-sm-1">7.00</div>
  <div class="col col-sm-1">7.00</div>
  <div class="col col-sm-1">$49.95</div>
  <div class="col col-sm-1" style="text-align: right;">1</div>
  <div class="col col-sm-1" style="text-align: right;">$49.95</div>
</div>

<hr>

<div class="row">
  <div class="col col-sm-10">Products: 2</div>
  <div class="col col-sm-1" style="text-align: right;">Items: 2</div>
  <div class="col col-sm-1" style="text-align: right;">Total<br /><strong>$69.90</strong></div>
</div>

<hr>

<br />
<br />

<form action="/eccakedemo/shop/review" id="OrderReviewForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>

<div class="row">
  <div class="col col-sm-4">

      <strong>Credit or debit card</strong>

      <br />

      <div class="input tel"><input name="data[Order][creditcard_number]" class="form-control ccinput" maxLength="16" autocomplete="off" type="tel" id="OrderCreditcardNumber"/></div>
  </div>
  <div class="col col-sm-2">

      <strong>Card Security Code</strong>

      <a tabindex="9999" id="cscpop" role="button" data-placement="top" data-toggle="popover" data-trigger="focus" title="Card Security Code (CSC)" data-content="<small><strong>Visa, MasterCard, Discover</strong><br /><img src=/eccakedemo/img/visa.png><br / >The security code is the last three digits of the number that appears on the back of your card in the signature bar. <br /><br /><strong>American Express</strong><br /><img src=/eccakedemo/img/amex.png><br />The security code is the four digits located on the front of the card, on the right side.</small>"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>

      <br />

      <div class="input tel"><input name="data[Order][creditcard_code]" class="form-control" maxLength="4" type="tel" id="OrderCreditcardCode"/></div>
  </div>
</div>

<br />

<div class="row">
  <div class="col col-sm-3">
      <div class="input select"><label for="OrderCreditcardMonth">Expiration Month</label><select name="data[Order][creditcard_month]" class="form-control" id="OrderCreditcardMonth">
<option value="01">01 - January</option>
<option value="02">02 - February</option>
<option value="03">03 - March</option>
<option value="04">04 - April</option>
<option value="05">05 - May</option>
<option value="06">06 - June</option>
<option value="07">07 - July</option>
<option value="08">08 - August</option>
<option value="09">09 - September</option>
<option value="10">10 - October</option>
<option value="11">11 - November</option>
<option value="12">12 - December</option>
</select></div>    </div>
  <div class="col col-sm-3">
      <div class="input select"><label for="OrderCreditcardYear">Expiration Year</label><select name="data[Order][creditcard_year]" class="form-control" id="OrderCreditcardYear">
<option value="17">2017</option>
<option value="18">2018</option>
<option value="19">2019</option>
<option value="20">2020</option>
<option value="21">2021</option>
<option value="22">2022</option>
<option value="23">2023</option>
<option value="24">2024</option>
<option value="25">2025</option>
<option value="26">2026</option>
<option value="27">2027</option>
</select></div>    </div>
</div>

<br />
<br />


<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check"></i> &nbsp; Place your order</button>
</form>
<br />
<br />

          <br />
          <div id="msg"></div>
          <br />
      </div>
  </div>
  </div>
