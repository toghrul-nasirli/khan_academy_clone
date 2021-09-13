<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Work\StoreWorkRequest;
use App\Http\Requests\Work\UpdateWorkRequest;
use App\Models\Work;
use App\Repositories\Work\iWorkRepository;

class WorkController extends Controller
{
    private $workRepo;

    public function __construct(iWorkRepository $workRepo)
    {
        $this->workRepo = $workRepo;
    }

    public function index()
    {
        $works = $this->workRepo->all();

        return view('admin.works.index', compact('works'));
    }

    public function store(StoreWorkRequest $request)
    {
        $this->workRepo->create($request);

        return back()->with('success', 'Əlavə olundu!');
    }

    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    public function update(Work $work, UpdateWorkRequest $request)
    {
        $this->workRepo->update($work, $request);

        return redirect()->route('admin.works.index')->with('success', 'Dəyişikliklər yadda saxlanıldı!');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return back()->with('success', 'Uğurla silindi!');
    }
}
