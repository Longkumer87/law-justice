<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Case Tracking Management System</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-12 col-sm-10 col-md-8 col-lg-5">

            <div class="card shadow-lg border-0">

                <!-- Body -->
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <h3 class="mt-3 fw-bold">
                            Reset Password
                        </h3>

                        <p class="text-muted mb-0">
                            Create a new password for your account.
                        </p>

                    </div>

                    <form action="update_password.php" method="POST">

                        <!-- New Password -->
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                <i class="bi bi-lock-fill"></i>
                                New Password
                            </label>

                            <input
                                type="password"
                                name="new_password"
                                class="form-control form-control-lg"
                                placeholder="Enter New Password"
                                required>

                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                <i class="bi bi-lock-fill"></i>
                                Confirm Password
                            </label>

                            <input
                                type="password"
                                name="confirm_password"
                                class="form-control form-control-lg"
                                placeholder="Confirm New Password"
                                required>

                        </div>

                        <!-- Update Button -->
                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-check-circle-fill"></i>
                                Update Password
                            </button>

                        </div>

                    </form>

                </div>

                <!-- Footer -->
                <div class="card-footer text-center">

                    <a href="index.php" class="text-decoration-none">
                        <i class="bi bi-arrow-left-circle"></i>
                        Back to Login
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>