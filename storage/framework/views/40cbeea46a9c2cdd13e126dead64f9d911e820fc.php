<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bitulink Dealings</title>
		<?php if(!session('white')): ?>
		<link rel="stylesheet" href="/bootstrap-darkly.min.css">
		<?php else: ?>
		<link rel="stylesheet" href="/bootstrap-paper.min.css">
		<?php endif; ?>
		<script src="jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nb">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
      				</button>
					<a class="navbar-brand" href="/">Bitulink Dealings</a>
				</div>
				<div class="collapse navbar-collapse" id="nb">
					<ul class="nav navbar-nav">
						<li><a href="/suppliers">Suppliers</a></li>
						<li><a href="/pi">Performa Invoices</a></li>
						<li><a href="/po">Purchase Orders</a></li>
						<li><a href="/inventory">Inventory</a></li>
						<li><a href="/customers">Customers</a></li>
						<li><a href="/si">Sales Inovices</a></li>
						<li><a href="/receipts">Receipts</a></li>
						<li><a href="/returns">Returns</a></li>
						<li><a href="/vouchers">Vouchers</a><li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php if(Auth::check()): ?>
						<li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Logged in as <?php echo e(Auth::user()->username); ?>

					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          <li><a href="/users">Manage Users</a></li>
					          <li><a href="/change_theme">Change Theme</a></li>
					          <li><a href="/logout">Logout</a></li> 
					        </ul>
					    </li>
						<?php else: ?>
						<li><a href="/login">Login</a></li>
						<?php endif; ?>
						
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</body>
</html>