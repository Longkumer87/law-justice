<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government of Nagaland | Case Tracking Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg" style="background-color: #F5F3FF">

    <div class="container">

        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0">

                    <!-- header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                        <img src="images/logo.png" class="img-fluid mb-3" width="130" alt="Government Logo">
                        <h6 class="fw-bold mb-1"> Government of Nagaland </h6>
                        <small> Law & Justice, Nagaland</small>
                        <hr class="border-light">
                        <h5 class="fw-bold mb-0">Case Tracking Management System</h5>
                    </div>

                    <!-- body -->
                    <div class="card-body p-4">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-semibold"><i class="bi bi-person-fill"></i> Username</label>
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter Username" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold"><i class="bi bi-lock-fill"></i> Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
                            </div>


                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember Me </label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>

                    <!-- footer -->
                    <div class="card-footer text-center bg-white">
                        <a href="forgotpassword.php" class="text-decoration-none">
                            <i class="bi bi-key-fill"></i> Forgot Password?
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>