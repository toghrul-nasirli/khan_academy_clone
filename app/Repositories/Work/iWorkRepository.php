<?php

namespace App\Repositories\Work;

interface iWorkRepository
{
    public function all();
    public function create($request);
    public function update($work, $request);
    public function delete($order);
}