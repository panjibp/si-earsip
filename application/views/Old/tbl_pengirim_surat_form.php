<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>

                    <h3 class='box-title'>FORM DATA PENGIRIM</h3>
                    <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
                                <tr><td WIDTH="140">Nama Pengirim <?php echo form_error('nama_pengirim') ?></td>
                                    <td><input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Pengirim" value="<?php echo $nama_pengirim; ?>" />
                                    </td>
                                <tr><td>Alamat <?php echo form_error('alamat') ?></td>
                                    <td><textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                                    </td></tr>
                                <tr><td>No Hp <?php echo form_error('no_hp') ?></td>
                                    <td><input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
                                    </td>
                                <tr><td>Email <?php echo form_error('email') ?></td>
                                    <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                                    </td>
                                <input type="hidden" name="id_pengirim" value="<?php echo $id_pengirim; ?>" /> 
                                <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                        <a href="<?php echo site_url('pengirim') ?>" class="btn btn-default">Cancel</a></td></tr>

                            </table></form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content -->