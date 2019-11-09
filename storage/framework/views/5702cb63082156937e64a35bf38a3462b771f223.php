<?php $__env->startSection('content'); ?>
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Proforma Invoice</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Docs</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Packing Details</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Consignee</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bullhorn"></i> Announcement</h3>
            </div>
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="attachment">
                    <h3> AVAILABLE LATEST PRIMIUM FEATURES </h3>
                    <p>
                      <img src="<?php echo e(asset('dist/img/check.png')); ?>">Grand Sales Report (To download, go to Generate report)<br />
                      <img src="<?php echo e(asset('dist/img/check.png')); ?>">BRC - Post Shipment details (Go to the Generate Docs - you will see BRC and Shipping Bill No.column) (To BRC and post shipment detail - Dropdown Action column - BRC Detail)<br />
                      <img src="<?php echo e(asset('dist/img/check.png')); ?>">All Document Available in Excel Format Too.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Github\EximDoc\resources\views/home.blade.php ENDPATH**/ ?>