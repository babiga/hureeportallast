<?php include_once "config/database.php"; 
$db = new database();
$student = $db->data_print("select * from student");
if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
 }
 $num = 0;
 error_reporting(E_ERROR | E_PARSE);
?>



<div class="card">
                                                <div class="card-header">
                                                    <h5>Оюутнуудын мэдээлэл</h5>
                                                    
                                                    <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="">#</th>
                                                                    <th scope="">Оюутны код</th>
                                                                    <th scope="">Нэр</th>
                                                                    <th scope="">Дэлгэрэнгүй</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($student as $s) {?>
                                                                <tr>
                                                                    <th scope="row"><?php $num++; echo $num; ?></th>
                                                                    <td><?php echo $s['id'];?></td>
                                                                    <td><?php echo $s['ner'];?></td>
                                                                    <td><a href = "oyutan-more.php">Харах</a></td>
                                                                    
                                                                </tr>
                                                                <?php }?>      
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                      