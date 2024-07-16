<?php

namespace App\Http\Controllers;

use App\DTO\AdminDTO;
use App\Http\Requests\AdminRequest;
use App\Repository\Interface\IAdminRepository;
use Symfony\Component\HttpFoundation\Request;
class AdminController extends Controller
{

    protected $adminRepository;
    public function __construct(IAdminRepository $adminRepository)
    {
        $this->middleware('auth');
        $this->adminRepository = $adminRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = $this->adminRepository->getAll();
        return view('dashboard.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $this->adminRepository->create(AdminDTO::from($request->all()));
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = $this->adminRepository->getById($id);
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, string $id)
    {
        // dd($request->all());
        $this->adminRepository->update(AdminDTO::from($request->all()), $id);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $this->adminRepository->delete($id);
        return redirect()->route('admin.index');
    }
}
