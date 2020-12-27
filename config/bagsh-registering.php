<?php require_once "config/database.php"; 
$db = new database();

if(isset($_POST['bagsh-register']))
 {

$ner = ucfirst($_POST['ner']);
$ovog = ucfirst($_POST['ovog']);
$email = strtolower($_POST['email']);
$zurag = addslashes(file_get_contents($_FILES['zurag']['tmp_name']));
$pass = $_POST['password'];
$utas = $_POST['utas'];

$check = $db->data_print("select b_mail from bagsh where b_mail='".$email."'");
if ($check->num_rows){
    include_once 'already-exist-bagsh.php';
} else {
$user = $db->data_insert("insert into bagsh(ner,ovog,b_utas,b_mail,b_pass,zurag) values('".$ner."','".$ovog."','".$utas."','".$email."','".$pass."','".$zurag."')");
$_SESSION["registered"] = true;


 echo "<script>location.replace('teacher-login.php')</script>";
}
 }

?>