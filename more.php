<?php include_once "config/database.php"; 
$db = new database();
$student = $db->data_print("select * from student");
if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
 }

?>



<div class="card">
                                                <div class="card-header">
                                                    <h5>Оюутнуудын дэлгэрэнгүй мэдээлэл</h5>
                                                    
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
                                                                    <th scope="">Овог</th>
                                                                    <th scope="">Имейл</th>
                                                                    <th scope="">Төрсөн огноо</th>
                                                                    <th scope="">Тэнхим</th>
                                                                    <th scope="">Курс</th>
                                                                    <th scope="">Зураг</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($student as $s) {?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $s['sid'];?></th>
                                                                    <td><?php echo $s['id'];?></td>
                                                                    <td><?php echo $s['ner'];?></td>
                                                                    <td><?php echo $s['ovog'];?></td>
                                                                    <td><?php echo $s['email'];?></td>
                                                                    <td><?php echo $s['ognoo'];?></td>
                                                                    <td><?php echo $s['tenhim'];?></td>
                                                                    <td><?php echo $s['kurs'];?></td>
                                                                    <td><?php echo '<img class = "blob" src="data:image/jpeg;base64,'.base64_encode($s['zurag']).'" />';?></td>
                                                                    
                                                                </tr>
                                                                <?php }?>      
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                      