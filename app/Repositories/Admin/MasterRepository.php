<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\MasterInterface;
use App\Models\Master;
use Yajra\Datatables\Datatables;


class MasterRepository implements MasterInterface
{
    /**
     * index
     * 
     * @params 
     */
    public function index($request)
    {
        $master = Master::orderBy('created_at', 'DESC')->get(['id', 'name', 'age', 'created_at', 'updated_at']);
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

    /**
     * update
     * @param mixed $request
     * @return Master
     */
    public function update($request, $master): Void
    {
        $data = $request->input();
        $master->update($data);
    }

    /**
     * store
     * @param mixed $request
     * @return Master
     */
    public function store($request): Void
    {
        Master::create([
            'name'  => $request->input('name'),
            'age'   => $request->input('age'),
        ]);
    }
}
