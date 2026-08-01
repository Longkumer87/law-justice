<?php
// require_once("autoload.php");
// session_start();

// $user = new Users(new DatabaseConnect);
// $valid = new Validate();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['check'])) {
//         if (isset($_POST['username'], $_POST['userpass'])) {
//             $uname = $valid->valid_input($_POST['username']);
//             $rawPass = $valid->valid_input($_POST['userpass']);
//             if (empty($uname) || empty($rawPass)) {
//                 $message = 'Fields cannot be empty';
//             } else {
//                 if ($user->authenticate($uname, $rawPass)) {
//                     $tmp_id = $user->get_result();
//                     if ($user->get($tmp_id['user_id'])) {
//                         $_SESSION['user_data'] = $user->get_result();
//                         header("Location: home.php");
//                         exit;
//                     } else {
//                         //print_r($user->get_msg());
//                     }
//                 } else {
//                     $message = 'Invalid username or password';
//                 }
//             }
//         }
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Tracking System</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container flex-grow-1 d-flex align-items-center">
        <div class="row justify-content-center align-items-center flex-grow-1">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                <div class="card shadow-lg border-0 mt-3">
                    <!--card header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                            <img src="images/logo-md.png" class="img-fluid" width="120" alt="Government Logo">
                            <span>
                                <br><br>
                                GOVERNMENT OF NAGALAND<br>
                                DEPARTMENT OF LAW & JUSTICE, NAGALAND
                            </span>
                        <hr class="border-light">
                        <span class="fw-bold">CASE TRACKING SYSTEM</span>
                    </div>
                    <!--card body -->
                    <div class="card-body p-4">
                        <?php if(!empty($message)){echo '<span class="text-danger">'.$message.' !<br></span>';} ?>
                        <form name="loginForm" method="post">
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="USERNAME" autocomplete="username" required>
                                        <label for="username" class="form-label fst-italic">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4m0 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3" />
                                        </svg>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="userpass" name="userpass" placeholder="Password" required>
                                        <label for="userpass" class="form-label fst-italic">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Remember Me </label>
                                </div>
                                <button type="submit" name="check" class="btn btn-primary fw-bold">LOGIN</button>
                            </div>
                        </form>
                    </div>

                    <!--card footer -->
                    <div class="card-footer text-center py-3">
                        <a href="forgotpassword.php" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg> Forgot Password?
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
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