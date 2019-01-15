<div class="pull-right">
	<a href="<?php echo base_url('reservations/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Flight Schedule Id</th>
		<th>Passenger Id</th>
		<th>Reservation Status Code</th>
		<th>Ticket Type Code</th>
		<th>Travel Class Code</th>
		<th>Reservation Date</th>
		<th>Actions</th>
    </tr>
	<?php foreach($reservations as $r){ ?>
    <tr>
		<td><?php echo $r['id']; ?></td>
		<td><?php echo $r['flight_schedule_id']; ?></td>
		<td><?php echo $r['passenger_id']; ?></td>
		<td><?php echo $r['reservation_status_code']; ?></td>
		<td><?php echo $r['ticket_type_code']; ?></td>
		<td><?php echo $r['travel_class_code']; ?></td>
		<td><?php echo $r['reservation_date']; ?></td>
		<td>
            <a href="<?php echo site_url('reservations/edit/'.$r['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('reservations/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>