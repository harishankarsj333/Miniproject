<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Checkbox Fun</title>
<script type="text/javascript"><!--
 
var formblock;
var forminputs;
 
function prepare() {
  formblock= document.getElementById('form_id');
  forminputs = formblock.getElementsByTagName('input');
}
 
function select_all(name, value) {
  for (i = 0; i < forminputs.length; i++) {
    // regex here to check name attribute
    var regex = new RegExp(name, "i");
    if (regex.test(forminputs[i].getAttribute('name'))) {
      if (value == '1') {
        forminputs[i].checked = true;
      } else {
        forminputs[i].checked = false;
  }
    }
  }
}
 
if (window.addEventListener) {
  window.addEventListener("load", prepare, false);
} else if (window.attachEvent) {
  window.attachEvent("onload", prepare)
} else if (document.getElementById) {
  window.onload = prepare;
}
 
//--></script>
</head>
 
<body>
 
<form id="form_id" name="myform" method="get" action="search.php">
 
  <a href="#" onClick="select_all('area', '1');">Check All Fruit</a> | <a href="#" onClick="select_all('area', '0');">Uncheck All 
Fruit</a><br><br>
 
  <input type="checkbox" name="area[]" value="1" />Apples<br />
  <input type="checkbox" name="area[]" value="2" />Bananas<br />
  <input type="checkbox" name="area[]" value="3" />Chickens<br />
  <input type="checkbox" name="area[]" value="4" />Stoats
 
  <br><br><a href="#" onClick="select_all('location', '1');">Check All Locations</a> | <a href="#" onClick="select_all('location', 
'0');">Uncheck All Locations</a><br><br>
 
  <input type="checkbox" name="location[]" value="1" />Brighton<br />
  <input type="checkbox" name="location[]" value="2" />Hove<br />
 
</form>
 
</body>
</html