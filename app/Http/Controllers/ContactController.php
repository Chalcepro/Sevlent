<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
        {
            $all = DB::table('contacts')->orderBy('created_at', 'desc')->get();
            return response()->json($all, 200);
        }

    public function store(Request $request)
    {
            $validated = $request->validate([
            'name'     => 'required|string|max:75',
            'email'    => 'required|email:rfc,dns|max:75',
            'phone'    => 'required|string|max:20',
            'comments' => 'nullable|string|max:300',
            ]);

            DB::table('contacts')->insert([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'phone'    => $validated['phone'],
            'message'  => $validated['comments'],  // map field names
            'created_at' => now(),
            'updated_at' => now(),
            ]);

        try {
            DB::table('contacts')->insert($validated);
            return response()->json([
                'success' => true,
                'message' => 'Contact form submitted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error submitting form'
            ], 500);
        }
    }
}