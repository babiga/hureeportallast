<?php include_once "config/database.php"; 
$db = new database();
mb_internal_encoding("UTF-8");
$id = $_SESSION['student'];
$hicheel = $db->data_print("select * from songolt where student_id='".$id."'");
if(!isset($_SESSION['student-loggedin'])){
    echo "<script>location.replace('index.php')</script>";
}
error_reporting(E_ERROR | E_PARSE);
?>

<div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Судалж буй хичээлүүд</h5>
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
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope>Хичээл</th>
                                                                        <th scope>Кредит</th>
                                                                        <th scope>Багш</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                
                                                                <tbody>
                                                                <?php foreach($hicheel as $h) {?>
                                                                    
                                                                <tr>
                                                                        <td>
                                                                        <a href = "lesson-more.php?lid=<?php echo $h['lid']; ?>">
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center"><?php echo mb_substr($h['lesson_name'],0,1,'UTF-8');?></h6>
                                                                                <p class="d-inline-block m-l-20"><?php echo $h['lesson_name'];?></p>
                                                                            </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $h['kredit'];?></p>
                                                                           
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $h['bagsh'];?></p>
                                                                           
                                                                        </td>

                                                                        <td>
                                                                        <a href = "?unenroll=true&lid=<?php echo $h['lid'];?>" class = "label bg-c-green m-l-10 f-10" style="background-color: #FF5370;">Гарах</a>
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
                                            if(isset($_GET['unenroll']))
 {

    $lid = $_GET['lid'];
   


$user = $db->data_insert("delete from songolt where lid =".$lid." and student_id='".$id."'");

echo "<script>location.replace('lesson.php')</script>";

 } ?>