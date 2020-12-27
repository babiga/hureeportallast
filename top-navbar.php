<?php
include_once "config/database.php";

if(!isset($_SESSION['loggedin'])){
    echo "<script>location.replace('index.php')</script>";
 }
 

$db = new database();
if(isset($_SESSION['student-loggedin'])){
   $usertype = 'Оюутан';
} else if(isset($_SESSION['bagsh-loggedin'])) { $usertype = 'Багш'; }

if($usertype == 'Оюутан'){
$sid = $_SESSION['student'];
$user = $db->data_print("select * from student where id='".$sid."'");
} 
else if($usertype == 'Багш') {
$mail = $_SESSION['bagsh'];
$user = $db->data_print("select * from bagsh where b_mail='".$mail."'");
}
?>

<nav class="navbar header-navbar pcoded-header" aria-label="Navbar">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="student.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                        <?php include_once 'notification.php'; ?>

                            <li class="user-profile header-notification">
                                <a href="#!">
                                <?php if (is_array($user) || is_object($user)) {

                                    foreach($user as $u) { 
                                        echo '<img class = "img-radius" style = "border-radius: 20%;" src="data:image/jpeg;base64,'.base64_encode($u['zurag']).'" />';
                                        }
                                    }?>
                                    
                                    <span><?php echo $u['ovog']." ".$u['ner'];?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <!-- <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="config/logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Гарах
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>