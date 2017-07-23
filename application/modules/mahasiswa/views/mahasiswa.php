<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"> 
	
  	<style type="text/css">
        #tmahasiswa { text-align: center }
    </style>
    </head>
<body>
<h1>mahasiswa</h1>
<table id="tmahasiswa" width="100%">
	<thead>
	<tr>
		<td id="nim">Nim</td>
		<td id="nama">Nama</td>
		<td id="id_jurusan">Jurusan</td>
	</tr>	
	</thead>
</table>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>

<?php 
	foreach ($mahasiswa as $dt) {
		echo $dt['nim'];
	}
?>

$(document).ready( function() {
    $('#tmahasiswa').DataTable( {
    	"processing": true
        
    } );
} );



</script>
</body>
</html>