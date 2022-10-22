<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tableuser;

class tableusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tableuser::all();
        return response()->json($data, 200);
    }

    public function userBloodGroup(Request $request)
    {
        $data = tableuser::where('bloodGroup',$request->get('bloodGroup'))->get();
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function signup(Request $request)
    {
        if (tableuser::where('email', '=', ($request->email))->exists()) {
            return response()->json(['error'=> "Email already registered"]);
        }

            $user = tableuser::create($request->all());

            return response()->json($user);
    }
    public function login(Request $request)
    {

        $user = tableuser::where('email', $request->get('email'))->where('password', $request->get('password'))->first();

        if($user == null) {
            return response()->json(['error'=> 'Email or password that you are entered is wrong'],201);
        }

        return response()->json($user);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $data = tableuser::where('id','=',$id)->first();
        $data = tableuser::findOrFail($id);
        $data->fullName = $request->fullName;
        $data->NIC = $request ->NIC;
        $data->phone_no = $request->phone_no;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->gender = $request->gender;
        $data->bloodGroup = $request->bloodGroup;
        $data->save();

        return response()->json($data,200);
    }

    public function changePassword(Request $request, $id)
    {
        $data = tableuser::where('id','=',$id)->first();
        $data->password = $request->password;
        $data->save();

        return response()->json($data,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
