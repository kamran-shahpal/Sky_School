@extends('layouts.app')
@section('title', __('settings.general_setting'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('settings.settings')</h1>
    <br>
    {{-- @include('layouts.partials.search_settings') --}}
</section>

<!-- Main content -->
<section class="content">
{!! Form::open(['url' => action('\App\Http\Controllers\SessionController@store'), 'method' => 'post', 'id' => 'bussiness_edit_form',
           'files' => true ]) !!}
    <div class="row">
        <div class="col-xs-12">
       <!--  <pos-tab-container> -->
        <div class="col-xs-12 pos-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pos-tab-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item text-center active">@lang('settings.general_setting')</a>
                    
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pos-tab">
                <!-- tab 1 start -->
                @include('setting.general_setting.partials.general_settings')
                {{-- <!-- tab 1 end -->
                <!-- tab 2 start -->
                @include('settings.partials.settings_tax')
                <!-- tab 2 end -->
                <!-- tab 3 start -->
                @include('settings.partials.settings_product')

                @include('settings.partials.settings_contact')
                <!-- tab 3 end -->
                <!-- tab 4 start -->
                @include('settings.partials.settings_sales')
                @include('settings.partials.settings_pos')
                <!-- tab 4 end -->
                <!-- tab 5 start -->
                @include('settings.partials.settings_purchase')
                <!-- tab 5 end -->
                <!-- tab 6 start -->
                @include('settings.partials.settings_dashboard')
                <!-- tab 6 end -->
                <!-- tab 7 start -->
                @include('settings.partials.settings_system')
                <!-- tab 7 end -->
                <!-- tab 8 start -->
                @include('settings.partials.settings_prefixes')
                <!-- tab 8 end -->
                <!-- tab 9 start -->
                @include('settings.partials.settings_email')
                <!-- tab 9 end -->
                <!-- tab 10 start -->
                @include('settings.partials.settings_sms') --}}
                <!-- tab 10 end -->
                <!-- tab 11 start -->
                {{-- @include('settings.partials.settings_reward_point')
                <!-- tab 11 end -->
                <!-- tab 12 start -->
                @include('settings.partials.settings_modules')
                <!-- tab 12 end -->
                @include('settings.partials.settings_custom_labels') --}}
            </div>
        </div>
        <!--  </pos-tab-container> -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-danger pull-right" type="submit">@lang('settings.update_settings')</button>
        </div>
    </div>
{!! Form::close() !!}
</section>
<!-- /.content -->
@stop
@section('javascript')
<script type="text/javascript">
    
</script>
@endsection