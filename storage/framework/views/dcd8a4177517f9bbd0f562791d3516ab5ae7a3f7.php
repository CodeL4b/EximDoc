<?php $__env->startSection('content'); ?>

<section class="content-header">
	<h1>Bank</h1>
</section>	

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Bank Detail Here</h3>
					
				</div>
				
				<form id="bank_frm" action="<?php echo e(route('bankdetail.update', $bankdetail->id)); ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>
						<div class="form-group">
							<label for="exampleInputEmail1">Bank Name <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_name"  class="form-control" id="bank_name" value="<?php echo e($bankdetail->bank_name); ?>"  placeholder="Name" autofocus/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Branch Address <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<textarea name="bank_branch_add" spellcheck="false"  class="form-control" id="bank_branch_add" placeholder="Address" ></textarea>
						</div>	
						
						<div class="form-group">
							<label for="exampleInputEmail1">SWIFT Code <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_swift_code"  class="form-control" id="bank_swift_code" value="<?php echo e($bankdetail->bank_swift_code); ?>"  placeholder="Swift Code" />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Confirm SWIFT Code <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" class="validate[equals[bank_swift_code]] form-control" id="c_bank_swift_code" value="<?php echo e($bankdetail->bank_swift_code); ?>"  placeholder="Confirm Swift Code" />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Account Number <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_acc_no" id="bank_acc_no" class="form-control" value="<?php echo e($bankdetail->bank_acc_no); ?>" placeholder="A/C Number"/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Confirm Account Number <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" class="form-control validate[equals[bank_acc_no]]" id="c_bank_acc_no" value="<?php echo e($bankdetail->bank_acc_no); ?>" placeholder="Confirm A/C Number"/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Account Name <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" name="bank_acc_name"  class="form-control" id="bank_acc_name" value="<?php echo e($bankdetail->bank_acc_name); ?>"  placeholder="Registered A/C Name" />
						</div>
						
					</div>
							<input type="hidden" name="myaction" id="myaction" value="add" />
							<input type="hidden" name="mid" id="mid" value="0" />
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo e(route('bankdetail.index')); ?>" class="btn btn-success">Cancel</a>
						</div>
				</form>
			</div>
		</div>
	</div>		
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\EximDoc\resources\views/MasterDetail/BankDetail/edit.blade.php ENDPATH**/ ?>