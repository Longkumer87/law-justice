<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Case Tracking System</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container flex-grow-1 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0">

                    <!-- Card header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                        <span class="fw-bold">CASE TRACKING SYSTEM</span>
                        <p class="mb-0">Forgot Password</p>
                    </div>

                    <!-- card body -->
                    <div class="card-body p-4">
                        <div class="alert alert-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg>
                            Enter your registered email address. A One-Time Password (OTP) will be sent to your email.
                        </div>

                        <!-- form to get otp -->
                        <form name="#" method="post">
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                        </svg>
                                    </div>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="useremail" name="useremail" placeholder="USERNAME" autocomplete="username" required>
                                        <label for="email" class="form-label fst-italic">user email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" name="check" class="btn btn-primary fw-bold">Sent OTP</button>
                            </div>
                        </form>

                    </div>

                    <!-- cardfooter -->
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


    <div class="bg-dark py-3 mt-4">
        <div class="container text-light">
            <span class="fw-bold fst-italic mb-2">Need Assistance?</span><br>
            <small class="fst-italic">
                For technical support, please contact: <br>
                System Administrator,<br>
                Department of Law & Justice, Government of Nagaland<br>
                Email: system_admin@gov.in
            </small>
        </div>
        <!-- Footer -->
        <hr class="border-light">
        <footer class="d-flex justify-content-evenly text-light">
            <small class="fw-lighter">
                &copy;2026 All rights reserved.
            </small>
            <small class="fw-lighter">
                Site Designed and Developed by eCourts Team Nagaland.
            </small>
        </footer>
    </div>


</body>

</html>