<section class="content">
          <div class="row">
            <div class="col-xs-12">
            <h3>Informasi</h3>
              <div class="box">
                <div class="box-body">

                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3><?= $jml_wajibpajak; ?></h3>
                                <p><a href="<?= base_url('main/wajibpajak'); ?>" class="btn" style="background-color: white;">Wajib Pajak</a></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?= $jml_skpd; ?></h3>
                                <p><a href="<?= base_url('main/skpd'); ?>" class="btn" style="background-color: white;">SKPD</a></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-list"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?= $jml_user; ?></h3>
                                <p><a href="<?= base_url('main/user'); ?>" class="btn" style="background-color: white;">User</a></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>1</h3>
                                <p><a href="<?= base_url('main/laporan'); ?>" class="btn" style="background-color: white;">Laporan</a></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>