<?php if(!isset($_SESSION['loggedin'])){
   echo "<script>location.replace('index.php')</script>";
}
?>

<div align="center" style="margin: auto; padding:2px; border: 0px dashed white; width: 300px;"> 
<a href="http://babiga.tumblr.com"><img src='assets/images/banner.png'/></a>

<div align="center" style="width: 140px;"><span style="color:#000000">    
    <b><div align="center"><script language="javascript">  
/// Huree ICT  
function cdtime(container, targetdate){    
    if (!document.getElementById || !document.getElementById(container)) return    
    this.container=document.getElementById(container)    
    this.currentTime=new Date()    
    this.targetdate=new Date(targetdate)    
    this.timesup=false    
    this.updateTime()    
    }    
    cdtime.prototype.updateTime=function(){    
    var thisobj=this    
    this.currentTime.setSeconds(this.currentTime.getSeconds()+1)    
    setTimeout(function(){thisobj.updateTime()}, 1000)    
    }    
    cdtime.prototype.displaycountdown=function(baseunit, functionref){    
    this.baseunit=baseunit    
    this.formatresults=functionref    
    this.showresults()    
    }    
    cdtime.prototype.showresults=function(){    
    var thisobj=this    
    var timediff=(this.targetdate-this.currentTime)/1000    
    if (timediff<0){    
    this.timesup=true    
    this.container.innerHTML=this.formatresults()    
    return    
    }    
    var oneMinute=60    
    var oneHour=60*60    
    var oneDay=60*60*24    
    var dayfield=Math.floor(timediff/oneDay)    
    var hourfield=Math.floor((timediff-dayfield*oneDay)/oneHour)    
    var minutefield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour)/oneMinute)    
    var secondfield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour-minutefield*oneMinute))    
    if (this.baseunit=="hours"){    
    hourfield=dayfield*24+hourfield    
    dayfield="n/a"    
    }    
    else if (this.baseunit=="minutes"){    
    minutefield=dayfield*24*60+hourfield*60+minutefield    
    dayfield=hourfield="n/a"    
    }    
    else if (this.baseunit=="seconds"){    
    var secondfield=timediff    
    dayfield=hourfield=minutefield="n/a"    
    }    
    this.container.innerHTML=this.formatresults(dayfield, hourfield, minutefield, secondfield)    
    setTimeout(function(){thisobj.showresults()}, 1000)    
    }    
    function formatresults2(){    
    if (this.timesup==false){    
    var displaystring="<span class='nonewyear'>"+arguments[0]+" өдөр "+arguments[1]+" цаг<br>"+arguments[2]+" минут "+arguments[3]+" секунд</span> "    
    }    
    else{    
    var displaystring="<span class='newyear1'>Шинэ Жилийн Баярын Мэнд Хүргэе!!!</span>"    
    //alert("Шинэ Жилийн Баярын Мэнд Хүргэе!!!")    
    }    
    return displaystring    
    }    
    </script>    
    <div id="countdowncontainer2"></div>    
    <script type="text/javascript">    
    var currentyear=new Date().getFullYear()    
    var thischristmasyear=(new Date().getMonth()==0 && new Date().getDate()==1)? currentyear : currentyear + 1    
    var christmas=new cdtime("countdowncontainer2", "january 1, "+thischristmasyear+" 0:0:00")    
    christmas.displaycountdown("days", formatresults2)    
</script></div></b></span></div></div>
