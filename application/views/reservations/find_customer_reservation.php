<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$national_id = (empty($_GET['national_id'])) ? "" : $_GET['national_id'];
$id = 1;
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="GET" action="<?= base_url('reservation/findCustomerReservationsHistory');?>">
                <!-- <div class="col-md-12"> -->
                <div class="form-group mt-6 mb-6">
                    <div class="col-5 float-left">
                        <input type="text" class="form-control" name="national_id" placeholder="No. KTP" value="<?= $national_id;?>" />
                    </div>
                    <div class="col-2 float-left">
                        
                        <input type="submit" class="btn btn-primary justify-content-center" value="Cari" name="cari" />
                    </div>
                </div>
            </form>
        </div>
    <?php if(isset($data)) {?>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Kode Reservasi</th>
                <th>No. KTP</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Alamat</th>
                <th>Kota/ Kabupaten</th>
                <th>Provinsi</th>
                <th>Tanggal Pemesanan</th>
                <th>Berangkat</th>
                <th>Tujuan</th>
                <th>Pesawat</th>
            </tr>
            <?php foreach($data as $p){ ?>
            <tr>
                <td><?php echo $p->reservation_id; ?></td>
                <td><?php echo $p->national_id; ?></td>
                <td><?php echo $p->first_name; ?></td>
                <td><?php echo $p->last_name; ?></td>
                <td><?php echo $p->address_lines; ?></td>
                <td><?php echo $p->city; ?></td>
                <td><?php echo $p->province; ?></td>
                <td><?php echo $p->reservation_date; ?></td>
                <td><?php echo $p->depature_from; ?></td>
                <td><?php echo $p->arrival_to; ?></td>
                <td><?php echo $p->aircraft_name; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php 
    }?>
    </div>
</div>