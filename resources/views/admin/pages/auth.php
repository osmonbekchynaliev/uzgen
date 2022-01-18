<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Административная панель</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/program.min.css">
  </head>
  <body>
    <div id="page-container">
      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo19@2x.jpg');">
          <div class="row g-0 justify-content-center bg-primary-dark-op">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
              <!-- Sign In Block -->
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <!-- Header -->
                  <div class="mb-2 text-center">
                    <a class="link-fx fw-bold fs-1" href="#s">
                      <span class="text-dark">Админ</span><span class="text-primary"> панель</span>
                    </a>
                    <p class="text-uppercase fw-bold fs-sm text-muted"></p>
                  </div>
                  <!-- END Header -->

                 
                  <form class="js-validation-signin" action="/adminRegistr" method="POST">
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Имя пользователя">
                        <span class="input-group-text">
                          <i class="fa fa-user-circle"></i>
                        </span>
                      </div>
                    </div>
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Пароль">
                        <span class="input-group-text">
                          <i class="fa fa-asterisk"></i>
                        </span>
                      </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                    </div>
                    <div class="text-center mb-4">
                      <button type="submit" name="submit" class="btn btn-hero btn-primary">
                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Войти
                      </button>
                    </div>
                  </form>
                  <!-- END Sign In Form -->
                </div>
                
              </div>
              <!-- END Sign In Block -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="assets/js/jscript.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signin.min.js"></script>
  </body>
</html>
