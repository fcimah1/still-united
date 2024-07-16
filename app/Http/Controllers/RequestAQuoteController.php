<?php

namespace App\Http\Controllers;

use App\DTO\RequestAQuoteDTO;
use App\Models\RequestAQuote;
use App\Http\Requests\RequestAQuoteRequest;
use App\Repository\Interface\IRequestAQuoteRepository;

class RequestAQuoteController extends Controller
{
    protected $requestAQuoterepository;

    public function __construct(IRequestAQuoteRepository $requestAQuoterepository)
    {
        $this->middleware('auth');
        $this->requestAQuoterepository = $requestAQuoterepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requestAllQuotes = $this->requestAQuoterepository->getAll();
        return view('dashboard.request-a-quote.index', ['requestAllQuotes' => $requestAllQuotes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.request-a-quote.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestAQuoteRequest $request)
    {
        // dd($request);
        $this->requestAQuoterepository->create(RequestAQuoteDTO::from($request->all()));
        return redirect()->route('home');
    }

    public function storeFromDashboard(RequestAQuoteRequest $request)
    {
        // dd($request);
        $this->requestAQuoterepository->create(RequestAQuoteDTO::from($request->all()));
        return redirect()->route('quote.index');
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
        $requestAQuote = $this->requestAQuoterepository->getById($id);
        return view('dashboard.request-a-quote.edit', ['requestAQuote' => $requestAQuote]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestAQuoteRequest $request, string $id)
    {
        $this->requestAQuoterepository->update(RequestAQuoteDTO::from($request->all()), $id);
        return redirect()->route('quote.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->requestAQuoterepository->delete($id);
        return redirect()->route('quote.index');
    }
}
