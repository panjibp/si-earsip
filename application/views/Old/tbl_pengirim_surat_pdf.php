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
        <h2>Tbl_pengirim_surat List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pengirim</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Email</th>
		
            </tr><?php
            foreach ($pengirim_data as $pengirim)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pengirim->nama_pengirim ?></td>
		      <td><?php echo $pengirim->alamat ?></td>
		      <td><?php echo $pengirim->no_hp ?></td>
		      <td><?php echo $pengirim->email ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>