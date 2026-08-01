<?php
require_once("autoload.php");
session_start();
$districts = new Districts(new DatabaseConnect());
$valid = new Validate();
$message = array();
$_SESSION['user_data']['new_dist'] = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['new'])) {
            $_SESSION['user_data']['new_dist'] = true;
      }
      if (isset($_POST['addDistrict'])) {
            if (isset($_POST['district'], $_POST['districtshort'])) {
                  $name = $valid->valid_input($_POST['district']);
                  $name_short = $valid->valid_input($_POST['districtshort']);
                  if (empty($name) || empty($name_short)) {
                        array_push($message, 'Fields cannot be empty');
                  } else {
                        if ($districts->add($name, $name_short)) {
                              
                        } else {
                              array_push($message, 'Unable to add');
                              print_r($districts->get_msg());
                        }
                  }
            }
      }
}

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
                              <a href="reports.php" class="nav-link text-white">
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
                              <a href="districts.php" class="nav-link text-white fw-bold">
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
                  <div class="d-flex justify-content-between">
                        <h3>DISTRICTS</h3>
                        <form method="post">
                              <?php if ($_SESSION['user_data']['new_dist'] == false): ?>
                                    <button type="submit" name="new" class="btn btn-primary">
                                          NEW
                                    </button>
                              <?php endif; ?>
                        </form>
                  </div>
                  <?php
                  if (!empty($message)) {
                        foreach ($message as $msg) {
                              echo "<div class='alert alert-danger' role='alert'>" . $msg . "</div>";
                        }
                  }
                  ?>
                  <?php if ($_SESSION['user_data']['new_dist'] == false): ?>
                        <div class="table-responsive">
                              <table class="table table-striped">
                                    <thead>
                                          <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Name (Short)</th>
                                                <th scope="col">Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                          $districts->get();
                                          $res = $districts->get_result();
                                          foreach ($res as $dist) {
                                                echo "<tr>";
                                                echo "<td>" . $dist['dist_id'] . "</td>";
                                                echo "<td>" . $dist['dist_name'] . "</td>";
                                                echo "<td>" . $dist['dist_name_short'] . "</td>";
                                                echo "<td><a href='edit_district.php?id=" . $dist['id'] . "' class='btn btn-sm btn-primary'>Edit</a></td>";
                                                echo "</tr>";
                                          }
                                          ?>
                                    </tbody>
                              </table>
                        </div>
                  <?php endif; ?>
                  <br>
                  <?php if ($_SESSION['user_data']['new_dist'] == true): ?>
                        <form method="post" name="formAdd">
                              <div class="form-floating">
                                    <input type="text" class="form-control w-auto" id="district" name="district" placeholder="District" required>
                                    <label for="district" class="form-label fst-italic">Name</label>
                              </div><br>
                              <div class="form-floating">
                                    <input type="text" class="form-control w-auto" id="districtshort" name="districtshort" placeholder="DistrictShort">
                                    <label for="districtshort" class="form-label fst-italic">Name (Short)</label>
                              </div>
                              <br>
                              <div class="d-flex justify-content-start">
                                    <button type="submit" name="addDistrict" class="btn btn-primary fw-bold">ADD</button>
                              </div>
                        </form>
                  <?php endif; ?>
            </div>
      </div>
</body>

</html>