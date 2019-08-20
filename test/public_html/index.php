<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../includes/braintree_init.php");
 ?>


<html>
<?php require_once("../includes/head.php"); ?>
<body>

    <?php require_once("../includes/header.php"); ?>

            <!--<form method="post" id="payment-form" action="<?php echo $baseUrl;?>checkout.php"><-->
                <form method="post" id="payment-form" action="checkout.php">

                <section>
                    <label for="amount">
                        <span class="input-label">Amount</span>
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" required>
                        </div>
                    </label>

                    <div class="bt-drop-in-wrapper">
                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button" type="submit"><span>Test Transaction</span></button>
            </form>
    <script src="https://js.braintreegateway.com/web/dropin/1.18.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo($gateway->ClientToken()->generate()); ?>";
        var amount = document.getElementById('amount').value;

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          paypal: {
            flow: 'checkout',
            amount: '10.00',
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
            totalPrice: '123.45',
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
</body>
</html>
