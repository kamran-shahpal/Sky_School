<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use Yajra\DataTables\Facades\DataTables;


class SessionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('session.view') && !auth()->user()->can('session.create')) {
            abort(403, 'Unauthorized action.');
        }
        if (request()->ajax()) {
            $sessions = Session::select(['session', 'is_active', 'id']);

            return Datatables::of($sessions)
                ->addColumn(
                    'action',
                    '@can("brand.update")
                    <button data-href="{{action(\'\App\Http\Controllers\SessionController@edit\', [$id])}}" class="btn btn-xs btn-primary edit_session_button"><i class="glyphicon glyphicon-edit"></i> @lang("global_lang.edit")</button>
                        &nbsp;
                    @endcan
                    @can("session.delete")
                        <button data-href="{{action(\'\App\Http\Controllers\SessionController@destroy\', [$id])}}" class="btn btn-xs btn-danger delete_session_button"><i class="glyphicon glyphicon-trash"></i> @lang("global_lang.delete")</button>
                    @endcan'
                )
                ->editColumn('is_active', function ($row) {
                    if ($row->is_active == 1) {
                        return $row->name . ' <small class="label m-1 bg-green ">' . __("global_lang.active") ;
                    }else{
                        return $row->name . ' <small class="label  bg-red  m-1">' . __("global_lang.in_active") ;

                    }
                })
                ->removeColumn('id')
                ->rawColumns(['action','is_active','session'])
                ->make(true);
        }
        return view('setting\session.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('session.create')) {
            abort(403, 'Unauthorized action.');
        }
        return view('setting\session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('session.create')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            $input = $request->only(['session']);
            

            $session = Session::create($input);
            $output = ['success' => true,
                            'data' => $session,
                            'msg' => __("session.added_success")
                        ];
        } catch (\Exception $e) {
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
            $output = ['success' => false,
                            'msg' => __("global_lang.something_went_wrong")
                        ];
        }

        return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('session.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {

            $session = Session::find($id);
            return view('setting\session.edit')
                ->with(compact('session'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->can('session.update')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                $input = $request->only(['session']);

                $session = Session::findOrFail($id);
                $session->session = $input['session'];
                $session->save();

                $output = ['success' => true,
                            'msg' => __("session.updated_success")
                            ];
            } catch (\Exception $e) {
                \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
                $output = ['success' => false,
                            'msg' => __("global_lang.something_went_wrong")
                        ];
            }

            return $output;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if (!auth()->user()->can('session.delete')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            try {
                

                $session = Session::findOrFail($id);
                $session->delete();

                $output = ['success' => true,
                            'msg' => __("session.deleted_success")
                            ];
            } catch (\Exception $e) {
                \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            
                $output = ['success' => false,
                            'msg' => __("global_lang.something_went_wrong")
                        ];
            }

            return $output;
        }
    }
}
