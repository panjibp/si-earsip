<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Data Wajib Pajak</h3>
            <div class='box'>
                <div class='box-header'>
                    <a href="<?= base_url('main/tambahwajibpajak') ?>" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah Data</a>
                    <a href="<?= base_url('main/cetakwajibpajak') ?>" class="btn btn-warning" target="_blank"><i class="fa fa-print" style="margin-right: 5px;"></i>Cetak</a>
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                        <th style="text-align: center; width:10px;">No.</th>
                        <th style="text-align: center;">Nomor Polisi</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Alamat</th>
                        <th style="text-align: center;">ID Wajib Pajak</th>
                        <th style="text-align: center; width: 100px;">Action</th>
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
                                <td style="text-align: center;">
                                    <a href="<?= base_url('main/editwajibpajak?id=' . $wp->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 5px;">
                                    <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="<?= base_url('main/proseshapuswajibpajak?id=' . $wp->id); ?>" class="btn btn-sm btn-danger">
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