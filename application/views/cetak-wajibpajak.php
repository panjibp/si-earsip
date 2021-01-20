<!DOCTYPE html>
<html>
<head>
	<title>Laporan_Wajib_Pajak.pdf</title>
</head>
<body>

<table border="0" cellspasing=0 cellpadding=0 width="100%">
	<tr>
      <td width="25%" align="center"><img src="<?= base_url('picture/logo.png') ?>" height="90px"></td>
      <td width="50%" align="center" style="font-family: Arial;">
      <p style="text-align: center; line-height: 1.3;">
        <span><b>PEMERINTAH KABUPATEN TANGERANG<br>
        KECAMATAN CURUG<br></b></span>
        Jl. Raya Curug No.57, Suka Bakti, Kec. Curug, Tangerang, Banten 15810
      </p>
      </td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><strong><hr></strong></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <p>
        	<b>DATA ARSIP WAJIB PAJAK</b>
        	<br>
        </p>
      </td>
    </tr>
	<table border="1" style="border-collapse: collapse; width: 100%">
	    <thead>
	        <tr>
	        <th style="text-align: center; width:10px;">No.</th>
	        <th style="text-align: center;">Nomor Polisi</th>
	        <th style="text-align: center;">Nama</th>
	        <th style="text-align: center;">Alamat</th>
	        <th style="text-align: center;">ID Wajib Pajak</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php $no=1;
	        foreach ($wajibpajak as $wp) { ?>
	            <tr>
	                <td style="text-align: center;"><?= $no++; ?></td>
	                <td style="text-align: center;"><?= $wp->nomor_polisi ?></td>
	                <td style="text-align: center;"><?= $wp->nama ?></td>
	                <td style="text-align: center;"><?= $wp->alamat ?></td>
	                <td style="text-align: center;"><?= $wp->id_wajibpajak ?></td>
	            </tr>
	        <?php } ?>
	    </tbody>
    </table>
</table>

    <script>
    	window.print();
    </script>

</body>
</html>