<!DOCTYPE html>
<html>
<head>
	<title>Ezodiak</title>
<script>
var jumlah = 10;
var access_token = "4fad4afac5714459856607a646d61e64";
	// $.ajax({
	// 	url = "https://api.instagram.com/v1/users/self/media/recent/",
	// 	datatype = "jsonp",
	// 	type = "GET",
	// 	data = "access_token="+token+"&count="+jumlah,
	// 	success: function(data)
	// 	{
	// 		for ( x in data.data )
	// 		{
	// 			$("ul").append("<li> <a href = '"+ data.data[x].link +"' > </a> <img src = '"+ data.data[x].images.low_resolution.url +"' > </li>")
	// 		}
	// 	},
	// 	error: function(data)
	// 	{
	// 		console.log(data);
	// 	}
	// });
                    
function loadDoc() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "https://api.instagram.com/v1/users/self/media/recent/access_token=4fad4afac5714459856607a646d61e64", true);
  xhttp.send();
}


</script>
</head>
<body>
<button type="button" onclick="loadDoc()">Change Content</button>
<p id="demo">Let AJAX change this text.</p>
<ul></ul>>

<script type="text/javascript" src="http://localhost/kampus/assets/jquery/a.js"></script>
<script src=" http://localhost/kampus/assets/jquery/jquery-2.1.1.js"></script>

</body>
</html>
