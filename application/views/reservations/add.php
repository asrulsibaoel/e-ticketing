<?php echo form_open('reservations/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="flight_schedule_id" class="col-md-4 control-label">Flight Schedule</label>
		<div class="col-md-8">
			<select name="flight_schedule_id" class="form-control">
				<option value="">select flight_schedule</option>
				<?php 
				foreach($all_flight_schedules as $flight_schedule)
				{
					$selected = ($flight_schedule['id'] == $this->input->post('flight_schedule_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$flight_schedule['id'].'" '.$selected.'>'.$flight_schedule['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="passenger_id" class="col-md-4 control-label">Passenger</label>
		<div class="col-md-8">
			<select name="passenger_id" class="form-control">
				<option value="">select passenger</option>
				<?php 
				foreach($all_passengers as $passenger)
				{
					$selected = ($passenger['id'] == $this->input->post('passenger_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$passenger['id'].'" '.$selected.'>'.$passenger['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="reservations_status_code" class="col-md-4 control-label">Reservation Status Code</label>
		<div class="col-md-8">
			<select name="reservations_status_code" class="form-control">
				<option value="">select</option>
				<?php 
				$reservation_status_code_values = array(
					'Sukses'=>'Sukses',
					'Proses'=>'Proses',
					'Gagal'=>'Gagal',
				);

				foreach($reservation_status_code_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('reservations_status_code')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ticket_type_code" class="col-md-4 control-label">Ticket Type Code</label>
		<div class="col-md-8">
			<input type="text" name="ticket_type_code" value="<?php echo $this->input->post('ticket_type_code'); ?>" class="form-control" id="ticket_type_code" />
		</div>
	</div>
	<div class="form-group">
		<label for="travel_class_code" class="col-md-4 control-label">Travel Class Code</label>
		<div class="col-md-8">
			<input type="text" name="travel_class_code" value="<?php echo $this->input->post('travel_class_code'); ?>" class="form-control" id="travel_class_code" />
		</div>
	</div>
	<div class="form-group">
		<label for="reservations_date" class="col-md-4 control-label">Reservation Date</label>
		<div class="col-md-8">
			<input type="text" name="reservations_date" value="<?php echo $this->input->post('reservation_date'); ?>" class="form-control" id="reservation_date" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>