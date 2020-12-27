<?php include_once "config/database.php"; 
$db = new database();
$hicheel = $db->data_print("select * from lesson");
$num =0;

if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
}
error_reporting(E_ERROR | E_PARSE);
?>

<div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Бүх хичээлүүд</h5>
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
                                                                        <th scope>#</th>
                                                                        <th scope>Хичээл</th>
                                                                        <th scope>Кредит</th>
                                                                        <th scope>Багш</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                
                                                                <tbody>
                                                                <?php foreach($hicheel as $h) {?>
                                                                    
                                                                <tr>
                                                                        <td> 
                                                                        <p class="d-inline-block m-r-20"><?php $num++; echo $num;?></p>
                                                                        </td>
                                                                        <td>
                                                                        <a href = "lesson-more.php?lid=<?php echo $h['lid']; ?>">
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center"><?php echo $h['h_ner'][0];?></h6>
                                                                                <p class="d-inline-block m-l-20"><?php echo $h['h_ner'];?></p>
                                                                            </div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $h['kredit'];?></p>
                                                                           
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $h['bagsh'];?></p>

                                                                        </td>
                                                                    
                                                                    </tr>

                                                                <?php }?>
                                                                   
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
