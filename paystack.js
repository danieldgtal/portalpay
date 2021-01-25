const paymentForm = document.getElementById("paymentForm");
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  let handler = PaystackPop.setup({
    key: "pk_test_8bf7ae53dcb3d7c01298a5af269c956ab54c1afc", // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: "CKF" + Math.floor(Math.random() * 1000000000 + 1),
    // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"

    onClose: function () {
      window.location = "http://localhost/portalpay/index.php";
      alert("Transaction Cancelled.");
    },

    callback: function (response) {
      let message = "Payment complete! Reference: " + response.reference;
      alert(message);
      window.location =
        "http://localhost/portalpay/verify_transaction.php?reference=" +
        response.reference;
    },
  });

  handler.openIframe();
  e.preventDefault();
}
