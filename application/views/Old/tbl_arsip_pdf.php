<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_arsip List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Surat</th>
		<th>Tanggal Surat</th>
		<th>Tanggal Diterima</th>
		<th>Perihal</th>
		<th>Id Departemen</th>
		<th>Id Pengirim</th>
		<th>File</th>
		<th>Jenis Surat</th>
		
            </tr><?php
            foreach ($surat_data as $surat)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat->no_surat ?></td>
		      <td><?php echo $surat->tanggal_surat ?></td>
		      <td><?php echo $surat->tanggal_diterima ?></td>
		      <td><?php echo $surat->perihal ?></td>
		      <td><?php echo $surat->id_departemen ?></td>
		      <td><?php echo $surat->id_pengirim ?></td>
		      <td><?php echo $surat->file ?></td>
		      <td><?php echo $surat->jenis_surat ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>