<?php echo form_open('payment/add'); ?>

	<div>
		Payment Status Code : 
		<select name="payment_status_code">
			<option value="">select</option>
			<?php 
			$payment_status_code_values = array(
				'Sukses'=>'Sukses',
				'Proses'=>'Proses',
				'Gagal'=>'Gagal',
			);

			foreach($payment_status_code_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('payment_status_code')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Reservation : 
		<select name="reservation_id">
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
	<div>
		Payment Date : 
		<input type="text" name="payment_date" value="<?php echo $this->input->post('payment_date'); ?>" />
	</div>
	<div>
		Payment Amount : 
		<input type="text" name="payment_amount" value="<?php echo $this->input->post('payment_amount'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>