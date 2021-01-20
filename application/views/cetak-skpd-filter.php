<!DOCTYPE html>
<html>
<head>
	<title>Laporan_SKPD.php</title>
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
        	<b>DATA ARSIP SKPD</b>
        	<br>
        </p>
      </td>
    </tr>
	<table border="1" style="border-collapse: collapse; width: 100%">
	    <thead>
            <tr>
            <!-- <th style="text-align: center; width:20px;">No.</th> -->
            <th style="text-align: center;">ID Numerator</th>
            <th style="text-align: center;">Numerator</th>
            <th style="text-align: center;">Tgl. Daftar</th>
            <th style="text-align: center;">No. Polisi</th>
            <th style="text-align: center;">Jenis/Model</th>
            <th style="text-align: center;">Tahun</th>
            <th style="text-align: center;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach ($datafilter as $s) { ?>
                <tr>
                    <td style="text-align: center;"><?= $s->id_numerator ?></td>
                    <td style="text-align: center;"><?= $s->numerator ?></td>

                    <?php
                    $currDate = $s->tgl_daftar;
                    $changeDate = date("d-m-Y", strtotime($currDate));
                    ?>
                    <td style="text-align: center;"><?= $changeDate ?></td>
                    
                    <td style="text-align: center;"><?= $s->no_polisi ?></td>
                    <td style="text-align: center;"><?= $s->jenis_model ?></td>
                    <td style="text-align: center;"><?= $s->tahun ?></td>
                    <td style="text-align: center;"><?= $s->keterangan ?></td>
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