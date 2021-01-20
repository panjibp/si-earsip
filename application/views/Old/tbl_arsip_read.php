
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tbl_arsip Read</h3>
        <table class="table table-bordered">
	    <tr><td>No Surat</td><td><?php echo $no_surat; ?></td></tr>
	    <tr><td>Tanggal Surat</td><td><?php echo $tanggal_surat; ?></td></tr>
	    <tr><td>Tanggal Diterima</td><td><?php echo $tanggal_diterima; ?></td></tr>
	    <tr><td>Perihal</td><td><?php echo $perihal; ?></td></tr>
	    <tr><td>Id Departemen</td><td><?php echo $id_departemen; ?></td></tr>
	    <tr><td>Id Pengirim</td><td><?php echo $id_pengirim; ?></td></tr>
	    <tr><td>File</td><td><?php echo $file; ?></td></tr>
	    <tr><td>Jenis Surat</td><td><?php echo $jenis_surat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->