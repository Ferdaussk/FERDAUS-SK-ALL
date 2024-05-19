<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferdaus sk a web developer from Best WP Developer</title>
    <script>
    function showUser(str) {
    if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
    }
    </script>
</head>
<body>

    <form>
    <select name="users" onchange="showUser(this.value)">
    <option value="">Select a person:</option>
    <option value="1">Peter Griffin</option>
    <option value="2">Lois Griffin</option>
    <option value="3">Joseph Swanson</option>
    <option value="4">Glenn Quagmire</option>
    </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>