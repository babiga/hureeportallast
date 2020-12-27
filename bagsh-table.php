<?php include_once "config/database.php"; 
$db = new database();
$bagsh = $db->data_print("select * from bagsh");
if(!isset($_SESSION['loggedin'])){
    header("Location:index.php");
 }
$num = 0;
error_reporting(E_ERROR | E_PARSE);
?>

<div class="card">
                                                <div class="card-header">
                                                    <h5>Багш нарын мэдээлэл</h5>
                                                    
                                                    <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="">#</th>
                                                                    <th scope="">Нэр</th>
                                                                    <th scope="">Утас</th>
                                                                    <th scope="">Имейл</th>
                                                                </tr>
                                                            </thead>
                                                            <?php foreach($bagsh as $b) {?>
                                                                <tr>
                                                                    <th scope="row"><?php $num++; echo $num; ?></th>
                                                                    <td><?php echo $b['ner'];?></td>
                                                                    <td><?php echo $b['b_utas'];?></td>
                                                                    <td><?php echo $b['b_mail'];?></td>
                                                                   
                                                                </tr>
                                                                <?php }?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>