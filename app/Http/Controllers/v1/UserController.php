<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin/vendors');
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
     * @param  \Illuminate\Validation\Validator  $validator
     * Crete user signup
     * Check mobile validation 
     */

    public function store(Request $request)
    {
        //
       // $user = new User();
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|unique:users|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>false,'code'=>201,'message'=>'1111.']);
           // return redirect('post/create')
                       // ->withErrors($validator)
                       // ->withInput();
        }
        //return response()->json(['status'=>true,'code'=>200,'message'=>'Added Successfull.']);
       // echo 22;
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\v1\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\v1\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\v1\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\v1\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
