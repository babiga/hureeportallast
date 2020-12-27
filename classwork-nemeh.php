<?php

if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
} else {require_once 'config/registering.php';}

 ?>

<form class="md-float-material" action="" method="post" enctype="multipart/form-data">
                           
                            <div class="auth-box">
                                <h6 class = "text-center"> Ангийн ажил нэмэх </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Гарчиг" name="title" required oninvalid="this.setCustomValidity('Гарчиг оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group" >
                                    <input type="text" class="form-control" placeholder="Тайлбар" name="detail" required oninvalid="this.setCustomValidity('Өгөгдөл оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="zurag" class="form-control" placeholder="Зураг" onfocus="(this.type='file')">
                                    <span class="md-line"></span>
                                </div>
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button style="background-color : #93BE52; border-radius:5px; border-color:#93BE52;" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name = "classwork-nemeh" value = "classwork-nemeh">Нэмэх</button>
                                    
                                    </div>
                                </div>
                              
                            

                            </div>
                        </form>