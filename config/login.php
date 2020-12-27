<?php require_once "config/database.php"; 
$db = new database();

if(isset($_POST['login']))
 {

$id = strtoupper($_POST['sid']);
$password= $_POST['password'];
$user = $db->data_print("select id,s_pass from student where id='".$id."' and s_pass='".$password."'");

if (is_array($user) || is_object($user)) {

foreach($user as $u) {
    if ($u['id'] == $id && $u['s_pass'] == $password) {
        
        session_start();
       $_SESSION['student-loggedin'] = true;
       $_SESSION['loggedin'] = true;
       $_SESSION['student'] = $id;
        header('location: student.php');
        
    } 
}

 } else {
    include_once 'warning.php';
}

}


//////////////////////////


if(isset($_POST['bagsh-login']))
 {

$mail = $_POST['teachermail'];
$password= $_POST['teacherpass'];
$user = $db->data_print("select ner,ovog,b_mail,b_pass from bagsh where b_mail='".$mail."' and b_pass='".$password."'");

if (is_array($user) || is_object($user)) {

foreach($user as $u) {
    if ($u['b_mail'] == $mail && $u['b_pass'] == $password) {
        
        session_start();
       $_SESSION['bagsh-loggedin'] = true;
       $_SESSION['loggedin'] = true;
       $_SESSION['bagsh'] = $mail;
       $_SESSION['bagsh-ner'] = $u['ner'];
       $_SESSION['bagsh-ovog'] = $u['ovog'];
        header('location: teacher.php');
        
    } 
}

 } else {
    include_once 'warning.php';
}

}
?>