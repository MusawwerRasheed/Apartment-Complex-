<?php
session_start();
if(!isset($_SESSION['admin_pos']))
{
  echo "<script>window.location.href = '../../index.php'; </script>";
}
$user_id = $_SESSION['admin_pos'];
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!--sidebar wrapper -->
<div class="sidebar-wrapper printBlock" data-simplebar="true">

    <div class="sidebar-header">
        <a href="dashboard.php">
            <!-- <div>
                <img src="../../images/Asset-1@2x.png" class="logo-icon" alt="logo icon">
            </div> -->
            <div>
                <h5 class="logo-text">Apartment</h5>
            </div>
        </a>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="dashboard.php">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Client</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_client.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Client </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="client_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Client Details</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Plaza</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_plaza.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Plaza </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="plaza_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Plaza Detail </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Floor</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_floor.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Floor </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="floor_details.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Floor Detail </span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Shop</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_shop.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Shop </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="shop_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Shop Detail </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Apartment</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_appartment.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Add Apartment </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="apartment_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Apartment Detail </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Office</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_office.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Office </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="office_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Office Detail </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Status</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_status.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Status </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="status_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Status Detail </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Agreement</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href=".php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Agreement </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href=".php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Agreement Detail </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->

sale