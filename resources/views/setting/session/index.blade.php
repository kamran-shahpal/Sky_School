@extends('layouts.app')
@section('title', 'Sessions')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang( 'session.sessions' )
        <small>@lang('session.session_list')</small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
    @component('components.widget', ['class' => 'box-primary', 'title' => __( 'session.all_your_sessions' )])
        @can('session.create')
            @slot('tool')
                <div class="box-tools">
                    <button type="button" class="btn btn-block btn-primary btn-modal" 
                        data-href="{{ action('\App\Http\Controllers\SessionController@create') }}" 
                        data-container=".sessions_modal">
                        <i class="fa fa-plus"></i> @lang( 'global_lang.add' )</button>
                </div>
            @endslot
        @endcan
        @can('session.view')
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="sessions_table">
                    <thead>
                        <tr>
                            <th>@lang('session.session_name')</th>
                            <th>@lang('global_lang.status')</th>
                            <th>@lang('global_lang.action')</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endcan
    @endcomponent

    <div class="modal fade sessions_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->
@endsection
@section('javascript')
 {{-- <script src="{{ asset('js/settings.js') }}"></script> --}}
@endsection
