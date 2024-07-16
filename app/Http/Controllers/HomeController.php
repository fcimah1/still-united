<?php

namespace App\Http\Controllers;

use App\Enums\Type;
use App\Repository\Interface\IPartnerAndClientRpository;
use App\Repository\Interface\IServiceRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     private $partnerAndClientRpository;
     private $serviceRepository;
     
     public function __construct(IPartnerAndClientRpository $partnerAndClientRpository,IServiceRepository $serviceRepository)
     {
         $this->partnerAndClientRpository = $partnerAndClientRpository;
         $this->serviceRepository = $serviceRepository;
     }
     public function index()
     {
         return view('pages.index');
     }
 
     public function contact()
     {
         return view('pages.contacts');
     }
 
     public function about()
     {
         return view('pages.about');
     }
 
     public function our_services()
     {   
         $services = $this->serviceRepository->getAll();
         $clients = $this->partnerAndClientRpository->getByType(Type::CLIENT);
         $partners = $this->partnerAndClientRpository->getByType(Type::PARTNER);
         return view('pages.ourServices', [
             'clients' => $clients,
             'partners' => $partners,
             'services' => $services
         ]);
     }
 
     public function requestQuote()
     {
         return view('pages.request-a-quote');
     }
 
     public function notFound()
     {
         return view('pages.404');
     }
 
     public function blog()
     {
         return view('pages.blog');
     }
 
     public function dashIndex()
     {
         return view('dashboard.index');
     }
 
 
}
