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
$lesson = "lesson.php";
$songolt = "active";
} 
else if($usertype == 'Багш') {
$mail = $_SESSION['bagsh'];
$user = $db->data_print("select * from bagsh where b_mail='".$mail."'");
$lesson = "bagsh-lesson.php";
$songolt = "disabled";
}
?>

                    <nav class="pcoded-navbar" aria-label="Navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    
                                    <?php if (is_array($user) || is_object($user)) {

                                    foreach($user as $u) { 
                                        echo '<img class = "img-40 img-radius" style = "border-radius: 20%;" src="data:image/jpeg;base64,'.base64_encode($u['zurag']).'" />';
                                        }
                                    }?>
                                    <div class="user-details">
                                        <span><?php echo $u['ovog']." ".$u['ner'];?></span>
                                        <span id="more-details"><?php echo $usertype; ?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <!-- <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a> -->
                                            <a href="config/logout.php"><i class="ti-layout-sidebar-left"></i>Гарах</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Үндсэн цэс</div>
                            <ul class="pcoded-item pcoded-left-item">

                            <li class="active">
                                    <a href="<?php echo $forum ?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Форум</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            <?php if(isset($_SESSION['student-loggedin'])) {echo '<li class="active">
                                    <a href="student.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Оюутан</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>'; }?>

                                
                                

                                <?php if(isset($_SESSION['bagsh-loggedin'])) {echo '<li class="active">
                                    <a href="teacher.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Багш</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>'; }?>


                        

                                <li class="active">
                                    <a href="<?php echo $lesson ?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Хичээл</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <?php if(isset($_SESSION['student-loggedin'])) {echo '<li class="active">
                                    <a href="enroll.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Хичээл сонголт</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>'; }?>

                               
                                
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Нэмэлт цэс</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="http://huree.online/">
                                        <span class="pcoded-micon" style = "background-color: #FFB64D;"><i class="ti-direction-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Мүүдл систем </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <!-- <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                
                                    </ul> -->
                                </li>
                            </ul>
                        </div>
                    </nav>