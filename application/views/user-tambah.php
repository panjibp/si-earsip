<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Tambah User</h3>
            <div class='box'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="col-lg-6">
                    <?= form_open_multipart('main/usertambah');?>

                        <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" required="">
                        </div>

                        <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required="">
                        </div>

                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required="">
                        <?= form_error('username'); ?>
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required="">
                        </div>

                        <div class="form-group">
                        <label>Tipe User</label>
                        <select class="form-control" name="tipe_user">
                            <option selected="" disabled="" hidden="">Pilih tipe user</option>
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                        <a href="<?= base_url('main/user') ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
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