<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <h3>Update Profile</h3>
            <div class='box'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body'>
                <div class="col-lg-6">

                    <?= form_open_multipart('main/prosesupdateprofile');?>

                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                        </div>

                        <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname']; ?>" required="">
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required="">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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