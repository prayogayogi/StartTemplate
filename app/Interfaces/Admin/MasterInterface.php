<?php

namespace App\Interfaces\Admin;

interface MasterInterface
{
    /**
     * index
     * 
     * @param 
     */
    public function index($request);

    /**
     * store
     * 
     * @param 
     */
    public function store($request);

    /**
     * update
     * @param mixed $request
     * @return Master
     */
    public function update($request, $master);
}
