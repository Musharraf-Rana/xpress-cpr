<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::accept('application/json')->get(env('API_URL') . 'getcourse');
        $data['courses'] = $response->json();

        return view('appointment')->with($data);
    }

    public function blogs()
    {
        $response = Http::accept('application/json')->get(env('API_URL') . 'blogs');
        $data['blogs'] = $response->json();
        return view('blog')->with($data);
    }

    public function blogsDetails($id)
    {

        $response = Http::accept('application/json')->get(env('API_URL') . 'blogs-details/' . $id);
        $data['blogs'] = $response->json();
        return view('blog_details')->with($data);
    }

    public function serviceDetails($id)
    {
        $response = Http::accept('application/json')->get(env('API_URL') . 'service-details/' . $id);
        $data['service'] = $response->json();

        return view('services.service')->with($data);
    }

    public function allServices()
    {
        $response = Http::accept('application/json')->get(env('API_URL') . 'service');
        $data['services'] = $response->json();
        return view('services.all_serviecs')->with($data);
    }
}
