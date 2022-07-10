<button id="rzp-button1" class="btn btn-danger">Donate</button>
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script>
                    var options = {
                        "key": "rzp_test_vDE2Czsbi9r6Jw", // Enter the Key ID generated from the Dashboard
                        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "razorpay.svg",
                        // "account_id": "acc_Ef7ArAsdU5t0XL",
                        // "order_id": "order_DBJOWzybf0sJbb", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "handler": function(response) {
                           console.log(response);
                        },
                       
                    };
                    var rzp1 = new Razorpay(options);
                   
                   document.getElementById(rzp1-button1).onclick = function(e){
                    rzp1.open();
                    e.preventDefault();
                   }
                       
                </script>
         