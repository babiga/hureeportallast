
<style>
.alert {
  margin-bottom: 0px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>



<div class="alert" style = "margin-bottom: 0rem;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Анхаар!</strong> <?php echo $email." мейлтэй багш өмнө нь бүртгэгдсэн байна."; ?>
</div>

