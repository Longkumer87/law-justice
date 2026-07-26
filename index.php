<?php
require_once("autoload.php");

/* class Test Extends DatabaseConnect
{
    public $db;
    public function testing()
    {
        $this->db = new DatabaseConnect;
        if($this->db->connect()){
            
        }
        echo $this->db->get_msg_databaseconnect();
    }
}
$test = new Test();
$test->testing(); */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government of Nagaland | Case Tracking System</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <div class="container flex-grow-1 d-flex align-items-center">

        <div class="row justify-content-center align-items-center flex-grow-1 mt-4">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0">

                    <!--card header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                        <img src="images/logo-md.png" class="img-fluid mb-3" width="130" alt="Government Logo">
                        <h6 class="fw-bold mb-1"> Government of Nagaland </h6>
                        <small>Department of Law & Justice, Nagaland</small>
                        <hr class="border-light">
                        <h5 class="fw-bold mb-0">Case Tracking System</h5>
                    </div>

                    <!--card body -->
                    <div class="card-body p-4">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    Username</label>
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter Username" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4m0 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3" />
                                    </svg> Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
                            </div>


                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me </label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>

                    <!--card footer -->
                    <div class="card-footer text-center py-3">
                        <a href="forgotpassword.php" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>Forgot Password?
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark py-3 mt-4">

        <div class="container text-light">
            <h6 class="fw-bold mb-2">Need Assistance?</h6>
            <small> 
                For technical support, please contact: <br>
                System Administrator<br>
                Department of Law & Justice<br>
                Government of Nagaland<br>
                Email: system_admin@gov.in <br>
                Phone: +91-XXXXXXXXXX </small>
        </div>

        <!-- Footer -->
        <footer class="container text-center text-light py-3">
            <hr>

            <small>
                &copy;2026 All rights reserved.
                <br>
                Site Designed and Developed by eCourts Team Nagaland.
            </small>

        </footer>

    </div>


</body>

</html>