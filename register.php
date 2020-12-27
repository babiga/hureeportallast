<!DOCTYPE html>
<html lang="en">
<?php require_once 'config/registering.php'; ?>
<head>
    <title>Хүрээ МХТДС - Бүртгүүлэх</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        
                        <form class="md-float-material" action = "" method = "post" enctype="multipart/form-data">
                            <div class="text-center">
                                <img src="assets/images/auth/logo-dark.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Оюутан бүртгүүлэх хуудас</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="id" class="form-control" placeholder="Оюутны код" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Имейл хаяг" required oninvalid="this.setCustomValidity('Зөв имэйл оруулна уу')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Нууц үг" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="ner" class="form-control" placeholder="Нэр" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="ovog" class="form-control" placeholder="Овог" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="ognoo" class="form-control" placeholder="Төрсөн огноо" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')" onfocus="(this.type='date')">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <select name="tenhim" id="dep" class="form-control" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
						<option value="Хоосон">Тэнхим</option>
						<option value="CS">CS</option>
						<option value="SS">SS</option>
						<option value="SE">SE</option>
						<option value="MM">MM</option>
						<option value="KL">KL</option>
						<option value="EL">EL</option>
						<option value="IB">IB</option>
					</select>
                                </div>
                                <div class="input-group">
                                    <select name="kurs" id="kurs" class="form-control" required oninvalid="this.setCustomValidity('Заавал мэдээлэл оруулах шаардлагатай')"
 oninput="setCustomValidity('')">
						<option value="0">Курс</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
                                </div>

                                <div class="input-group">
                                    <input type="text" name="zurag" class="form-control" placeholder="Цээж зураг" required oninvalid="this.setCustomValidity('Цээж зургаа оруулна уу')"
 oninput="setCustomValidity('')" onfocus="(this.type='file')">
                                    <span class="md-line"></span>
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="terms" value="agreed" required>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Би Хүрээ МХТДС портал вебийн <a href="#">Дүрэм &amp; журмыг </a> зөвшөөрч байна.</span>
                                            </label>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name = "register">Бүртгүүлэх</button>
                                    </div>
                             
                            </div>

                        <label style="color: blue;" for="reset">Арилгах</label>
                        <input type="reset" id="reset" style="display: none;">
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
	
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
