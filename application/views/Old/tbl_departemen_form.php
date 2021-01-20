<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>FORM DATA DEPARTEMEN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama Departemen <?php echo form_error('nama_departemen') ?></td>
            <td><input type="text" class="form-control" name="nama_departemen" id="nama_departemen" placeholder="Nama Departemen" value="<?php echo $nama_departemen; ?>" />
        </td>
	    <input type="hidden" name="id_departemen" value="<?php echo $id_departemen; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('departemen') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->