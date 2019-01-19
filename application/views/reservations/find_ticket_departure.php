<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="GET" action="reservation/findDepature">
                <!-- <div class="col-md-12"> -->
                <div class="form-group mt-6 mb-6">
                    <div class="col-5 float-left">
                        <input type="text" class="form-control" name="depature_from" placeholder="Berangkat Dari" />
                    </div>
                    <div class="col-5 float-left">
                        <input type="date" class="form-control" name="depature_date" placeholder="Tanggal Berangkat" />
                    </div>
                    <div class="col-2 float-left">
                        
                        <input type="submit" class="btn btn-primary justify-content-center" value="Cari" name="cari" />
                    </div>
                </div>
            </form>
        </div>

        <?php  foreach($data as $key => $val) {?>
        <div class="col-md-12 border mt-2">
            <div class="col-sm-12">
                <img src="<? $val->upload_foto; ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left"><?= $val->maskapai->nama;?></p> 
            </div>
            <br>
            <div class=" col-12 mt-4">
                <div class="col-sm-3 float-right mt-1">
                    <a class="btn btn-info justify-content-center float-right" href="<?= base_url("Reservation/selectFlightDepature/". $val->id)?>">Pilih Pergi</a>
                </div>
                <div class="col-sm-3 float-right mt-2">
                    <p><?= $val->price; ?></p>&nbsp;
                </div>
                <div class="col-sm-3 float-right mt-2">
                    <p>1 jam 5 mnt</p>
                </div>
                <div class="col-sm-3 float-left">
                    <p>
                    <?php echo date("d-m-Y H:i:s", strtotime($val->depature_date_time)); ?> 
                    - <?php echo date("d-m-Y H:i:s", strtotime($val->arrival_date_time)); ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>