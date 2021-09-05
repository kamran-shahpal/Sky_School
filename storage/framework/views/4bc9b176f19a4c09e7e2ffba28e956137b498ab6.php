
<?php $__env->startSection('title', __('settings.general_setting')); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?php echo app('translator')->get('settings.settings'); ?></h1>
    <br>
    
</section>

<!-- Main content -->
<section class="content">
<?php echo Form::open(['url' => action('\App\Http\Controllers\SessionController@store'), 'method' => 'post', 'id' => 'bussiness_edit_form',
           'files' => true ]); ?>

    <div class="row">
        <div class="col-xs-12">
       <!--  <pos-tab-container> -->
        <div class="col-xs-12 pos-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pos-tab-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item text-center active"><?php echo app('translator')->get('settings.general_setting'); ?></a>
                    
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pos-tab">
                <!-- tab 1 start -->
                <?php echo $__env->make('setting.general_setting.partials.general_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <!-- tab 10 end -->
                <!-- tab 11 start -->
                
            </div>
        </div>
        <!--  </pos-tab-container> -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-danger pull-right" type="submit"><?php echo app('translator')->get('settings.update_settings'); ?></button>
        </div>
    </div>
<?php echo Form::close(); ?>

</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sky_School\resources\views/setting\general_setting/index.blade.php ENDPATH**/ ?>