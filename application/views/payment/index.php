<div class="pull-right">
	<a href="<?php echo site_url('payment/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Reservation Id</th>
		<th>Payment Status Code</th>
		<th>Payment Date</th>
		<th>Payment Amount</th>
		<th>Actions</th>
    </tr>
	<?php foreach($payments as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['reservation_id']; ?></td>
		<td><?php echo $p['payment_status_code']; ?></td>
		<td><?php echo $p['payment_date']; ?></td>
		<td><?php echo $p['payment_amount']; ?></td>
		<td>
            <a href="<?php echo site_url('payment/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('payment/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
