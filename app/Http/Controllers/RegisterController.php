<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return register::all();
    }

    public function store(Request $request)
    {
        try {
            $register = new register();
            $register->username = $request->username;
            $register->password = app('hash')->make($request->password);
            $register->role = $request->role;
            if ($register->save()) {
                return response()->json(['status' => 'success', 'message' => 'register success']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $register = register::findOrFail($id);
            $register->username = $request->username;
            $register->role = $request->role;

            if ($register->save()) {
                return response()->json(['status' => 'success', 'message' => 'updated']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $register = register::findOrFail($id);

            if ($register->delete()) {
                return response()->json(['status' => 'success', 'message' => 'deleted']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
