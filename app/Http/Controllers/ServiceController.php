<?php

namespace App\Http\Controllers;

use App\DTO\ServiceDTO;
use App\Http\Requests\ServiceRequest;
use App\Repository\Interface\IServiceRepository;

class ServiceController extends Controller
{
    private $serviceRepository;

    public function __construct(IServiceRepository $service)
    {
        $this->middleware('auth');
        $this->serviceRepository = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = $this->serviceRepository->getAll();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $this->serviceRepository->create(ServiceDTO::handleData($request));
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->serviceRepository->getById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = $this->serviceRepository->getById($id);
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, string $id)
    {
        $this->serviceRepository->update(ServiceDTO::handleData($request), $id);
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->serviceRepository->delete($id);
        return redirect()->route('service.index');
    }
}
