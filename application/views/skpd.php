<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Data SKPD</h3>
            <div class='box'>
                <div class='box-header'>
                    <a href="<?= base_url('main/tambahskpd') ?>" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Data</a>
                    <a href="<?= base_url('main/cetakskpd') ?>" class="btn btn-warning" target="_blank"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak Semua</a>
                </div>
                <div class='box-body'>

                    <?= form_open_multipart('filter') ?>
                    <input type="hidden" name="nilaifilter" value="1">
                    <input name="valnilai" type="hidden">
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-xs-6">
                            <div>
                                <label for="select" class=" form-control-label">Dari tanggal</label>
                            </div>
                            <div>
                                <input name="tanggalawal" value="" type="date"  class="form-control" id="tanggalawal" required="">
                            </div>
                            </div>

                            <div class="col-xs-6">
                            <div>
                                <label for="select" class=" form-control-label">Sampai tanggal</label>
                            </div>
                            <div class="">
                                <input name="tanggalakhir" value="" type="date"  class="form-control" id="tanggalakhir" required="">
                            </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" style="margin-bottom: 30px; margin-top: 10px;"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak Sesuai Tanggal</button>
                    </form>

                    <table class="table table-bordered table-striped" id="mytable">
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
                        <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        foreach ($skpd as $s) { ?>
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
                                <td style="text-align: center;">
                                    <a href="<?= base_url('main/editskpd?id=' . $s->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 5px;">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="<?= base_url('main/proseshapusskpd?id=' . $s->id); ?>" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
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