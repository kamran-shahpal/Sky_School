<?php $__env->startSection('title', 'Sessions'); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?php echo app('translator')->get( 'session.sessions' ); ?>
        <small><?php echo app('translator')->get('session.session_list'); ?></small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
    <?php $__env->startComponent('components.widget', ['class' => 'box-primary', 'title' => __( 'session.all_your_sessions' )]); ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('session.create')): ?>
            <?php $__env->slot('tool'); ?>
                <div class="box-tools">
                    <button type="button" class="btn btn-block btn-primary btn-modal" 
                        data-href="<?php echo e(action('\App\Http\Controllers\SessionController@create'), false); ?>" 
                        data-container=".sessions_modal">
                        <i class="fa fa-plus"></i> <?php echo app('translator')->get( 'global_lang.add' ); ?></button>
                </div>
            <?php $__env->endSlot(); ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('session.view')): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="sessions_table">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->get('session.session_name'); ?></th>
                            <th><?php echo app('translator')->get('global_lang.status'); ?></th>
                            <th><?php echo app('translator')->get('global_lang.action'); ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
        <?php endif; ?>
    <?php if (isset($__componentOriginalb3782d3ccf49a4b25eee4a800b6cc4ec3dc93449)): ?>
<?php $component = $__componentOriginalb3782d3ccf49a4b25eee4a800b6cc4ec3dc93449; ?>
<?php unset($__componentOriginalb3782d3ccf49a4b25eee4a800b6cc4ec3dc93449); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="modal fade sessions_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Sky_School\resources\views/setting\session/index.blade.php ENDPATH**/ ?>