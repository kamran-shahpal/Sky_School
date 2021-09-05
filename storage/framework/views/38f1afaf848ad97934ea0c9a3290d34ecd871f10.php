<div class="modal-dialog" role="document">
  <div class="modal-content">

    <?php echo Form::open(['url' => action('\App\Http\Controllers\SessionController@store'), 'method' => 'post', 'id' =>'session_add_form' ]); ?>


    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title"><?php echo app('translator')->get( 'session.add_session' ); ?></h4>
    </div>

    <div class="modal-body">
          <div class="form-group">
            <?php echo Form::label('session', __( 'session.session_name' ) . ':*'); ?>

              <?php echo Form::text('session', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'session.session_name' ) ]); ?>

          </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary"><?php echo app('translator')->get( 'global_lang.save' ); ?></button>
      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo app('translator')->get( 'global_lang.close' ); ?></button>
    </div>

    <?php echo Form::close(); ?>


  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog --><?php /**PATH D:\xampp\htdocs\Sky_School\resources\views/setting\session/create.blade.php ENDPATH**/ ?>