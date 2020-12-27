<?php include_once "config/database.php"; 
$db = new database();
$lid = $_GET['lid'];
$students = $db->data_print("select * from songolt where lid=".$lid);

if(!isset($_SESSION['loggedin'])){
    echo "<script>location.replace('index.php')</script>";
 }
 error_reporting(E_ERROR | E_PARSE);
?>

<?php
$lesson_data = $db->data_print("select h_ner,bagsh,kredit from lesson where lid=".$lid);
foreach($lesson_data as $ld) {$bagsh_ner = $ld['bagsh']; $kredit = $ld['kredit']; $lesson_name = $ld['h_ner'];} ?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">


<div class = "lesson-header">
<h1> <?php echo $lesson_name;?> </h1>
<h5>Багш : <?php echo $bagsh_ner." (".$kredit." кредит)";?> </h5>
</div>




<div class="card">
                                                <div class="card-header">
                                                    <!-- <h5 class = "label bg-c-green m-l-10 f-10" style="background-color: #4680ff;"><?php echo $lesson_name;?></h5>  -->
                                                    <h5>Уг хичээлийг судалж буй оюутнууд</h5>
                                                    
                                                    <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope>ID</th>
                                                                    <th scope>Овог</th>
                                                                    <th scope>Нэр</th>
                                                                    <th scope>Тэнхим</th>
                                                                    <th scope>Курс</th>
                                                                    <th scope>Зураг</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($students as $s) {
                                                                $student_data = $db->data_print("select ner,ovog,tenhim,kurs,id,zurag from student where id ='".$s['student_id']."'");
                                                                foreach($student_data as $sd){
                                                                   
                                                                
                                                                ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $s['student_id'];?></th>
                                                                    <td> <?php echo $sd['ovog']; ?> </td>
                                                                    <td> <?php echo $sd['ner']; ?> </td>
                                                                    <td> <?php echo $sd['tenhim']; ?> </td>
                                                                    <td> <?php echo $sd['kurs']; ?> </td>
                                                                    <td> <?php echo '<img style="border-radius:30%; width: 60px; height:60px;" src="data:image/jpeg;base64,'.base64_encode($sd['zurag']).'" />';?> </td>
                                                                    
                                                                </tr>
                                                                <?php }
                                                                        }
                                                                        ?>      
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                      