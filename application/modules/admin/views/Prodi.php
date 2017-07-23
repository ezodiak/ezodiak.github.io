<section>
	<div align="center" > <?php echo anchor(" ", "Tambah Data"); ?>
	<table style="padding: 20px;" border="1" id="tabel_prodi">
	<thead>
		<tr>
			<td>No</td>
			<td>Kode</td>
			<td>Fakultas</td>
			<td>Jurusan</td>
			<td>P. Studi</td>
			<td>status</td>
			<td>Aksi</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; foreach ($prodi as $x) { ?>
		<tr>
			<td> <?php echo $no++?> </td>
			<td> <?php echo $x->kode ?> </td>
			<td> <?php echo $x->fakultas ?> </td>
			<td> <?php echo $x->jurusan ?> </td>
			<td> <?php echo $x->pstudi ?> </td>
			<td> <?php echo $x->status ?> </td>
			<td> <?php echo anchor("Mahasiswa/Form_Edit_Mahasiswa/".$x->kode, "Edit")?> </td>
			<td> <?php echo anchor("Mahasiswa/Aksi_Hapus_Mahasiswa/".$x->kode, "Hapus")?> </td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
	</div>
</section>
 
		<script type="text/javascript" charset="utf8" src="http://localhost/sikpta/assets/media/js/jquery.dataTables.js"></script>
    	<link rel="stylesheet" type="text/css" href="http://localhost/sikpta/assets/media/css/jquery.dataTables.css">
    	<script>
			$(document).ready( function () {
				$('#tabel_prodi').DataTable({
					"aaSorting" : [ [1, 'desc'], [4, 'desc']]
			});
			});
		</script>