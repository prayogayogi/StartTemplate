<?php

namespace App\Http\Controllers\Admin;

use App\Models\Master;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Admin\MasterRepository;


class MasterController extends Controller
{
    /**
     * constructor
     * 
     * @return 
     */
    public function __construct()
    {
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $master = Master::orderBy('created_at', 'DESC')->get(['id', 'name', 'age', 'created_at', 'updated_at']);
        if ($request->ajax()) {
            return Datatables::of($master)
                ->addColumn('action', "actionDataTable.admin.master.edit")
                ->addIndexColumn()
                ->editColumn('created_at', function ($master) {
                    return $master->created_at->format('d-m-Y');
                })
                ->editColumn('updated_at', function ($master) {
                    return $master->created_at->format('d-m-Y');
                })
                ->toJson();
        }
        return view('pages.admin.master.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        return response()->view('pages.admin.master.edit', [
            'master' => $master
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $data = $request->input();
        $master->update($data);
        return redirect()->route('admin.master.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return redirect()->route('admin.master.index');
    }
}
