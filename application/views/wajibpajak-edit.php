<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Edit Data Wajib Pajak</h3>
            <div class='box'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="col-lg-6">
                    <?php foreach($wajibpajak as $wp) {
                        $id = $wp->id;
                        $nomor_polisi = $wp->nomor_polisi;
                        $nama = $wp->nama;
                        $alamat = $wp->alamat;
                        $id_wajibpajak = $wp->id_wajibpajak;
                    } ?>

                    <?= form_open_multipart('main/proseseditwajibpajak');?>

                        <div class="form-group">
                        <label for="nomor_polisi">Nomor Polisi</label>
                        <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" value="<?= $nomor_polisi ?>" required="">
                        </div>

                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required="">
                        </div>

                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>" required="">
                        </div>

                        <div class="form-group">
                        <label for="id_wajibpajak">ID Wajib Pajak</label>
                        <input type="text" class="form-control" id="id_wajibpajak" name="id_wajibpajak" value="<?= $id_wajibpajak ?>" required="">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                        <a href="<?= base_url('main/wajibpajak') ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
                    </form>

                <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                <script type="text/javascript">
                $(document).ready(function () {
                $("#mytable").dataTable();
                });
                </script>
                </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->