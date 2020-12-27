<?php if(!isset($_SESSION['loggedin'])){
   echo "<script>location.replace('index.php')</script>";
}
?>

<li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Мэдэгдэл</h6>
                                        <label class="label label-danger">Шинэ</label>
                                    </li>

                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/auth/logo-small-bottom.png" alt="Huree ICT">
                                            <div class="media-body">
                                                <h5 class="notification-user">Сургуулийн захиргаа</h5>
                                                <p class="notification-msg">Нийт оюутан сурагч болон багш ажилчиддаа Шинэ Жилийн Баярын мэнд хүргэж байна.</p>
                                                <span class="notification-time">12 сарын 31</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/auth/logo-small-bottom.png" alt="Huree ICT">
                                            <div class="media-body">
                                                <h5 class="notification-user">Сургуулийн захиргаа</h5>
                                                <p class="notification-msg">Шинэ төрлийн коронавирус Монгол улсад тархсантай холбоотойгоор бүх хичээл цахим хэлбэрээр 
                                                орох болсныг мэдэгдье.</p>
                                                <span class="notification-time">11 сарын 30</span>
                                            </div>
                                        </div>
                                    </li>

                                    

                                    
                                </ul>
                            </li>