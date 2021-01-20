<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Pengaturan User</h3>
            <div class='box'>
                <div class='box-header'>
                    <a href="<?= base_url('main/usertambah') ?>" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah User</a>
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                        <th style="text-align: center; width:10px;">NIP</th>
                        <th style="text-align: center;">Username</th>
                        <th style="text-align: center;">Fullname</th>
                        <th style="text-align: center;">Tipe User</th>
                        <th style="text-align: center;">Terdaftar Sejak</th>
                        <th style="text-align: center; width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($daftaruser as $u) { ?>
                            <tr>
                                <td style="text-align: center;"><?= $u->nip ?></td>
                                <td style="text-align: center;"><?= $u->username ?></td>
                                <td style="text-align: center;"><?= $u->fullname ?></td>
                                <td style="text-align: center;"><?= $u->tipe_user ?></td>
                                <td style="text-align: center;"><?= date('d F Y', $u->date_created) ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url('main/useredit?id=' . $u->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 5px;"><i class="fa fa-pencil-square-o"></i></a>

                                    <a href="<?= base_url('main/proseshapususer?id=' . $u->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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