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
        $master = Master::all();
        return Datatables::of($master)
            ->addColumn('action', "pages.actionDataTable.customer.edit")
            ->addIndexColumn()
            ->toJson();
    }
}
