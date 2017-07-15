<!DOCTYPE html>
<html>
<head>
	<title>Ezodiak</title>
<script>
	$.ajax({
		url = "https://api.instagram.com/v1/users/self/media/recent/",
		datatype = "jsonp",
		type = "GET",
		data = {access_token: token, count: jumlah},
		success: function (data)
		{
			for ( x in data.data )
			{
				$("ul").append("<li> <a href = '"+ data.data[x].link +"' > </a> <img src = '"+ data.data[x].images.low_resolution.url +"' > </li>")
			}
		}
	});
</script>
</head>
<body>

<ul></ul>>

</body>
</html>
