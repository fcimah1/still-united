<?php

namespace App\Http\Controllers;

use App\DTO\SettingDTO;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use App\Repository\Interface\ISettingRepository;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    protected $settingRepository;
    public function __construct(ISettingRepository $SettingRepository)
    {
        $this->middleware('auth');
        $this->settingRepository = $SettingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Cache::remember('key', 40, function () {
            return $this->settingRepository->getAll();
        });
        return view('dashboard.settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        return view('dashboard.settings.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('dashboard.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, string $id)
    {
        // dd($request);
        $this->settingRepository->update(SettingDTO::handleInput($request), $id);
        return redirect()->route('setting.index')->with('success', 'Setting updated successfully');
    }
}
