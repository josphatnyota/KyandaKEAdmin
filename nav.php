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
                  <span class="font-weight-bold mb-2"><b><?php echo $displayName; ?></b></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/home.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-view-dashboard menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="./initiatetrans.php">
                <span class="menu-title">Manual Transactions</span>
                <i class="mdi mdi-cash menu-icon"></i>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="customerdetails.php">
                <span class="menu-title">Customer Details</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paymenttransaction.php">
                <span class="menu-title">Payment Transactions</span>
                <i class="mdi mdi-wallet menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="utilitytransactions.php">
                <span class="menu-title">Utility Transactions</span>
                <i class="mdi mdi-led-on menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="merchants.php">
                <span class="menu-title">Merchants</span>
                <i class="mdi mdi-cash menu-icon"></i>
              </a>
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
                <a href="logout.php"class="btn btn-block btn-lg btn-gradient-primary mt-4">Log Out</a>
               
              </span>
            </li>
          </ul>
        </nav>