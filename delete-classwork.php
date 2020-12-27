<?php if(!isset($_SESSION['bagsh-loggedin'])){
    echo "<script>location.replace('teacher-login.php')</script>";
} ?>

<a href = "?lid=<?php echo $lid; ?>&delete-classwork=true&work_id=<?php echo $w['work_id'];?>" class = "label bg-c-green m-l-10 f-10" style="background-color: #FF5370; float: right;">Устгах</a>
