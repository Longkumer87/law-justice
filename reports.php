<?php
require_once("autoload.php");
session_start();

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

<body>
      <div class="d-flex">
            <!-- Sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-primary vh-100" style="width: 300px;">
                  <div class="fs-5 fw-bold text-center">CASE TRACKING SYSTEM</div>
                  <hr>
                  <ul class="nav nav-pills flex-column mb-auto">
                        <li class="mt-2">
                              <a href="home.php" class="nav-link text-white" aria-current="page">
                                    DASHBOARD
                              </a>
                        </li>
                        <li class="mt-2">
                              <a href="reports.php" class="nav-link text-white fw-bold">
                                    REPORTS
                              </a>
                        </li>
                        <li class="mt-2">
                              <a href="users.php" class="nav-link text-white">
                                    USERS
                              </a>
                        </li>
                        <li class="mt-2">
                              <a href="departments.php" class="nav-link text-white">
                                    DEPARTMENTS
                              </a>
                        </li>
                        <li class="mt-2">
                              <a href="districts.php" class="nav-link text-white">
                                    DISTRICTS
                              </a>
                        </li>
                        <li class="mt-2">
                              <a href="accounts.php" class="nav-link text-white">
                                    ACCOUNTS
                              </a>
                        </li>
                  </ul>
                  <hr>
                  <div class="d-flex justify-content-center">
                        <?php echo $_SESSION['user_data']['user_name']; ?>
                  </div>
                  <br>
                  <a href="logout.php" class="nav-link text-white text-center">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        LOGOUT
                  </a>
                  <br>
                  <br>
            </div>

            <!-- Main Content -->
            <div class="flex-grow-1 p-4">
                  <h3>REPORTS</h3>
                  <p>Text</p>
            </div>
      </div>
</body>

</html>