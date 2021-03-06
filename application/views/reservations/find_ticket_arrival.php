<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <h3>Bali (Ngurah Rai)<a href="#">=</a>Malang (Abdul Rahman Saleh)</h3>
            <p>Senin, 09 November 2018 - Senin, 12 November 2018 | Dewasa | Economy </p>
        </div>
        <div class="col-md-4 border mt-2 mr-2 h-25 pl-0 pr-0">
            <div class="col-md-12 col-sm-12 mt-2">
                
                <div class="col-sm-12">
                    <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia<br><span class="small">Economy</span></p> 
                    
                </div>
                <br>
                <div class=" col-md-12 mt-5 pl-0">
                    
                    <div class="col-sm-6 col-md-6 float-left">
                        <p>15.15 (Malang)</p>
                    </div>
                    <div class="col-sm-6 col-md-6 float-right">
                        <p>16.20 (Bali)</p>
                    </div>
                    <div class="col-sm-6 col-md-6 float-left">
                        <p>Total Duration</p>
                    </div>
                    <div class="col-sm-6 col-md-6 float-right">
                        <p>1 Jam 05 Menit</p>
                    </div>
                    <div class="col-sm-6 col-md-6 float-left">
                        <p>Harga pergi (termasuk pajak)</p>
                    </div>
                    <div class="col-sm-6 col-md-6 float-right">
                        <p>Rp.850.000,00/Org</p>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-12 mt-3 pl-0 pr-0">
                <button class="btn btn-info btn-block">Ganti Penerbangan Pergi</button>
            </div>
        </div>
        <div class="row col-md-8">
            <div class="col-md-12 border pb-3">
                <form class="form" method="GET" action="reservation/findArrival">
                    <!-- <div class="col-md-12"> -->
                    <div class="form-group mt-6 mb-6">
                        <div class="col-5 float-left">
                            <input type="text" class="form-control" name="depature_from" placeholder="Tiba di" />
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
            <?php foreach($data as $val) {?>
            <div class="col-md-12 border mt-2">
                <div class="col-sm-12 col-md-12">
                    <img src="<?php echo $val->vendor->upload_foto; ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="mt-3 ml-3 float-sm-left">Garuda Indonesia</p> 
                </div>
                <br>
                <div class=" col-md-12 mt-4">
                    <div class="col-sm-3 float-right mt-1">
                        <a href="<?= base_url("Reservation/selectFlightArrival/". $val->id)?>" class="btn btn-info justify-content-center float-right">Pilih Datang</a>
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
</div>