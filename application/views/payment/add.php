<?php echo form_open('payment/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="reservation_id" class="col-md-4 control-label">Reservation</label>
		<div class="col-md-8">
			<select name="reservation_id" class="form-control">
				<option value="">select reservation</option>
				<?php 
				foreach($all_reservations as $reservation)
				{
					$selected = ($reservation['id'] == $this->input->post('reservation_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$reservation['id'].'" '.$selected.'>'.$reservation['id'].'</option>';
				}
				?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="payment_status_code" class="col-md-4 control-label">Payment Status Code</label>
		<div class="col-md-8">
			<select name="payment_status_code" class="form-control">
				<option value="">select</option>
				<?php 
				$payment_status_code_values = array(
					'Sudah Terbayarkan'=>'Sudah Terbayar',
					'Belum Terbayarkan'=>'Belum Terbayar',
					'Pembayaran Dibatalkan'=>'Pembayaran Dibatalkan',
				);

				foreach($payment_status_code_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('payment_status_code')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<label for="payment_amount" class="col-md-4 control-label">Payment Amount</label>
		<div class="col-md-8">
			<input type="number" name="payment_amount" value="<?php echo $this->input->post('payment_amount'); ?>" class="form-control" id="payment_amount" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
			<button type="Cancel" class="btn btn-danger">Cancel</button>
        </div>
	</div>

	<?php echo form_close(); ?>