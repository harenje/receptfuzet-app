<!doctype html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <style type="text/css">
   * {
  outline:none;
	border:none;
	margin:0px;
	padding:0px;
	font-family:Courier, monospace;
	
	
}

*:focus{
	outline: 0 !important;
}
body {
	background:#333 url(https://static.tumblr.com/maopbtg/a5emgtoju/inflicted.png) repeat;        
}
#paper {
	color:#FFF;
	font-size:20px;
}
#margin {
	margin-left:12px;
	margin-bottom:20px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none; 
}
#text {
	width:600px;
	overflow:hidden;
	background-color:#FFF;
	color:#222;
	font-family:Courier, monospace;
	font-weight:normal;
	font-size:24px;
	resize:none;
	line-height:40px;
	padding-left:100px;
	padding-right:100px;
	padding-top:45px;
	padding-bottom:34px;
	background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
	background-repeat:repeat-y, repeat;
	-webkit-border-radius:12px;
	border-radius:12px;
	-webkit-box-shadow: 0px 2px 14px #000;
	box-shadow: 0px 2px 14px #000;
	border-top:1px solid #FFF;
	border-bottom:1px solid #FFF;
	
}
#title {
	background-color:transparent;
	border-bottom:3px solid #FFF;
	color:#FFF;
	font-size:20px;
	font-family:Courier, monospace;
	height:28px;
	font-weight:bold;
	width:220px;
}


#gomb{
	display:inline-block;
	padding:0.3em 1.2em;
	margin:0 0.1em 0.1em 0;
	border:0.16em solid rgba(255,255,255,0);
	border-radius:2em;
	box-sizing: border-box;
	text-decoration:none;
	font-family:'Roboto',sans-serif;
	font-weight:300;
	color:#FFFFFF;
	text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
	text-align:center;
	transition: all 0.2s;
	background-color:#7FFFD4;
	
	
}

#gomb:focus{
	box-shadow:none;
}

#gomb:active{
	
	margin: 1px 1px 0;
    box-shadow: -1px -1px 1px #000;

}

}
#button:focus {
	zoom: 1;
	filter: alpha(opacity=80);
	opacity: 0.8;
	outline:none !important;
}
#wrapper {
	width:700px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	margin-top:24px;
	margin-bottom:100px;
	
}


</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


$(document).ready(function(){
  $('#title').focus();
    $('#text').autosize();
});




</script>
</body>
</html>