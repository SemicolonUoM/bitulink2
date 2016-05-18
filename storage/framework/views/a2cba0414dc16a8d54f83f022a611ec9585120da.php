<?php $__env->startSection('content'); ?>
	<div class="col-md-offset-3 col-md-6">
		<h3>Create New Return</h3>
		<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- Vehicle Details -->
		<?php if($invoice): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				Vehicle Details
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr><td>Chassis Number</td><td><?php echo e($invoice->chassis_number); ?></td>
					<td>Make</td><td><?php echo e($invoice->make); ?></td></tr>
					<tr><td>Model</td><td><?php echo e($invoice->model); ?></td>
					<td>Year</td><td><?php echo e($invoice->year); ?></td></tr>
					<tr><td>Engine Number</td><td><?php echo e($invoice->engine_number); ?></td>
					<td>Color</td><td><?php echo e($invoice->color); ?></td></tr>
					<tr><td>Milage</td><td><?php echo e($invoice->milage); ?></td>
					<td>Body Type</td><td><?php echo e($invoice->body_type); ?></td></tr>
					<tr><td>Fuel Type</td><td><?php echo e($invoice->fuel_type); ?></td>
					<td>Engine Capacity</td><td><?php echo e($invoice->engine_capacity); ?></td></tr>
				</table>
			</div>
		</div>
		<?php endif; ?>
		<form action="/returns/" method="post">
			<?php echo e(csrf_field()); ?>

			<?php if(!$invoice): ?>
			<div class="form-group">
				<label for="sales_invoice_id" class="control-label">Invoice Number: </label>
				<input name="sales_invoice_id" type="text" class="form-control">
			</div>
			<?php else: ?>
				<input type="hidden" name="sales_invoice_id" value="<?php echo e($invoice->id); ?>">
			<?php endif; ?>
			<button type="submit" class="btn btn-primary pull-right">Create Return</button>
		</form>
		<br><br><br>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>