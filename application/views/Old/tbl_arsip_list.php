
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DATA SURAT<br><br> <?php echo anchor('surat/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<!-- <?php echo anchor(site_url('surat/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?> --></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="10px">No</th>
		    <th>No Surat</th>
		    <th>Tanggal Surat</th>
		    <th>Tanggal Diterima</th>
		    <th>Perihal</th>
		    <th>Departemen</th>
		    <th>Pengirim</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($surat_data as $surat)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $surat->no_surat ?></td>
		    <td><?php echo $surat->tanggal_surat ?></td>
		    <td><?php echo $surat->tanggal_diterima ?></td>
		    <td><?php echo $surat->perihal ?></td>
		    <td><?php echo $surat->nama_departemen ?></td>
		    <td><?php echo $surat->nama_pengirim ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(base_url('uploads/'.$surat->file),'<i class="fa fa-cloud-download"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm','target'=>'new')); 
			echo '  '; 
			echo anchor(site_url('surat/update/'.$surat->id_arsip),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('surat/delete/'.$surat->id_arsip),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->