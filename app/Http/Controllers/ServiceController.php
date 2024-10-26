<?php


namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('packages')->get();
        return view('booking.index', compact('services'));
    }
    public function selectPackage(Request $request)
{
    
    $services = Service::with('packages')->get();
    $selectedService = Service::with('packages')->findOrFail($request->service_id);
    $packages = $selectedService->packages;
    
    return view('booking.index', compact('services', 'selectedService', 'packages'));
}

}

