<?php
IF($_SESSION['logedin']!=TRUE)
{
    header('location:login.php');
}
?>
<aside class="menu-sidebar d-none d-lg-block">
   
             <div class="logo">
                <a href="#">
                    <h3>HOUSE HOLD</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
              <?php
              if($_SESSION['type']=='admin')
              {
                         ?>
                        <li>
                            <a href="view_supervisor.php">
                                <i class="fas fa-chart-bar"></i>Supervisor</a>
                        </li>
                        <li>
                            <a href="view_product.php">
                                <i class="fas fa-table"></i>Products</a>
                        </li>
                        <li>
                            <a href="view_user.php">
                                <i class="far fa-check-square"></i>View User</a>
                        </li>
                        <li>
                            <a href="assign_meter.php">
                                <i class="fas fa-calendar-alt"></i>Meter Number</a>
                        </li>
                        <li>
                            <a href="view_complaint.php">
                                <i class="fas fa-map-marker-alt"></i>Complaint</a>
                        </li>
                         <li>
                            <a href="view_order.php">
                                <i class="fas fa-calendar-alt"></i>Requests</a>
                        </li>

                        <?php } ?>
                 <?php
                if($_SESSION['type']=='supervisor')
                  {
                 ?>
                        <li>
                            <a href="view_lineman.php">
                                <i class="fas fa-user"></i>Lineman</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Job Status</a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </aside>
    