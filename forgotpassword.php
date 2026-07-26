<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Case Tracking Management System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">

        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                <div class="card shadow-lg border-0">


                    <div class="card-header bg-primary text-white text-center py-4">
                        <span class="fw-bold">Case Tracking Management System</span>
                        <p class="mb-0">Forgot Password</p>
                    </div>

                    <div class="card-body p-4">
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle-fill"></i> Enter your registered email address. A One-Time Password (OTP) will be sent to your email.
                        </div>

                        <!-- form to get otp -->
                        <form action="#" method="POST">

                            <div class="mb-4">
                                <label class="form-label fw-semibold"><i class="bi bi-envelope-fill"></i> Official Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="email@gov.in" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg"> Send OTP</button>
                            </div>

                        </form>

                    </div>

              
                    <div class="card-footer text-center">
                        <a href="index.php" class="text-decoration-none">
                            <i class="bi bi-arrow-left-circle"></i> Back to Login
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>