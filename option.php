<html>
<head><title>IT Activities</title>
    <link rel="stylesheet" href="style3.css">
      <link rel="icon" href="ita.jpg" type="image/x-icon" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
 background: #e6ffff;
}
.wrapper{
    position: absolute;
    top:50%;
    left:35%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}
.rapper{
 position: absolute;
    top:50%;
    left:65%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}

button{
    width:200px;
    height:70px;
    background: linear-gradient(to left top, #c32c71 50%, #b33771 50%);
    border-style: none;
    color:#fff;
    font-size: 20px;
    letter-spacing: 3px;
    font-family: 'lato';
    font-weight: 600;
    outline: none;
    cursor: pointer;
    position: relative;
    padding: 0px;
    overflow: hidden;
    transition: all .5s;
    box-shadow: 0px 1px 2px rgba(0,0,0,.2);
}
button span{
    position: absolute;
    display: block;
}
button span:nth-child(1){
    height: 3px;
    width:200px;
    top:0px;
    left:-200px;
    background: linear-gradient(to right, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span1 2s linear infinite;
    animation-delay: 1s;
}
@keyframes span1{
    0%{
        left:-200px
    }
    100%{
        left:200px;
    }
}
button span:nth-child(2){
    height: 70px;
    width: 3px;
    top:-70px;
    right:0px;
    background: linear-gradient(to bottom, rgba(0,0,0,0), #f6e58d);
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span2 2s linear infinite;
    animation-delay: 2s;
}
@keyframes span2{
    0%{
        top:-70px;
    }
    100%{
        top:70px;
    }
}
button span:nth-child(3){
    height:3px;
    width:200px;
    right:-200px;
    bottom: 0px;
    background: linear-gradient(to left, rgba(0,0,0,0), #f6e58d);
    border-top-left-radius: 1px;
    border-bottom-left-radius: 1px;
    animation: span3 2s linear infinite;
    animation-delay: 3s;
}
@keyframes span3{
    0%{
        right:-200px;
    }
    100%{
        right: 200px;
    }
}

button span:nth-child(4){
    height:70px;
    width:3px;
    bottom:-70px;
    left:0px;
    background: linear-gradient(to top, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-top-left-radius: 1px;
    animation: span4 2s linear infinite;
    animation-delay: 4s;
}
@keyframes span4{
    0%{
        bottom: -70px;
    }
    100%{
        bottom:70px;
    }
}

button:hover{
    transition: all .5s;
    transform: rotate(-3deg) scale(1.1);
    box-shadow: 0px 3px 5px rgba(0,0,0,.4);
}
button:hover span{
    animation-play-state: paused;
}

.co{
    position: absolute;
    left:8%;
    top:30%;
    font-size:25px;
}

.extra{
    position: absolute;
    right:8%;
    top:30%;
     font-size:25px;

}
li{
    font-size:20px;
}
</style>
<body>
    <nav>
     
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="home.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a  href="adminlogin.php">Admin</a></li>
        <li><a href="signout.php">Sign Out</a></li>
      </ul>
    </nav> 
    <div class="w3-sidebar w3-light-blue w3-bar-block" style="width:17%"> 
    <h3 class="w3-bar-item"><b>Co-curricular</b></h3>

        <li style='margin-left:10px'>Mutex-Technical</li><br>
        <li  style='margin-left:10px'>PDA Coding</li><br>
        <li  style='margin-left:10px'>Samhita</li><br>
        <li  style='margin-left:10px'>ITA Coding Contest</li><br>
        <li  style='margin-left:10px'>MITRA Workshop</li><br>
        <li  style='margin-left:10px'>ENIGMA</li><br>
        <li  style='margin-left:10px'>CSMIT</li><br>

    </div>
<div class="wrapper">
  <button name="ca" onclick="window.open('coform.php','_self')">Co-Curricular activity
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
&nbsp 
<div class="rapper">
  <button name="ex"  onclick="window.open('extracur.php','_self')">Extra-curricular activity
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>

</div>
<div class="w3-sidebar w3-light-blue w3-bar-block" style="width:17%;right:0;margin-top:-22"> 
<h3 class="w3-bar-item"><b>Extra-curricular</b></h3>
        <li style='margin-left:10px'>Tamil mandram</li><br>
        <li style='margin-left:10px'>Spontania</li><br>
        <li style='margin-left:10px'>MIT Quill Debate</li><br>
        <li style='margin-left:10px'>NSS</li><br>
        <li style='margin-left:10px'>NSO</li><br>
        <li style='margin-left:10px'>NCC</li><br>
        <li style='margin-left:10px'>YRC</li><br>
        <li style='margin-left:10px'>PDA Aptitude</li><br>
        <li style='margin-left:10px'>Mutex-Non Technical</li><br>
    </div>



</body>
</html>