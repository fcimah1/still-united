<?php

namespace App\Http\Controllers;

use App\DTO\ContactDTO;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Repository\Interface\IContactRepository;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(IContactRepository $contactRepository)
    {
        $this->middleware('auth');

        $this->contactRepository = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = $this->contactRepository->getAll();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $contact = $this->contactRepository->getById($id);
        return view('dashboard.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->contactRepository->delete($id);
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
}
