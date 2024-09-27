<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Auth;
use App\Models\Client;


class ClientController extends Controller
{
    public function CreateClients()
    {
        return view('backend.pages.clients.createclient');
    }

    public function ClientStore(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|unique:clients,company_email',
            'hr_manager_name' => 'required|string|max:255',
            'hr_manager_email' => 'required|email',
            'hr_manager_phone' => 'required|string|max:15',
            'roles' => 'required|array',
            'company_about' => 'nullable|string',
        ]);

        Client::create($request->all());

        return redirect('/super-admin/create-client')->with('status', 'Client Create Successfully!');
    }
}
