function checkout() {
	var paymentAmount = 100;
	var paymentDescription = 'A purchase'
	var handler = StripeCheckout.configure({
		key: '[PLACEHOLDER_STRIPE_KEY_PUBLIC]',
		locale: 'auto',
		allowRememberMe: false,
		token: function(token) {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					setTimeout(markPurchased, 500);
				}
			};
			req.open("POST", "sbnr/stripe.php", true);
			req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			req.send("PAYMENT_TOKEN=" + token.id
			+ "&PAYMENT_AMOUNT=" + paymentAmount
			+ "&PAYMENT_DESCRIPTION=" + btoa(paymentDescription)
			+ "&CSRF_TOKEN=" + getCSRFToken());
		}
	});

	handler.open({
		name: '[PLACEHOLDER_ORGANIZATION]',
		description: paymentDescription,
		zipCode: true,
		amount: paymentAmount
	});

	window.addEventListener('popstate', function() {
		handler.close();
	});
}

function markPurchased() {

}

function checkoutProxy() {
	var warning = "Payment processing is performed by Stripe. By continuing your browser will load proprietary code from their servers. Do you want to continue?";
	if(confirm(warning)) {
		loadExternalJS("https://checkout.stripe.com/checkout.js", checkout);
	} else {
		//Cancel
	}
}
