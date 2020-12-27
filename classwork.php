<?php include_once "config/database.php"; 
$db = new database();
mb_internal_encoding("UTF-8");
$lid = $_GET['lid'];
$works = $db->data_print("select * from classworks where lid=".$lid." order by work_id desc");
if(!isset($_SESSION['loggedin'])){
    echo "<script>location.replace('index.php')</script>";
}
error_reporting(E_ERROR | E_PARSE);
?>

<div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Ангийн ажил болон далгаврууд</h5>
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
                                                               
                                                                <tbody>
                                                                <?php foreach($works as $w) {
                                                                    $bagsh_zurag = $db->data_print("select zurag from bagsh where b_mail='".$w['bagsh_mail']."'");
                                                                    foreach ($bagsh_zurag as $bz) {;
                                                                    ?>
                                                                    
                                                                <tr>
                                                                 <td>
                                                                        <?php echo '<img style="border-radius:50%; width: 40px; height:40px; float:left;" src="data:image/jpeg;base64,'.base64_encode($bz['zurag']).'" />' ?>
                                                                        <div style = "width:100%; height: auto; margin-left: 10px;">
                                                                        <p style="margin-left : 10px; font-weight: 600; font-size:15px; display: inline; line-height:0px;"><?php echo $w['bagsh'];?></p> 
                                                                        </div>
                                                                        <p style ="margin-left: 10px;display: inline; font-size: 12px; line-height:0px;"><?php echo $w['ognoo'];?></p> 
                                                                        
                                                                        <?php if(isset($_SESSION['bagsh-loggedin'])){if($_SESSION['bagsh'] == $w['bagsh_mail']) {
                                                                        
                                                                        include 'delete-classwork.php'; }}?>
                                                                       
                                                                        
                                                                        
                                                                            <div class="task-contain" style="margin-top:20px;">
                                                                            <a href = "classwork-more.php?work_id=<?php echo $w['work_id']?>&lid=<?php echo $w['lid'];?>"><h5 style="color: #e8710a; font-size:14px; font-weight: 1000;"><?php echo $w['title']; ?></h5></a>
                                                                            <p style=""><?php echo $w['detail'];?></p>
                                                                            </div>
                                                                            <?php echo '<img style="border-radius:5px; width: 100%; height:auto;" src="data:image/jpeg;base64,'.base64_encode($w['zurag']).'" />';?>
                                                                           
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                        
                                                                <?php }}?>
                                                                   
                                                                    
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            if(isset($_GET['delete-classwork']))
 {

    $work_id = $_GET['work_id'];
    $lid = $_GET['lid'];


$user = $db->data_insert("delete from classworks where work_id =".$work_id);
echo "<script>location.replace('lesson-more.php?lid=".$lid."');</script>";


 } ?>