<?php

namespace App\Http\Controllers;

use App\DTO\PartnerAndClientDTO;
use App\Enums\Type;
use App\Models\PartnerAndClient;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerAndClientRequest;
use App\Repository\Interface\IPartnerAndClientRpository;

class PartnerAndClientController extends Controller
{
    private  $partnerAndClientRpository;
    public function __construct(IPartnerAndClientRpository $artnerAndClientRpository)
    {
        $this->middleware('auth');

        $this->partnerAndClientRpository = $artnerAndClientRpository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnersAndClients = $this->partnerAndClientRpository->getAll();
        return view('dashboard.partners-and-clients.index', [
            'partnersAndClients' => $partnersAndClients
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.partners-and-clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerAndClientRequest $request)
    {
       $req = $this->partnerAndClientRpository->create(PartnerAndClientDTO::handleData($request));
        return redirect()->route('partnerAndClient.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PartnerAndClientRequest $partnerAndClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editedPartnerOrClient = $this->partnerAndClientRpository->getById($id);
        return view("dashboard.partners-and-clients.edit", ['editedPartnerOrClient' => $editedPartnerOrClient]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerAndClientRequest $request, string $id)
    {        
        // dd($request->all());
        $this->partnerAndClientRpository->update(PartnerAndClientDTO::handleData($request), $id);
        return redirect()->route('partnerAndClient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->partnerAndClientRpository->delete($id);
        return redirect()->back();
    }
}
