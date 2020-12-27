<?php require_once "config/database.php"; 
$db = new database();

if(isset($_POST['register']))
 {

$ner = ucfirst($_POST['ner']);
$ovog = ucfirst($_POST['ovog']);
$id = strtoupper($_POST['id']);
$email = strtolower($_POST['email']);
$ognoo = $_POST['ognoo'];
$tenhim = $_POST['tenhim'];
$kurs = $_POST['kurs'];
$zurag = addslashes(file_get_contents($_FILES['zurag']['tmp_name']));
$s_pass = $_POST['password'];

$lesson_name = "Халдварааас сэргийлэх сургалт";
$kreditt = 1;
$bagshh = "Эрүүл Мэндийн Яам";

$check = $db->data_print("select id from student where id='".$id."'");
if ($check->num_rows){
    include_once 'already-exist.php';
} else {
$user = $db->data_insert("insert into student(ner,ovog,id,email,ognoo,tenhim,kurs,zurag,s_pass) values('".$ner."','".$ovog."','".$id."','".$email."','".$ognoo."','".$tenhim."',"
.$kurs.",'".$zurag."','".$s_pass."')");
    $_SESSION["registered"] = true;

   
    
 
 
 $EMYA = $db->data_insert("insert into songolt(lesson_name,student_id,kredit,bagsh) values('".$lesson_name."','".$id."',".$kreditt.",'".$bagshh."')");

header('location: index.php');
}
 }


 if(isset($_POST['hicheel-nemeh']))
 {

$ner = ucfirst($_POST['h_ner']);
$kredit = $_POST['kredit'];
$bagsh_ner = $_SESSION['bagsh-ner'];
$bagsh_ovog = $_SESSION['bagsh-ovog'];

$user = $db->data_insert("insert into lesson(h_ner,kredit,bagsh,bagsh_mail) values('".$ner."',".$kredit.",'".$bagsh_ovog." ".$bagsh_ner."','".$_SESSION['bagsh']."')");

 }

 
 if(isset($_POST['classwork-nemeh']))
 {

$title = ucfirst($_POST['title']);
$detail = $_POST['detail'];
$zurag = addslashes(file_get_contents($_FILES['zurag']['tmp_name']));

$lid = $_GET['lid'];
date_default_timezone_set('Asia/Ulaanbaatar');
$ognoo = date('m/d/Y h:i a', time());
$bagsh_ner = $_SESSION['bagsh-ner'];
$bagsh_ovog = $_SESSION['bagsh-ovog'];
$bagsh_mail = $_SESSION['bagsh'];

$user = $db->data_insert("insert into classworks(lid,bagsh,title,detail,ognoo,zurag,bagsh_mail) values(".$lid.",'".$bagsh_ovog." ".$bagsh_ner."','".$title."','".$detail."','"
.$ognoo."','".$zurag."','".$bagsh_mail."')");

echo "<script>location.replace('lesson-more.php?lid=".$lid."');</script>";
 }



?>