<?php

namespace App\Http\Controllers;

use App\Models\mock_data;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
// use Illuminate\Support\Collection;


class mock_dataController extends Controller
{
    public function index()
    {
        return mock_data::all();
    }

    public function store(Request $request)
    {
        try {
            $mock_data = new mock_data();
            $mock_data->id = $request->id;
            $mock_data->first_name = $request->first_name;
            $mock_data->last_name = $request->last_name;
            $mock_data->email = $request->email;
            $mock_data->gender = $request->gender;
            $mock_data->ip_address = $request->ip_address;

            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');
                $allowedfileExtension = ['pdf', 'png', 'jpg'];
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if ($check) {
                    // $name = time() . $file->getClientOriginalName();
                    // $file->move('images', $name);
                    // $mock_data->image_path = $name;
                    $name = Str::uuid()->toString();
                    $file->move('images', $name);
                    $mock_data->image_path = $name;
                }
            }

            if ($mock_data->save()) {
                return response()->json(['status' => '201', 'message' => 'mock_data Create Successfully', 'data'=>$mock_data]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $mock_data = mock_data::findOrFail($id);
            $mock_data->id = $request->id;
            $mock_data->first_name = $request->first_name;
            $mock_data->last_name = $request->last_name;
            $mock_data->email = $request->email;
            $mock_data->gender = $request->gender;
            $mock_data->ip_address = $request->ip_address;

            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');
                $allowedfileExtension = ['pdf', 'png', 'jpg'];
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if ($check) {
                    // $name = time() . $file->getClientOriginalName();
                    // $file->move('images', $name);
                    // $mock_data->image_path = $name;
                    $name = Str::uuid()->toString();
                    $file->move('images', $name);
                    $mock_data->image_path = $name;
                }
            }

            if ($mock_data->save()) {
                return response()->json(['status' => '200', 'message' => 'mock_data Updated Successfully', 'data'=>$mock_data]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $mock_data = mock_data::findOrFail($id);

            if ($mock_data->delete()) {
                return response()->json(['status' => '200', 'message' => 'mock_data deleted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function getmock_dataById($id)
    {
        try {
        $mock_data =  mock_data::where('id', $id)
            ->get();
            if($mock_data){
                if(count($mock_data)==0){
                    return response()->json(['status' => '200', 'message' => 'mock_data deleted successfully', 'data'=>'not found']);
                }else{
                    return response()->json(['status' => '200', 'message' => 'mock_data deleted successfully', 'data'=>$mock_data]);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
