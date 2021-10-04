
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Food Vault | Food Menu
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
<?php include('../includes/sidebar.php'); ?> 
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<br><br><br>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <span class="badge badge-sm bg-gradient-danger"><a href="add_food.php" style="color: #ffffff">Add new food</a></span>
            <div class="card-header pb-0">
              <h6>Food Menu Items</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Food</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Speciality</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avalability</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Added</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/a4.png" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Chief Burger Meal and Pepsi</h6>
                              <p class="text-xs text-secondary mb-0">Snacks </p>
                            </div>
                          </div>
                        </td>
                        <td >
                          <p class="text-xs font-weight-bold mb-0">N 1000.00</p>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">Special Deal</p>
                          </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Available</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/21</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              Delete
                            </a>
                          </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>