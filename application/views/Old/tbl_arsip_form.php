<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>

                    <h3 class='box-title'>FORM SURAT</h3>
                    <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <table class='table table-bordered'>
                                <tr><td width="200">No Surat <?php echo form_error('no_surat') ?></td>
                                    <td><input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No Surat" value="<?php echo $no_surat; ?>" />
                                    </td>
                                <tr><td>Tanggal Surat <?php echo form_error('tanggal_surat') ?></td>
                                    <td><input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat" placeholder="Tanggal Surat" value="<?php echo $tanggal_surat; ?>" />
                                    </td>
                                <tr><td>Tanggal Diterima <?php echo form_error('tanggal_diterima') ?></td>
                                    <td><input type="date" class="form-control" name="tanggal_diterima" id="tanggal_diterima" placeholder="Tanggal Diterima" value="<?php echo $tanggal_diterima; ?>" />
                                    </td>
                                <tr><td>Perihal <?php echo form_error('perihal') ?></td>
                                    <td><input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" value="<?php echo $perihal; ?>" />
                                    </td>
                                <tr><td>Departemen <?php echo form_error('id_departemen') ?></td>
                                    <td>
                                        <?php echo cmb_dinamis('id_departemen', 'tbl_departemen', 'nama_departemen', 'id_departemen', $id_departemen) ?>
                                        <!--<input type="text" class="form-control" name="id_departemen" id="id_departemen" placeholder="Id Departemen" value="<?php echo $id_departemen; ?>" />-->
                                    </td>
                                <tr><td>Pengirim <?php echo form_error('id_pengirim') ?></td>
                                    <td>
                                        <?php echo cmb_dinamis('id_pengirim', 'tbl_pengirim_surat', 'nama_pengirim', 'id_pengirim', $id_pengirim) ?>
                                        <!--<input type="text" class="form-control" name="id_pengirim" id="id_pengirim" placeholder="Id Pengirim" value="<?php echo $id_pengirim; ?>" />-->
                                    </td>
                                <tr><td>File <?php echo form_error('file') ?></td>
                                    <td><input type="file" name="file" id="file">
                                    </td></tr>
                                <tr><td>Jenis Surat <?php echo form_error('jenis_surat') ?></td>
                                    <td>
                                        <?php
                                        echo form_dropdown('jenis_surat', array('surat_masuk' => 'SURAT MASUK', 'surat_keluar' => 'SURAT KELUAR'), $jenis_surat, array('class' => 'form-control'));
                                        ?>
                                        <!--<input type="text" class="form-control" name="jenis_surat" id="jenis_surat" placeholder="Jenis Surat" value="<?php echo $jenis_surat; ?>" />-->
                                    </td>
                                <input type="hidden" name="id_arsip" value="<?php echo $id_arsip; ?>" /> 
                                <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                        <a href="<?php echo site_url('surat') ?>" class="btn btn-default">Cancel</a></td></tr>

                            </table></form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content -->