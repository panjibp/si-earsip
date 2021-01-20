<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Tambah Data SKPD</h3>
            <div class='box'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="col-lg-12">
                    <?= form_open_multipart('main/prosessimpanskpd');?>

                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="id_numerator">ID Numerator</label>
                            <input type="text" class="form-control" id="id_numerator" name="id_numerator" required="">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="numerator">Numerator</label>
                            <input type="text" class="form-control" id="numerator" name="numerator" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="tgl_daftar">Tgl. Daftar</label>
                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" required="">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="no_polisi">No. Polisi</label>
                            <input type="text" class="form-control" id="no_polisi" name="no_polisi" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                            <label>Jenis/Model</label>
                            <select class="form-control" name="jenis_model">
                                <option selected="" disabled="" hidden="">Pilih jenis/model</option>
                                <option>Kendaraan Berat</option>
                                <option>Kendaraan Ringan</option>
                            </select>
                            </div>

                            <div class="form-group col-md-6">
                            <?php $years = range(1950, strftime("%Y", time()));
                            rsort($years);
                            ?>
                            <label>Tahun</label>
                            <select class="form-control" name="tahun">
                                <option hidden selected disabled>Pilih Tahun</option>
                                <?php foreach($years as $year) : ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                            <a href="<?= base_url('main/skpd') ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
                            </div>
                        </div>
                    </form>

                <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                <script type="text/javascript">
                $(document).ready(function () {
                $("#mytable").dataTable();
                });
                </script>

                <script>
                    
                </script>

                </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->