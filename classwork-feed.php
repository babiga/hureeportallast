<?php include_once "config/database.php"; 
$db = new database();
$work_id = $_GET['work_id'];
$work = $db->data_print("select * from classworks where work_id=".$work_id);
$lesson_data = $db->data_print("select h_ner from lesson where lid=".$_GET['lid']);
if(!isset($_SESSION['loggedin'])){
    echo "<script>location.replace('index.php')</script>";
 }
 
?>

<?php
foreach($work as $w) {
    $title = $w['title']; $ognoo = $w['ognoo']; }
foreach($lesson_data as $ln){
    $hicheel = $ln['h_ner'];
}
 ?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<div class = "work-header">
<h1> <?php echo $title;?> </h1>
<h6>Хичээл : <?php echo $hicheel;?> </h6>
</div>
<?php 
$works = $db->data_print("select * from classworks where work_id=".$work_id);
if(!isset($_SESSION['loggedin'])){
    echo "<script>location.replace('index.php')</script>";
}
?>

<div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    
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
                                                                            <p class=""><?php echo $w['detail'];?></p>
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