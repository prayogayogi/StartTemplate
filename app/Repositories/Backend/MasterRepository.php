<?php

namespace App\Repositories\Backend;

use App\Models\Master;
use Yajra\Datatables\Datatables;
use Illuminate\Http\JsonResponse;
use App\Interfaces\Backend\MasterInterface;


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
            ->addColumn('action', "components.elements.backend.edit-delete")
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
