<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="form-identity" class="mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 float-left">
                <h4>Tinjau Pesanan Anda</h4>
                <div class="col-md-12 border mt-2 mr-2 pl-0 pr-0 float-left">
                    <div class="col-md-9 col-sm-9 mt-2 float-left">
                        <div class="col-sm-7 float-left">
                        <p>Maskapai</p>
                            <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="ml-3 float-sm-left">Garuda Indonesia<br><span class="small">Economy</span></p>                        
                        </div>
                        <div class="col-sm-5 float-right">
                        <p>Jadwal Penerbangan</p>
                            <p class="mb-0">Berangkat :</p>
                            <p class="small mb-0">Jumat,09 November 2018</p>
                            <p class="small mt-0">15:15 - 16:20</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 mt-2 float-right">
                        <div class="col-sm-12 text-right">
                            <p class="font-weight-bold">Order ID</p>
                            <p>1236578442</p>  
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 mt-2 float-left">
                        <div class="col-sm-7 float-left">
                        <p>Maskapai</p>
                            <img src="<?php echo base_url('/assets/images/logo_maskapai/garuda.png'); ?>" alt="img-logo" class="img-fluid mt-3 mb-3 float-sm-left" width="36px" height="20px"><p class="ml-3 float-sm-left">Garuda Indonesia<br><span class="small">Economy</span></p>                        
                        </div>
                        <div class="col-sm-5 float-right">
                        <p>Jadwal Penerbangan</p>
                            <p class="mb-0">Kembali :</p>
                            <p class="small mb-0">Jumat,09 November 2018</p>
                            <p class="small mt-0">15:15 - 16:20</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 float-right">
                <h4>Rincian Harga</h4>
                <div class="col-md-12 border mt-2 float-right">
                    <p class="font-weight-bold mt-2">Oderd ID</p><hr>
                    <p class="font-weight-normal">Penerbangan Roundtrip :</p>
                    <p class="small mt-0">Wings (JT217)</p>
                    <div class="col-12 pl-0 pr-0 mb-4">
                        <p class="small mt-0 col-6 float-left text-left pl-0">Dewasa x1</p>
                        <p class="small mt-0 col-6 float-right text-right pr-0">Rp.1.850.000,00</p>
                    </div><hr>
                    <div class="col-12 pl-0 pr-0 mb-4">
                        <p class="small mt-0 col-6 float-left text-left pl-0">Total Pembayaran</p>
                        <p class="small mt-0 col-6 float-right text-right pr-0">Rp.1.850.000,00</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 float-left mt-3 mb-3">
                <h4>Data Pemesan</h4>
                <form method="POST" action="<?= base_url('reservation/passengerRegistration')?>" class="form border h-100 mt-3">
                    <div class="form-group mt-3 mb-3">
                        <div class="col-12">
                            <label for="passengeId">NIK/Passport/SIM</label>
                            <input type="text" class="form-control form-control-sm" name="national_id" >
                        </div>
                        <div class="col-12">
                            <p class="small font-weight-light">Harap isi data sesuai dengan KTP/Passport/SIM</p>
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <div class="col-6 float-left">
                            <label for="passengeFirstrName">Nama Depan</label>
                            <input type="text" class="form-control form-control-sm" name="first_name" >
                        </div>
                        <div class="col-6 float-right">
                            <label for="passengeLastName">Nama Belakang</label>
                            <input type="text" class="form-control form-control-sm" name="last_name" >
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <div class="col-6 float-left">
                            <label for="passengePhoneNumber">Nomor Telepon</label>
                            <input type="text" class="form-control form-control-sm" name="phone_number" >
                        </div>
                        <div class="col-6 float-right">
                            <label for="passengeEmailAddress">Email Address</label>
                            <input type="text" class="form-control form-control-sm" name="email_address" >
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <div class="col-6 float-left mt-3">
                            <label for="selectKota">Kota</label>
                            <select id="selectKota" class="form-control form-control-sm" name="city">
                                <option selected>Choose...</option>
                                <option value="1">Malang</option>
                                <option value="2">Jakarta</option>
                                <option value="3">Yogyakarta</option>
                                <option value="4">Bali</option>
                            </select>
                        </div>
                        <div class="col-6 float-right mt-3">
                            <label for="selectProvinsi">Provinsi</label>
                            <select id="selectProvinsi" class="form-control form-control-sm" name="province">
                                <option selected>Choose...</option>
                                <option value="1">Jawa Timur</option>
                                <option value="2">Jawa Tengah</option>
                                <option value="3">Jawa Barat</option>
                                <option value="4">Bali</option>
                            </select>
                        </div>
                        <div class="col-12 mb-0 mt-0">
                        &nbsp;
                        </div>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <div class="col-12">
                            <label for="address_lines">Alamat</label>
                            <input type="text" class="form-control form-control-sm" name="address_lines" >
                        </div>
                        <div class="col-12">
                            <p class="small font-weight-light">Harap isi data sesuai dengan KTP/Passport/SIM</p>
                        </div>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <div class="col-12">
                            <input type="submit" class="btn btn-info float-right" name="submit" value="Daftar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>