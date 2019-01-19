<?php
if($tampil){
    $id = $tampil->id;
    $username = $tampil->username;
    $nama = $tampil->name;
    $email = $tampil->email;
    $password = $tampil->password;
    $address = $tampil->address;
    $phone_number = $tampil->phone_number;
    $photo = (empty($tampil->photo))? "" : $tampil->photo; // TODO : aku belum set field photo di database users. mohon bantuan e set column field iki.
    $role =  (empty($tampil->role))? "" : $tampil->role; // TODO : aku juga belum set field role. tambahkan juga ya. thanks.
    
} else {
    // TODO: what will happen when variable $tampil isinya kosong?

}
?>
<div class="container mt-5">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?php echo base_url().'uploads/'.$photo ?>" class="avatar img-circle img-thumbnail" alt="avatar"><br>
        <br><h4><?php echo $nama; ?></h4>
      </div></hr><br>

               
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Perjalanan</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Review</strong></span> 37</li>
          </ul> 
               
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <?php echo form_open_multipart("users/ubah"); ?>
            <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="username"><h4>Username</h4></label>
                        <input type="text" class="form-control" name="username" placeholder="username" title="masukkan username anda" value="<?php echo $username ?>">
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-xs-6">
                    <label for="nama"><h4>Nama</h4></label>
                        <input type="text" class="form-control" name="nama" placeholder="nama pengguna" title="masukkan nama anda" value="<?php echo $nama ?>">
                    </div>
                </div>

                <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="email"><h4>Email</h4></label>
                        <input type="text" class="form-control" name="email" placeholder="email address" title="masukkan email anda"  value="<?php echo $email ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile"><h4>Password</h4></label>
                        <input type="text" class="form-control" name="password" placeholder="password baru" title="masukkan password baru anda">
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="notelp"><h4>No Telepon</h4></label>
                        <input type="text" class="form-control" name="notelp" placeholder="no telepon" title="masukkan no telepon anda" value="<?php echo $phone_number ?>">
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="upload_foto"><h4>Foto</h4></label>
                        <input type="file" class="form-control" name="upload_foto" placeholder="upload foto">
                        <p><?php echo $photo ?></p>
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="alamat"><h4>Alamat</h4></label>
                        <textarea name="alamat" cols="30" rows="10" class="form-control"><?php echo $address ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-xs-6">
                        <label for="role"><h4>Role</h4></label>
                        <select name="role" id="role" class="form-control">
                            <option selected><?php echo set_value('role', $role); ?></option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>                      
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <input type="submit" name="submit" value="Ubah" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-ok-sign"></button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div><!--/col-9-->
    </div><!--/row-->
    </div>