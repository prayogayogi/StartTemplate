<?php

namespace App\Http\Controllers\Admin;

use App\Models\Master;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\MasterRequest;
use App\Http\Repositories\Admin\MasterRepository;
use App\Repositories\Admin\MasterRepository as AdminMasterRepository;

class MasterController extends Controller
{
    /**
     * constructor
     * 
     * @return 
     */
    public function __construct(
        protected AdminMasterRepository $masterRepository
    ) {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->masterRepository->index($request);
        }
        return view('pages.admin.master.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('pages.admin.master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterRequest $request): RedirectResponse
    {
        $this->masterRepository->store($request);
        return redirect()->route('admin.master.index');
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
    public function edit(Master $master): View
    {
        return view('pages.admin.master.edit', [
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
    public function update(Request $request, Master $master): RedirectResponse
    {
        $this->masterRepository->store($request, $master);
        return redirect()->route('admin.master.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master): RedirectResponse
    {
        $master->delete();
        return redirect()->route('admin.master.index');
    }
}
