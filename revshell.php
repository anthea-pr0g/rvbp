<!-- Include Head -->
<?php include "assest/head.php"; ?>

<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}

.vertical-menu {
  width: 200px;
  height: 200px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

.float-container {
    border: 3px solid #fff;
    padding: 20px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 20px;
     
}  
</style>
  
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-black w3-hover-black"><b><i class="fa fa-map-marker w3-margin-right"></i>Reverse Shell & Binary Payload Generator</b></a>
  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-black w3-text-black"><i class="fa fa-search"></i></a>
  



<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>
 

<hr>
<br>


<div class="w3-row-padding">

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-indigo">
    <h3>IP address & Port</h3>
  </div>
  <div class="w3-container">
 
  </div>
  <ul class="w3-ul w3-border-top">
    <li>
      
      <script>
      var ip=document.createElement("ip");
      </script>
      
        <form>
  <label for="ip">IP address:</label> 
<input type="text" name="ip" id="ip" value="value"<br>
  
  <h1>    </h1>
  <label for="port">Port:</label> 
  <input type="text" id="port" name="port">
</form>

      <p> </p>
    
  </ul>
  <div class="w3-container w3-indigo w3-large"><span class="w3-right"> </span></div>
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-theme">
    <h3>Listener</h3>
  </div>
  <div class="w3-container">
  <h3 class="w3-text-theme">    
  
    <label for="type">Type:</label>

<select name="type" id="type">


  <option value="nc">nc</option>
  <option value="ncat">ncat</option>
  <option value="ncattls">ncat (TLS)</option>
  <option value="rl">rlwrap + nc</option>
 <option value="rust">rustcat</option>
  <option value="rustandcomm">rustcat + Command History</option>
   <option value="pwn">pwncat</option>
    <option value="windows">windows ConPty</option>
     <option value="socat">socat</option>
      <option value="socattty">socat (TTY)</option>
       <option value="power ">powercat</option>
        <option value="msf">msfconsole</option>
</select>
 

   <div class="w3-container">
  <h3 class="w3-text-theme">  
  
  <script>
  var ip= document.getElementById("ip").value;
  document.write("nc -lvnp" +" "+ ip);
  </script> 
  
<h1> </h1>
</h3>
  </div>
  <ul class="w3-ul w3-border-top">
   
  </ul>
  <div class="w3-container w3-theme w3-large"><span class="w3-right"> </span></div>
</div>
</div>
</div>
 

</div>
  
<hr>

<div class="w3-border">
<div class="w3-center">
<div class="w3-bar w3-theme">

  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Reverse')">Reverse</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Bind')">Bind</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'MSFVenom')">MSFVenom</button>
  
</div>
</div>

<div id="Reverse" class="w3-container city w3-animate-opacity">
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-theme">OS <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="#" class="w3-bar-item w3-button">All</a>
      <a href="#" class="w3-bar-item w3-button">Linux</a>
      <a href="#" class="w3-bar-item w3-button">Windows</a>
      <a href="#" class="w3-bar-item w3-button">Mac</a>
    </div>
  </div>

<div class="w3-container">
<div class="float-child">

<div class="tab">
  <button class="tablinks" onclick="City(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="City(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="City(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme">   <form>
     <label for="command">Command:</label> 
  <input type="text" id="command" name="command">
  </form>
  </div>
    <div class="w3-container">
  <h3 class="w3-text-theme">    
  
    <label for="shell">shell:</label>

<select name="shell" id="shell">


  <option value="sh">sh</option>
  <option value="/bin/sh">/bin/sh</option>
  <option value="ncattls">ncat (TLS)</option>
  <option value="bash"> bash</option>
 <option value="/bin/bash">/bin/bash</option>
  <option value="cmd">cmd</option>
   <option value="powershell">powershell</option>
    <option value="pwsh">pwsh</option>
     <option value="ash">ash</option>
      <option value="bsh">bsh</option>
       <option value="csh ">csh</option>
        <option value="ksh">ksh</option>
        <option value="zsh">zsh</option>
       <option value="pdksh ">pdksh</option>
        <option value="tcsh">tcsh</option>
</select>
<br>
<br>
<label for="encoding">encoding:</label>
<select name="encoding" id="encoding">


  <option value="none">none</option>
  <option value="url">URL encode</option>
  <option value="double">double URL encode</option>
  <option value="base64"> base64</option>
 
</select>

</div>

<div id="Paris" class="tabcontent">
  
</div>

<div id="Tokyo" class="tabcontent">

</div>
</div>

 
</div>
 </div>
</div>
</div>
 
 

<div id="Bind" class="w3-container city w3-animate-opacity">


<div class="w3-container">
<div class="float-child">

<div class="tab">
  <button class="tablinks" onclick="City(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="City(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="City(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme">   <form>
     <label for="command">Command:</label> 
  <input type="text" id="command" name="command">
  </form>
  </div>
</div>

<div id="Paris" class="tabcontent">
  
</div>

<div id="Tokyo" class="tabcontent">

</div>
</div>

 
</div>
 </div>
</div>
</div>
  
<div id="MSFVenom" class="w3-container city w3-animate-opacity">
 

<div class="w3-container">
<div class="float-child">

<div class="tab">
  <button class="tablinks" onclick="City(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="City(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="City(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme">   <form>
     <label for="command">Command:</label> 
  <input type="text" id="command" name="command">
  </form>
  </div>
</div>

<div id="Paris" class="tabcontent">
  
</div>

<div id="Tokyo" class="tabcontent">

</div>
</div>

 
</div>
 </div>
</div>
</div>


<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
 
 //vert tabs
 function City(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
 
</script>

</body>
</html>
