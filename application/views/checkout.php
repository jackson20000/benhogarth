	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/app.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/overrides.css">
	<div class="main" style="background-image: url('<?php echo base_url()?>assets/frontend/images/checkout/imgpsh.jpeg');background-repeat: no-repeat;background-size:cover;">
		<div class="row container" style="margin:auto;">
			<h1>Payment Form </h1>
			<div class="content col-md-7">
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="pay-tabs">
							
							<form method="post" id="payment-form" action="<?php echo base_url('homeweb/success')?>">
								<h3>Basic Information</h3>
								<div class="tab-for">				
									<h5>Full Name</h5>					
									<input type="text" name="name" value="" required>
									<h5>Email Address</h5>
									<input type="email" name="email" value="" required>
									<h5>Phone</h5>
									<input type="text" name="phone" value="" required>
									<input type="hidden" name="studio" value="<?php echo $studio['name'] ?>">
									<input type="hidden" name="stime" value="<?php echo $start_time ?>">
									<input type="hidden" name="etime" value="<?php echo $end_time ?>">
									<input type="hidden" name="date" value="<?php echo date('d/m/y', strtotime($date)) ?>">
								</div>
				                <section>
				                    <input id="amount" name="amount" type="hidden" min="1" placeholder="Amount" value="<?php echo number_format((float)$total, 2, '.', '') ?>" >

				                    <div class="bt-drop-in-wrapper">
				                        <div id="bt-dropin"></div>
				                    </div>
				                </section>
				                <input id="nonce" name="payment_method_nonce" type="hidden" />
				                <button class="button btn" type="submit"><span>Pay</span></button>
				            </form>
						</div>
				</div>
			</div>
		</div>					

	
			<div class="col-md-5">
				<div class="resp-tabs-container payment-info">
					<table style="width:75%;margin:auto;">
						<tbody>
							 <tr style="height:20px;border-bottom:1px solid #b3b0b0;">
						      <th colspan="2">Booking Summary</th>
						      <th></th>
						      <th></th>
						    </tr>
						    <tr>
						      <th><?php echo $studio['name'] ?></th>
						      <th></th>
						      <th></th>
						      <th>$<?php echo $studio['rate'] ?></th>
						    </tr>
						    <tr>
						      <td>&nbsp;&nbsp;Booking date</td>
						      <th></th>
						      <th></th>
						      <th><?php echo date('j F,Y', strtotime($date)) ?></th>
						    </tr>
						    <tr>
						      <td>&nbsp;&nbsp;Start time: </td>
						      <th></th>
						      <th></th>
						      <th><?php echo $start_time ?></th>
						    </tr>
						    <tr  style="height:50px;border-bottom:1px solid #b3b0b0;">
						      <td>&nbsp;&nbsp;End time: </td>
						      <th></th>
						      <th></th>
						      <th><?php echo $end_time ?></th>
						    </tr>

						    <tr>
						      <th>Subtotal</th>
						      <th></th>
						      <th></th>
						      <th>$<?php echo number_format((float)$price, 2, '.', '') ?></th>
						    </tr style="height:30px">
						      <tr>
						      <th>Tax</th>
						      <th></th>
						      <th></th>
						      <th><?php echo $tax ?> (12%)</th>
						    </tr style="height:30px">
						      <tr>
						      <th>Total</th>
						      <th></th>
						      <th></th>
						      <th>$<?php echo number_format((float)$total, 2, '.', '') ?></th>
						    </tr>
						</tbody>
					</table>
<!-- 					<div class="pay_btn">
						<input class="pay_btn_now" type="submit" value="Pay Now"></input>
					</div> -->
				</div>
			</div>
	</div>
</div>
<script src="https://js.braintreegateway.com/web/dropin/1.18.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo $token; ?>";
        var amount = document.getElementById('amount').value;

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          paypal: {
            flow: 'checkout',
            amount: amount,
            currency: 'USD'
          },
          venmo: {},
          applePay: {
              displayName: 'Ben Hogarth',
              paymentRequest: {
                total: {
                  label: 'Ben Hogarth - Studio',
                  amount: amount
                },
                requiredBillingContactFields: ["postalAddress"]
              }
            },
          googlePay: {
          environment:"TEST",
          "apiVersion": 2,
          "apiVersionMinor": 0,
          "merchantInfo": {
            "merchantName": "Example Merchant"
          },
          googlePayVersion: 2,
          merchantId: 'merchant-id-from-google',
          transactionInfo: {
            totalPriceStatus: 'FINAL',
            totalPrice: amount,
            currencyCode: 'USD'
          },
          cardRequirements: {
            // We recommend collecting and passing billing address information with all Google Pay transactions as a best practice.
            billingAddressRequired: false
          }
        }


        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
              if (err) {
                console.log('Request Payment Method Error', err);
                return;
              }

              // Add the nonce to the form and submit
              document.querySelector('#nonce').value = payload.nonce;
              form.submit();
            });
          });
        });
    </script>
    <script src="javascript/demo.js"></script>
   <!-- footer -->
   

		











