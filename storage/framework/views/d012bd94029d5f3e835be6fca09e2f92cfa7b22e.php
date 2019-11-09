<?php $__env->startSection('content'); ?>

<section class="content-header">
	<h1>Currency </h1>
</section>
<section class="content">
			
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<a class="btn btn-default btn-sm" style="margin:5px;" href="<?php echo e(route('currency.create')); ?>"><i class="fa fa-plus"></i>  Add New</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-hover table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<td width="50px"><strong>#</strong></td>
							<td><strong>Currency</strong></td>
							<td width="100"><strong>Action</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $currencys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><b><?php echo e(++$i); ?>.</b></td>
							<td><?php echo e($currency->currency_code); ?></td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm">Action</button>
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<form action="<?php echo e(route ('currency.destroy', $currency->id)); ?>" method="post">
										<a class="btn btn-warning btn-xs" href="<?php echo e(route ('currency.edit', $currency->id)); ?>" style="width: 70px;margin: 5px;"><i class="fa fa-edit"></i> Edit</a><br>
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
										<button class="btn btn-danger btn-xs" href="<?php echo e(route ('currency.destroy', $currency->id)); ?>" style="width: 70px;margin: 5px;" type="submit"><i class="fa fa-trash-o"></i> Delete</button>
										</form>
									</ul>
								</div>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				  </table>
				  <?php echo $currencys->links(); ?>

				</div>
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Github\EximDoc\resources\views/MasterDetail/Currency/index.blade.php ENDPATH**/ ?>