<?php



if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
} 

 ?>

<form class="md-float-material" action="" method="post">
                           
                            <div class="auth-box">
                                
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Хичээлийн нэр" name="h_ner" required oninvalid="this.setCustomValidity('Хичээлийн нэр оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Кредит" name="kredit" required oninvalid="this.setCustomValidity('Кредит оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button style="background-color : #93BE52; border-radius:5px; border-color:#93BE52;" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name = "hicheel-nemeh" value = "hicheel-nemeh">Нэмэх</button>
                                    
                                    </div>
                                </div>
                              
                            

                            </div>
                        </form>