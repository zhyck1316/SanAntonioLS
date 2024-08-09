<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamondback Process Servers | Texas Legal Support</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" type="image/x-icon" href="./src/img/logo/sanantonio-logo5.png">

    <link href="./src/css/output-style.css" rel="stylesheet">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #payment-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <div class="grid grid-cols-2 h-screen">
        <div class="bg-center bg-no-repeat bg-cover h-full" style="background-image:url('./src/img/gallery/20.png');">
            <div class="w-full h-full flex justify-center items-center" style="background: linear-gradient(90deg, rgba(0, 32, 100, 0.7) 10%, rgba(0, 32, 100, 0.7) 25%, rgba(0, 32, 100, 0.7) 60%, rgba(0, 32, 100, 0.7) 75%, rgba(0, 32, 100, 0.7) 90%);">
                <div class="">
                    <h1 class="text-5xl font-bold text-white">DIAMONDBACK PROCESS SERVER</span></h1>
                    <p class="text-white font-medium">Boots On <span class="text-DBred">The Ground!</span></p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="h-full w-full flex flex-col justify-center items-center overflow-auto">
                <div class="flex items-center border-2 border-purple-400 rounded-lg mb-4 px-8 mt-8 shadow-xl">
                    <p class="text-purple-400 font-semibold">Powered By</p>
                    <span class="size-16 flex items-center ml-2">
                        <img src="./src/img/logo/stripe-removebg-preview.png" alt="Stripe Logo" loading="lazy">
                    </span>
                </div>
                <div class="bg-blue-200 px-8 pb-8 pt-16 border border-gray-300 rounded-md shadow-xl shadow-gray-500">
                    <form id="payment-form">
                        <div class="form-row">
                            <div class="mb-4 flex space-x-4">
                                <div class="flex flex-col">
                                    <label for="fname" class="font-bold text-gray-500 mb-2 text-xs">First Name</label>
                                    <input type="text" id="fname" name="fname" placeholder="First Name" class="rounded-md border border-gray-300 w-full py-1" required >
                                </div>
                                <div class="flex flex-col">
                                    <label for="lname" class="font-bold text-gray-500 mb-2 text-xs">Last Name</label>
                                    <input type="text" id="lname" name="lname" placeholder="Last Name" class="rounded-md border border-gray-300 w-full py-1" required >
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="cname" class="font-bold text-gray-500 mb-2 text-xs">Company Name</label>
                                <br>
                                <input type="text" id="cname" name="cname" placeholder="DiamondBack" class="rounded-md border border-gray-300 w-full py-1" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="font-bold text-gray-500 mb-2 text-xs">Customer Email</label>
                                <input type="email" id="email" name="email" placeholder="Example@gmail.com" class="rounded-md border border-gray-300 w-full py-1" required>
                            </div>
                            <div class="mb-4 p-4 rounded-md border border-gray-100 text-white" style="background-color: rgba(0, 32, 100, 0.4);">
                                <div class="mb-2">
                                    <label for="tamount" class="font-bold mb-2 text-xs">Enter Amount To Be Paid</label>
                                    <input type="number" id="tamount" name="tamount" placeholder="Enter Amount" class="text-gray-600 rounded-md border border-gray-300 w-full py-1" required>
                                </div>
                                <div class="mb-2">
                                    <div class="flex items-end mb-1 space-x-4">
                                        <label for="camount" class="font-bold text-xs flex items-baseline">Convenience Fee</label>
                                        <span class="rounded-full py-1 px-6 bg-blue-400 text-2xs text-white font-medium shadow-xl">4% Total Due.</span>
                                    </div>
                                    <input type="number" id="camount" name="camount" placeholder="Amount Will Be Automatically Calculated" class="text-gray-600 rounded-md border border-gray-300 w-full py-1">
                                </div>
                                <div>
                                    <label for="amount" class="font-bold mb-2 text-xs">Total Cost</label>
                                    <input type="number" id="amount" name="amount" placeholder="Total Due - 4%" class="text-gray-600 rounded-md border border-gray-300 w-full py-1" >
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="card-element" class="font-bold text-gray-500 mb-2 text-xs">Credit or debit card</label>
                                <div id="card-element" class="mb-1"></div>
                                <div id="card-errors" role="alert" class="text-red-600 text-sm font-medium"></div>
                            </div>
                            <div class="mb-4">
                                <label for="agree" class="font-bold mb-2 text-xs">Payment Authorization</label>
                                <p class="text-gray-500 text-xs">I authorize Diamondback Process Servers to charge the credit card indicated in this form for service of process plus a 4% convenience fee on the total due as stated above. This payment authorization is for the amount indicated above only. I certify that I am an authorized user of this credit card and that I will not dispute the payment with my credit card company. I understand that the payment is non-refundable.</p>
                                <input type="checkbox" id="agree" required> <span class="text-xs font-semibold text-gray-600">I Agree/Authorize</span>
                            </div>
                            <div class="signature-container">
                                <canvas id="signature-pad" class="signature-pad bg-white rounded-md border border-gray-400" width="400" height="200" ></canvas>
                                <div class="signature-buttons flex space-x-4 mt-2">
                                    <button id="save" class="btn-save border-gray-400 bg-green-200 px-8 py-2 rounded-md">Save</button>
                                    <button id="clear" class="btn-clear border border-gray-400 px-8 py-2 rounded-md">Clear</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn px-8 py-2 bg-gray-400 text-white rounded-md" type="button" id="btnsubmit" disabled>Submit Payment</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.2/dist/signature_pad.umd.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tamount').on('input', function() {
                var tamount = parseFloat($(this).val());
                
                if (!isNaN(tamount)) {
                    var camount = (tamount * 0.04).toFixed(2); // Calculate 4% of amount
                    var amount = (tamount - camount).toFixed(2); // Subtract camount from amount
                    
                    $('#camount').val(camount);
                    $('#amount').val(amount);
                } else {
                    $('#camount').val('');
                    $('#amount').val('');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize the signature pad
            var canvas = document.getElementById('signature-pad');
            var signaturePad = new SignaturePad(canvas);

            // Clear button functionality
            $('#clear').on('click', function() {
                signaturePad.clear();
            });

            // PUBLIC KEY STRIPE API
            var stripe = Stripe('pk_test_51Pl2mzLXIFnQ7QRHr3dwmIer8dnnHUwGVCxPNI6IVtzUNWxgpyfy8o2fbBKtForwZY5HHwXogkfuCmzLAWk2eKLN007UiekC6y');
            var elements = stripe.elements();
            var card = elements.create('card', {
                hidePostalCode: false
            });

            card.mount('#card-element');

            card.on('change', function(event) {
                var displayError = $('#card-errors');
                if (event.error) {
                    displayError.text(event.error.message);
                } else {
                    displayError.text('');
                }
            });

            $('#btnsubmit').on('click', function(event) {
                event.preventDefault();

                // Capture signature data
                if (!signaturePad.isEmpty()) {
                    var signatureDataURL = signaturePad.toDataURL();
                    console.log(signatureDataURL); // Outputs the base64 string of the signature image

                    // Append signature data to the form
                    var form = $('#payment-form');
                    var hiddenSignature = form.find('input[name="signature"]');
                    if (hiddenSignature.length === 0) {
                        hiddenSignature = $('<input type="hidden" name="signature">');
                        form.append(hiddenSignature);
                    }
                    hiddenSignature.val(signatureDataURL);
                } else {
                    alert("Please provide a signature first.");
                    return;
                }

                // REMOVE INCASE ERROR
                $('#payment-form input[name="paymentMethodId"]').remove();
                $('#payment-form input[name="amount"]').remove();
                stripe.createPaymentMethod({
                    type: 'card',
                    card: card,
                }).then(function(result) {
                    if (result.error) {
                        $('#card-errors').text(result.error.message);
                    } else {
                        // DISABLE THE BUTTON TO AVOID MULTI-CLICK
                        $('#btnsubmit').prop('disabled', true);
                        $('#btnsubmit').html('Processing Payment, Please wait.....');

                        // ADD paymentMethodId AND amount INPUTS
                        var form = $('#payment-form');
                        var hiddenpaymentid = $('<input type="hidden" name="paymentMethodId">');
                        var hiddenTotal = $('<input type="hidden" name="amount">');

                        hiddenpaymentid.val(result.paymentMethod.id);

                        var tamountValue = $('#tamount').val();
                        var amountPercentage = (tamountValue * 0.04).toFixed(2);
                        var amountValue = (tamountValue - parseFloat(amountPercentage)).toFixed(2);
                        hiddenTotal.val(amountValue); // Value paid
                        console.log('Amount Value:', amountValue);

                        form.append(hiddenpaymentid);
                        form.append(hiddenTotal);
                        
                        // Handle the payment method
                        stripePaymentMethodHandler(result.paymentMethod.id);
                    }
                });
            });

            function stripePaymentMethodHandler(paymentMethodId) {
                var form = $('#payment-form').serialize();
                $.ajax({
                    type: 'POST',
                    url: 'process_payment.php',
                    data: form,
                    success: function(data) {
                        if (data.includes('success')) {
                            alert(data);
                            $('#btnsubmit').html('Payment Successful');
                        } else {
                            alert(data);
                            // ENABLE THE BUTTON
                            $('#btnsubmit').removeAttr('disabled');
                            $('#btnsubmit').html('Submit Payment');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(error);
                    }
                });
            }
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('#agree').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#btnsubmit').prop('disabled', false).removeClass('bg-gray-400').addClass('bg-blue-500'); // Enable and change color
                } else {
                    $('#btnsubmit').prop('disabled', true).removeClass('bg-blue-500').addClass('bg-gray-400'); // Disable and revert color
                }
            });
        });
    </script>

</body>
</html>