<?php include('../server/misc.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Food Vault | Add Category
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php include('../includes/sidebar.php'); ?> 
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<br><br><br>
    <div class="container-fluid py-4">
        <div class="card-body">
            <form role="form text-left" method="post" action="add_cat.php">
            <?php include('../includes/errors.php'); ?>
            <div class="mb-3">
                <input type="text" name="name" value="" class="form-control" placeholder="Food Title" aria-label="Title" >
              </div>
              <div class="text-center">
                <button type="submit" name="save" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
              </div>
            </form>
          </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Food Categories</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <?php $results = mysqli_query($db, "SELECT * FROM category"); ?>
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                    <td class="align-middle">
                        <span class="text-secondary text-xs font-weight-bold">.</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $row['name']; ?></span>
                      </td>

                      <td class="align-middle">
                      <a href="../server/misc.php?del=<?php echo $row['id']; ?>" style="color:red" >
                      Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
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