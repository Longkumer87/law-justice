<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP | Case Tracking System</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container flex-grow-1 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0">

                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                        <span class="fw-bold">CASE TRACKING SYSTEM</span>
                        <p class="mb-0">Verify OTP</p>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4">
                        <div class="alert alert-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.97 11.03 3.75 7.81l-.75.75 3.97 3.97 6-6-.75-.75z" />
                            </svg>
                            A 6-digit OTP has been sent to your registered email address. Please enter it below.
                        </div>

                        <form action="reset_password.php" method="POST">

                            <label class="form-label fw-semibold">Enter 6-Digit OTP</label>

                            <div class="d-flex justify-content-center gap-2 mb-4">

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="opt" name="otp" inputmode="numeric"  required>

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="otp" name="otp" inputmode="numeric" required>

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="otp" name="otp" inputmode="numeric" required>

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="opt" name="otp" inputmode="numeric" required>

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="opt" name="otp" inputmode="numeric" required>

                                <input type="text" class="form-control text-center otp-input"
                                    maxlength="1" id="opt" name="otp" inputmode="numeric" required>
                            </div>
                            <div class="text-center mb-3">
                                <small class="text-muted">
                                    Didn't receive the OTP?
                                    <a href="forgot_password.php" class="text-decoration-none">
                                        Resend OTP
                                    </a>
                                </small>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary fw-bold">
                                    Verify OTP
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer text-center py-3">
                        <a href="index.php" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                            Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="bg-dark py-3 mt-4">
        <div class="container text-light">
            <span class="fw-bold fst-italic">Need Assistance?</span>
            <br>
            <small class="fst-italic">
                For technical support, please contact:<br>
                System Administrator,<br>
                Department of Law & Justice,
                Government of Nagaland<br>
                Email: system_admin@gov.in
            </small>
        </div>

        <hr class="border-light">
        <footer class="d-flex justify-content-evenly text-light">
            <small>
                &copy;2026 All rights reserved.
            </small>
            <small>
                Site Designed and Developed by eCourts Team Nagaland.
            </small>
        </footer>
    </div>
</body>

</html>