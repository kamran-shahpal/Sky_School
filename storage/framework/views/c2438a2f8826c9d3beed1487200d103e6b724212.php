<div class="pos-tab-content active">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('school_name',__('global_lang.school_name') . ':*'); ?>

                <?php echo Form::text('school_name', $general_settings->school_name, ['class' => 'form-control', 'required',
                'placeholder' => __('global_lang.school_name')]); ?>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('start_date', __('settings.start_date') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    
                    <?php echo Form::text('start_date', \Carbon::createFromTimestamp(strtotime($general_settings->start_date))->format('d-m-Y'), ['class' => 'form-control start-date-picker','placeholder' => __('settings.start_date'), 'readonly']); ?>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('default_profit_percent', __('settings.default_profit_percent') . ':*'); ?> <?php
                
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.default_profit_percent') . '" data-html="true" data-trigger="hover"></i>';
                
                ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    <?php echo Form::text('default_profit_percent', 'l', ['class' => 'form-control input_number']); ?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('currency_id', __('settings.currency') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fas fa-money-bill-alt"></i>
                    </span>
                    <?php echo Form::select('currency_id', $currencies, $general_settings->currency_id, ['class' => 'form-control select2','placeholder' => __('settings.currency'), 'required']); ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?php echo Form::label('currency_symbol_placement', __('global_lang.currency_symbol_placement') . ':'); ?>

                <?php echo Form::select('currency_symbol_placement', ['before' => __('global_lang.before_amount'), 'after' => __('global_lang.after_amount')], $general_settings->currency_symbol_placement, ['class' => 'form-control select2', 'required']); ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?php echo Form::label('time_zone', __('settings.time_zone') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fas fa-clock"></i>
                    </span>
                    <?php echo Form::select('time_zone', $timezone_list, $general_settings->time_zone, ['class' => 'form-control select2', 'required']); ?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('settings_logo', __('settings.upload_logo') . ':'); ?>

                    <?php echo Form::file('settings_logo', ['accept' => 'image/*']); ?>

                    <p class="help-block"><i> <?php echo app('translator')->get('settings.logo_help'); ?></i></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?php echo Form::label('session_start_month', __('settings.session_start_month') . ':'); ?> <?php
                
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.session_start_month') . '" data-html="true" data-trigger="hover"></i>';
                
                ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <?php echo Form::select('session_start_month', $months, $general_settings->session_start_month, ['class' => 'form-control select2', 'required']); ?>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('accounting_method', __('settings.accounting_method') . ':*'); ?>

                <?php
                
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.accounting_method') . '" data-html="true" data-trigger="hover"></i>';
                
                ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calculator"></i>
                    </span>
                    <?php echo Form::select('accounting_method', ['1'], ['class' => 'form-control select2', 'required']); ?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('transaction_edit_days', __('settings.transaction_edit_days') . ':*'); ?>

                <?php
                
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.transaction_edit_days') . '" data-html="true" data-trigger="hover"></i>';
                
                ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-edit"></i>
                    </span>
                    <?php echo Form::number('transaction_edit_days', $general_settings->transaction_edit_days, ['class' => 'form-control','placeholder' => __('settings.transaction_edit_days'), 'required']); ?>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('date_format', __('global_lang.date_format') . ':*'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <?php echo Form::select('date_format', $date_formats, $general_settings->date_format, ['class' => 'form-control select2', 'required']); ?>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('time_format', __('global_lang.time_format') . ':*'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fas fa-clock"></i>
                    </span>
                    <?php echo Form::select('time_format', [12 => __('global_lang.12_hour'), 24 => __('global_lang.24_hour')], $general_settings->time_format, ['class' => 'form-control select2', 'required']); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\xampp\htdocs\Sky_School\resources\views/setting/general_setting/partials/general_settings.blade.php ENDPATH**/ ?>