<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <title>Connak Foundation ICT Portal:: Checkout</title>
    <meta
      name="description"
      content="CONNAK Foundation is a private not-for-profit organization
    established in 2012 with a vision to tackle youth unemployment, that
    has resulted in social malice and redundancy, by creating
    opportunities for economic empowerment and growth in the eastern
    part of Nigeria."
    />
    <meta
      name="keywords"
      content="NGO, Connak, Foundation, Connak Foundation, Abia, Charity, Scholarship, Healthcare, Technology, Education, Programming, Job Creation, Vocational Training"
    />
    <meta name="theme-color" content="#3a55b1" />
    <!-- <meta http-equiv="refresh" content="2"> -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="./vendors/bootstrap/dist/css/bootstrap.min.css"
    />
    <link href="dist/css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader-it">
      <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper">
      <!-- Main Content -->
      <div class="hk-pg-wrapper hk-auth-wrapper">
        <header class="d-flex justify-content-between align-items-center">
          <a class="d-flex auth-brand" href="#">
            <img class="brand-img" src="dist/img/logo-dark.png" alt="brand" />
          </a>
          <div class="btn-group btn-group-sm">
            <a href="#" class="btn btn-outline-secondary">Help</a>
            <a href="#" class="btn btn-outline-secondary">About Us</a>
          </div>
        </header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-5 pa-0">
              <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                <div
                  class="fadeOut item auth-cover-img overlay-wrap"
                  style="background-image: url(dist/img/bg2.jpg)"
                >
                  <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                    <div
                      class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100"
                    >
                      <h1 class="display-3 text-white mb-20">
                        Understand and look deep into nature.
                      </h1>
                      <p class="text-white">
                        The purpose of lorem ipsum is to create a natural
                        looking block of text (sentence, paragraph, page, etc.)
                        that doesn't distract from the layout. Again during the
                        90s as desktop publishers bundled the text with their
                        software.
                      </p>
                    </div>
                  </div>
                  <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
                <div
                  class="fadeOut item auth-cover-img overlay-wrap"
                  style="background-image: url(dist/img/bg1.jpg)"
                >
                  <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                    <div
                      class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100"
                    >
                      <h1 class="display-3 text-white mb-20">
                        Experience matters for good applications.
                      </h1>
                      <p class="text-white">
                        The passage experienced a surge in popularity during the
                        1960s when Letraset used it on their dry-transfer
                        sheets, and again during the 90s as desktop publishers
                        bundled the text with their software.
                      </p>
                    </div>
                  </div>
                  <div class="bg-overlay bg-trans-dark-50"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-7 pa-0">
              <div class="auth-form-wrap py-xl-0 py-50">
                <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                  <!-- Paystack Form -->
                  <form
                    id="paymentForm"
                    action="verify_transaction.php"
                    method="post"
                  >
                    <h1 class="display-4 mb-10">Proceed to payment</h1>
                    <p class="mb-30">
                      Fill in details below to proceed payment
                    </p>
                    <div class="row">
                      <div class="form-group col-12 col-md-6">
                        <label for="First Name">First Name</label>
                        <input
                          class="form-control"
                          placeholder="Enter your First Name"
                          type="text"
                          id="fname"
                          name="fname"
                        />
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <label for="Last Name">Last Name</label>
                        <div class="input-group">
                          <input
                            class="form-control"
                            placeholder="Enter Last Name"
                            type="text"
                            id="lname"
                            name="lname"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Email">Email</label>
                      <div class="input-group">
                        <input
                          class="form-control"
                          placeholder="Enter your mail"
                          type="email"
                          id="email-address"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12 col-md-4">
                        <label for="amount">Currency</label>
                        <select class="form-control" id="disabledSelect">
                          <option>NGN</option>
                        </select>
                      </div>
                      <div class="form-group col-12 col-md-8">
                        <label for="amount">Amount</label>
                        <div class="input-group">
                          <input
                            class="form-control"
                            placeholder="Enter Amount "
                            type="text"
                            id="amount"
                            name="amount"
                          />
                        </div>
                      </div>
                    </div>
                    <br />
                    <div class="form-submit">
                      <button
                        type="submit"
                        onclick="payWithPaystack()"
                        class="btn btn-success btn-block"
                      >
                        Pay Now
                      </button>
                    </div>
                  </form>
                  <script src="https://js.paystack.co/v1/inline.js"></script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Content -->
    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/login-data.js"></script>
    <script>
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
            window.location = "http://localhost/portalpay/index_pay.php?trans";
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
    </script>
  </body>
</html>
