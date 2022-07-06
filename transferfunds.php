<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kyanda Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/icon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include('nav.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="assets/images/icon.png" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Kyanda Admin</span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-view-dashboard menu-icon"></i>
                </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="initiatetrans.html">
                  <span class="menu-title">Manual Transactions</span>
                  <i class="mdi mdi-cash menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customerdetails.html">
                  <span class="menu-title">Customer Details</span>
                  <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="paymenttransaction.html">
                  <span class="menu-title">Payment Transactions</span>
                  <i class="mdi mdi-wallet menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="utilitytransactions.html">
                  <span class="menu-title">Utility Transactions</span>
                  <i class="mdi mdi-led-on menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                  <span class="menu-title">Merchants</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-cash menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="merchants.html">Merchants</a></li>
                    <li class="nav-item"> <a class="nav-link" href="addmerchant.html">Add Merchant</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Merchant Transactions</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="menu-title"> SMS</span>
                  <i class="mdi mdi-chat menu-icon"></i>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="menu-title"> Service Status</span>
                  <i class="mdi mdi-star menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="menu-title"> Administrators</span>
                  <i class="mdi mdi-worker menu-icon"></i>
                </a>
              </li>
              <li class="nav-item sidebar-actions">
                <span class="nav-link">
                  <button class="btn btn-block btn-lg btn-gradient-primary mt-4">Log Out</button>
                 
                </span>
              </li>
            </ul>
          </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add New Merchant </h3>
             
            </div>
            <div class="row">
                 <!--! grid-marging-->
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Merchant Details

                    </h4>
                    <form class="form-sample">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Merchant ID</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                              <input type="tel" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                    
                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ID Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">KRA PIN</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Busines Reg. Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Register</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2022, Kyanda Developers</span>
           
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>