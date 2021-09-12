<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supporter\StoreSupporterRequest;
use App\Http\Requests\Supporter\UpdateSupporterRequest;
use App\Models\Supporter;
use Illuminate\Support\Facades\Storage;

class SupporterController extends Controller
{
    public function index()
    {
        $supporters = Supporter::all();

        return view('admin.supporters.index', compact('supporters'));
    }

    public function store(StoreSupporterRequest $request)
    {
        Supporter::create([
            'covid_19' => $request->covid_19 ?? 0,
            'logo' => storeFile('supporters', $request->logo),
        ]);

        return back()->with('success', 'Əlavə olundu!');
    }

    public function edit(Supporter $supporter)
    {
        return view('admin.supporters.edit', compact('supporter'));
    }

    public function update(Supporter $supporter, UpdateSupporterRequest $request)
    {
        $data = [
            'covid_19' => $request->covid_19 ?? 0,
        ];

        if ($request->hasFile('logo')) {
            Storage::delete('public/supporters/' . $supporter->logo);
            $data['logo'] = storeFile('supporters', $request->logo);
        }

        $supporter->update($data);

        return redirect()->route('admin.supporters.index')->with('success', 'Dəyişikliklər yadda saxlanıldı!');
    }

    public function destroy(Supporter $supporter)
    {
        $supporter->delete();

        return back()->with('success', 'Uğurla silindi!');
    }
}
