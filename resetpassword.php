<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Case Tracking Management System</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100 bg-light">


    <div class="container flex-grow-1 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0">

                    <!--card body -->
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3 class="mt-3 fw-bold">Reset Password</h3>
                            <p class="text-muted mb-0">Create a new password for your account. </p>
                        </div>

                        <form name="#" method="post">
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                        </svg>

                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" autocomplete="username" required>
                                        <label for="username" class="form-label fst-italic">New Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M12 0a4 4 0 0 1 4 4v2.5h-1V4a3 3 0 1 0-6 0v2h.5A2.5 2.5 0 0 1 12 8.5v5A2.5 2.5 0 0 1 9.5 16h-7A2.5 2.5 0 0 1 0 13.5v-5A2.5 2.5 0 0 1 2.5 6H8V4a4 4 0 0 1 4-4" />
                                        </svg>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                                        <label for="confirm_password" class="form-label fst-italic">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="check" class="btn btn-primary fw-bold">Update Password</button>
                            </div>
                        </form>

                    </div>

                    <!-- card footer -->
                    <div class="card-footer text-center">
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