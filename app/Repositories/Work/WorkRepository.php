<?php

namespace App\Repositories\Work;

use App\Models\Work;

class WorkRepository implements iWorkRepository
{
    public function all()
    {
        return Work::all();
    }

    public function create($request)
    {
        Work::create($request->validated());
    }

    public function update($work, $request)
    {
        $work->update($request->validated());
    }

    public function delete($work)
    {
        $work->delete();
    }
}