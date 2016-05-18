<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
	<h1>Receipt #<?php echo e($receipt->id); ?></h1>

	<!-- Details (Date and Cusotmer) -->
	<div class="panel panel-default">
		<div class="panel-heading">Details</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Date</td><td><?php echo e($receipt->created_at->format('d-m-Y')); ?></td></tr>
				<tr><td>Invoice Number</td><td><?php echo e($receipt->sales_invoice_id); ?></td></tr>
				<tr><td>Customer</td><td> <?php echo e($receipt->customer->name); ?></td></tr>
			</table>
			<div class="pull-right">
				<a href="/customers/<?php echo e($receipt->customer_id); ?>" class="btn btn-primary">View Customer</a>
				<a href="/si/<?php echo e($receipt->sales_invoice_id); ?>" class="btn btn-primary">View Invoice</a>

			</div>
		</div>
	</div>

	<!-- Payment Details -->
	<div class="panel panel-default">
		<div class="panel-heading">Payment Details</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Amount</td><td><?php echo e($receipt->amount); ?></td></tr>
				<tr><td>Payment Type</td><td> <?php echo e($receipt->payment_type); ?></td></tr>
				<tr><td>Payment Due</td><td> <?php echo e($receipt->sales_invoice->due_amount()); ?></td>
			</table>
		</div>
	</div>
	<!-- The table showing vehicle details -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				Vehicle Details
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Chassis Number</td><td><?php echo e($receipt->sales_invoice->chassis_number); ?></td></tr>
				<tr><td>Make</td><td><?php echo e($receipt->sales_invoice->make); ?></td></tr>
				<tr><td>Model</td><td><?php echo e($receipt->sales_invoice->model); ?></td></tr>
				<tr><td>Year</td><td><?php echo e($receipt->sales_invoice->year); ?></td></tr>
				<tr><td>Engine Number</td><td><?php echo e($receipt->sales_invoice->engine_number); ?></td></tr>
				<tr><td>Color</td><td><?php echo e($receipt->sales_invoice->color); ?></td></tr>
				<tr><td>Milage</td><td><?php echo e($receipt->sales_invoice->milage); ?></td></tr>
				<tr><td>Body Type</td><td><?php echo e($receipt->sales_invoice->body_type); ?></td></tr>
				<tr><td>Fuel Type</td><td><?php echo e($receipt->sales_invoice->fuel_type); ?></td></tr>
				<tr><td>Engine Capacity</td><td><?php echo e($receipt->sales_invoice->engine_capacity); ?></td></tr>
				<tr><td>Transmission</td><td><?php echo e($receipt->sales_invoice->transmission); ?></td></tr>
			</table>
			
		</div>
	</div>
	<!-- Delete and Edit buttons -->
	<a href="/si/<?php echo e($receipt->sales_invoice_id); ?>" class="btn btn-primary">View Sales Invoice</a>
	<div class="pull-right">
	<a href="/receipts/<?php echo e($receipt->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/receipts/<?php echo e($receipt->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Receipt</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>