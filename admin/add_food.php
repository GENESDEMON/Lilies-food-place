
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Food Vault | Add Food
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
        <div class="card-body">
            <form role="form text-left">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Food Title" aria-label="Title" >
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Price" aria-label="Password" >
              </div>
              <div class="mb-3">
                <input type="file" class="form-control" placeholder="Food Image" aria-label="Password" >
              </div>
              <div class="mb-3">
                <select data-placeholder="Category">
                    <option>Category</option>
                    <option>Burger</option>
                    <option>Pizza</option>
                    <option>Fried Rice</option>
                    <option>Chicken Shots</option>
                </select>
            </div>
            <div class="mb-3">
                <select data-placeholder="Category">
                    <option>Specialty</option>
                    <option>Burger</option>
                    <option>Pizza</option>
                    <option>Fried Rice</option>
                    <option>Chicken Shots</option>
                </select>
            </div>
            <div class="mb-3">
                <select data-placeholder="Category">
                    <option>Availability</option>
                    <option>Burger</option>
                    <option>Pizza</option>
                    <option>Fried Rice</option>
                    <option>Chicken Shots</option>
                </select>
            </div>
              <div class="text-center">
                <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
              </div>
            </form>
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