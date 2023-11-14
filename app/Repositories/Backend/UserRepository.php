<?php

namespace App\Repositories\Backend;

use Yajra\Datatables\Datatables;
use Illuminate\Http\JsonResponse;
use App\Interfaces\Backend\UserInterface;
use App\Models\User;

use function PHPSTORM_META\map;

class UserRepository implements UserInterface
{
    /**
     * index
     * 
     * @params 
     */
    public function index($request): JsonResponse
    {
        $data = User::with(['Role'])->orderBy('created_at', 'DESC')
            ->get(['id', 'name', 'email', 'updated_at']);
        return Datatables::of($data)
            ->addColumn('action', "components.elements.backend.edit-delete")
            ->editColumn('updated_at', function ($data) {
                return dateID($data->created_at);
            })
            ->toJson();
    }
}
