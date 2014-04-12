<!DOCTYPE HTML>

<!--
browser/anyterm.html
This file is part of Anyterm; see http://anyterm.org/
(coffee) 2005-2007 Philip Endecott

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
-->

<html>
<head>
<title>Anyterm</title>

<script type="text/javascript" src="anyterm.js">
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
</script>

<script type="text/javascript">
  // To create the terminal, just call create_term.  The paramters are:
  //  - The id of a <div> element that will become the terminal.
  //  - The title.  %h and %v expand to the hostname and Anyterm version.
  //  - The number of rows and columns.
  //  - An optional parameter which is substituted for %p in the command string.
  //  - An optional character set.
  //  - An option number of lines of scrollback (default 0).
  window.onload=function() {create_term("term","%h (Anyterm%v)",25,80,"ls","",50);};

  // When the user closes the terminal, by default they'll see a blank page.
  // Generally you'll want to be more friendly than that.  If you set the
  // variable on_close_goto_url to a URL, they'll be sent to that page after
  // closing.  You could send them back to your home page, or something.
  var on_close_goto_url = "155.42.107.197";

</script>

<link rel="stylesheet" type="text/css" href="anyterm.css">
<script>
$(document).ready(funtion(){
   $("#show").click(function(){
      $("#pod1dev").toggle();
112 lines yanked                                                                                                                           1,1           Top
[3:55:03 PM] harliss.fortin: <!DOCTYPE HTML>

<!--
browser/anyterm.html
This file is part of Anyterm; see http://anyterm.org/
(coffee) 2005-2007 Philip Endecott

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
-->

<html>
<head>
<title>Anyterm</title>

<script type="text/javascript" src="anyterm.js">
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
</script>

<script type="text/javascript">
  // To create the terminal, just call create_term.  The paramters are:
  //  - The id of a <div> element that will become the terminal.
  //  - The title.  %h and %v expand to the hostname and Anyterm version.
  //  - The number of rows and columns.
  //  - An optional parameter which is substituted for %p in the command string.
  //  - An optional character set.
  //  - An option number of lines of scrollback (default 0).
  window.onload=function() {create_term("term","%h (Anyterm%v)",25,80,"ls","",50);};

  // When the user closes the terminal, by default they'll see a blank page.
  // Generally you'll want to be more friendly than that.  If you set the
  // variable on_close_goto_url to a URL, they'll be sent to that page after
  // closing.  You could send them back to your home page, or something.
  var on_close_goto_url = "155.42.107.197";

</script>

<link rel="stylesheet" type="text/css" href="anyterm.css">
<script>
$(document).ready(funtion(){
   $("#show").click(function(){
      $("#pod1dev").toggle();
   });
});
</script>

</head>

<body>

<noscript>Javascript is essential for this page.  Please use a browser 
that supports Javascript.</noscript>

<script>
// Check browser support
if (typeof(Storage) != "undefined")
  {
  // Retrieve
  document.getElementById("result1").innerHTML=localStorage.getItem("device");
  //document.getElementById("result2").innerHTML=localStorage.getItem("device");
  //document.getElementById("result1").innerHTML=localStorage.getItem("lastname");
  }
else
  {
  document.getElementById("result").innerHTML="Sorry, your browser does not support Web Storage...";
  }
</script>
<div id="term"></div>
<script>
function device1(){
var d1 ="telnet 192.168.1.1 \n";
process_key(d1);
}
function device2(){
var d2 ="telnet 192.168.1.2 \n";
process_key(d2);
}
function device3(){
var d3 ="telnet 192.168.1.3 \n";
process_key(d3);
}


function quitT(){
var quiT =17+"] \n";
process_key(quiT);
var logOut="quit \n";
process_key(logOut);
}

</script>
<button id="show">show pod1</button>
<div id="pod1dev">
<button id="device" type="button" onclick="device1()">Device 1</button>
<button id="device" type="button" onclick="device2()">Device 2</button>
<button id="device" type="button" onclick="device3()">Device 3</button>
<button type="button" onclick="quitT()">Quit</button>
</div>

</body>
</html>