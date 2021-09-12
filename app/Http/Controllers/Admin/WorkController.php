<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Work\StoreWorkRequest;
use App\Http\Requests\Work\UpdateWorkRequest;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }

    public function store(StoreWorkRequest $request)
    {
        Work::create($request->validated());

        return back()->with('success', 'Əlavə olundu!');
    }

    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    public function update(Work $work, UpdateWorkRequest $request)
    {
        $work->update($request->validated());

        return redirect()->route('admin.works.index')->with('success', 'Dəyişikliklər yadda saxlanıldı!');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return back()->with('success', 'Referans silindi!');
    }
}
