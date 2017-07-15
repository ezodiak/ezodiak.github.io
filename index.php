<!DOCTYPE html>
<html>
<head>
	<title>Ezodiak</title>
<script>
var jumlah = 10;
var token = "4fad4afac5714459856607a646d61e64";
	$.ajax({
		url = "https://api.instagram.com/v1/users/self/media/recent/",
		datatype = "jsonp",
		type = "GET",
		data = {access_token: token, count: jumlah},
		success: function(data)
		{
			for ( x in data.data )
			{
				$("ul").append("<li> <a href = '"+ data.data[x].link +"' > </a> <img src = '"+ data.data[x].images.low_resolution.url +"' > </li>")
			}
		},
		error: function(data)
		{
			console.log(data);
		}
	});
</script>
</head>
<body>

<ul></ul>>

<script type="text/javascript" src="http://localhost/kampus/assets/jquery/a.js"></script>
<script src=" http://localhost/kampus/assets/jquery/jquery-2.1.1.js"></script>

</body>
</html>
