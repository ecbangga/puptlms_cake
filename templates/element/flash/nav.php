<a href="#" data-activates="slide-out" class="btn btn-dark p-3 button-collapse"><i
    class="fas fa-bars"></i></a>


    <link rel="stylesheet" href="<=base_url()?>public/assets/css/login.css">
<link rel="stylesheet" href="<=base_url()?>public/assets/css/registration.css">
<div id="content1">


<form method="POST" action="">
<div class="dispdate"></div>

<center><h4> Search a Book? <a href =<?=$this->Url->build(['controller'=>'materials','action'=>'index']);?>> Click Here </a></h4> 
<h4> Library Services? <a href = "okLibrary-Services.pdf"> Citizen's Charter </a></h4></center>


<div  style="font-family: century gothic;" >
<input type="text" name="txtuser2" placeholder="USERNAME" class="input" autofocus="true">
<input type="password" name="txtpass2" placeholder="PASSWORD" class="input" >
<input href=<?= $this->Url->build(['controller'=>'home','action'=>'home'])?> type="submit" name=cmd2 value="LOGIN" class="cmd" style = "background-color: #801e1d;">

<br><br><br>
</div>
<center><h4> No Account?<a href = "<= base_url()?>register"> Register Here </a></h4> </center>
<center><h4> Id Scanner<a href = "indexbarcode.php"> Click Here </a></h4> </center>
<center><h4> Visitors?<a href = "<= base_url()?>homevisitor"> Click Here </a></h4> </center>
<center><h4> Faculty?<a href = "<= base_url()?>homefaculty"> Click Here </a></h4> </center>

 <!--<div id="download" onclick="window.location.href='downloadApp.php'">
        <strong><span style="font-family:Arial; font-size:18px;bottom:10px;margin-right:10px;">Download</span></strong>
        <img style="height:80px;width: 250px;margin-left: 5px; vertical-align:middle;" src="images/download1.png">
      </div> -->
</form>
</div>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg"></div>
</div>