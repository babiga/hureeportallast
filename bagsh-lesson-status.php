<?php include_once "config/database.php"; 
$db = new database();
$hicheel = $db->data_print("select * from lesson where bagsh_mail='".$_SESSION['bagsh']."'");
if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
 }
 error_reporting(E_ERROR | E_PARSE);
?>

<div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Зааж буй хичээлүүд</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a href = "hicheel-nemeh.php" class = "label bg-c-green m-l-10 f-10">Хичээл нэмэх</a>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope>Хичээл</th>
                                                                        <th scope>Кредит</th>
                                                                    </tr>
                                                                </thead>
                                                                
                                                                <tbody>
                                                                <?php foreach($hicheel as $h) {?>
                
                                                                <tr>
                                                                        <td>
                                                                        <a href = "lesson-more.php?lid=<?php echo $h['lid']; ?>">
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center"><?php echo $h['h_ner'][0];?></h6>
                                                                                <p class="d-inline-block m-l-20"><?php echo $h['h_ner'];?></p>
                                                                            </div> </a>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $h['kredit'];?></p>
                                                                            
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                <a href = "?lid=<?php echo $h['lid']; ?>&delete-lesson=true" class = "label bg-c-green m-l-10 f-10" style="background-color: #FF5370;">Устгах</a>
                                                                        </td>
                                                                    </tr>

                                                                <?php }?>
                                                                   
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            if(isset($_GET['delete-lesson']))
 {
     include_once "delete-validation.php";
 } 
 
 if(isset($_SESSION['agreed'])){
     
    $lid = $_GET['lid'];
    $user = $db->data_insert("delete from classworks where lid =".$lid);
    $userr = $db->data_insert("delete from lesson where lid =".$lid);
    $userrr = $db->data_insert("delete from songolt where lid =".$lid);


     unset($_SESSION['agreed']);
    
        echo "<script>location.replace('teacher.php')</script>";
 }
 
 
 ?>




