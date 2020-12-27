<?php if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
} ?>

<form class="md-float-material" action="" method="post">
                            <div class="auth-box">
                                
                            
                               
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Нууц үг" name="password" required oninvalid="this.setCustomValidity('Нууц үгээ оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button style = "background-color: #FF5370; border-color: #FF5370;"type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name = "agree" value = "agree">Устгах</button>
                                        
                                    </div>
                                </div>
                              
                            

                            </div>
                        </form>

                        <?php require_once "config/database.php"; 
$db = new database();

if(isset($_POST['agree']))
 {
$password= $_POST['password'];
$user = $db->data_print("select b_pass from bagsh where b_mail='".$_SESSION['bagsh']."' and b_pass='".$password."'");

if (is_array($user) || is_object($user)) {

foreach($user as $u) {
    if ($u['b_pass'] == $password) {
        
       
       $_SESSION['agreed'] = true;
      
    } 
}

 } else {
    include_once 'wrong-pass.php';
}

}