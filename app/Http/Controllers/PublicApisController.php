<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;
use Inertia\Response;

class PublicApisController extends Controller
{
    protected string $url;
    public function __construct()
    {
        $this->url = config('system.open_api_url');
    }

    /**
     * List of all public APIs entries
     * @return Response
     */
    public function index(): Response
    {
        $response = Http::get("$this->url/entries");
        $data = $response->json();
        return Inertia::render('Dashboard', ['data' => $data]);
    }

    /**
     * List of categories from public APIs
     * @return Response
     */
    public function categories(): Response
    {
        $response = Http::get("$this->url/categories");
        $data = $response->json();
        return Inertia::render('Category', ['data' => $data]);
    }
}
