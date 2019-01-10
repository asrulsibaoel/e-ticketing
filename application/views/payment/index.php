<div class="pull-right">
	<a href="<?php echo base_url('payment/add'); ?>" >[+] Tambah Data</a> 
</div>
<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Payment Status Code</th>
		<th>Reservation Id</th>
		<th>Payment Date</th>
		<th>Payment Amount</th>
		<th>Actions</th>
    </tr>
	<?php foreach($payments as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['payment_status_code']; ?></td>
		<td><?php echo $p['reservation_id']; ?></td>
		<td><?php echo $p['payment_date']; ?></td>
		<td><?php echo $p['payment_amount']; ?></td>
		<td>
            <a href="<?php echo base_url('payment/edit/'.$p['id']); ?>">Edit</a> | 
            <a href="<?php echo base_url('payment/remove/'.$p['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>