<?php


namespace App\Http\Controllers;
use App\User;
use App\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


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
     * check mobile exist or not
     * OTP Save
     */

    public function store(Request $r)
    {
        //
        $user   = new User();
        $post   =   $r->all();       
        $validator =  Validator::make($r->all(),[
            'mobile' => 'required|unique:users|min:10|max:10',      
        ],
        [ 
            'mobile.required' => 'Mobile no must be required.',
            'mobile.digit' => 'Mobile no must be at least 10 Digit.'
        ]
    );

    if ($validator->fails()) {           
        return response()->json(['status'=>false,'code'=>401,'message'=>'Mobile No. not valid']);
    }    
    $user['mobile'] =   $post['mobile'];
    $user->save();
    $otp   =    new Otp();
    $otps  =    rand(5000,9999);
    $otp['mobile'] =   $post['mobile'];
    $otp['otp']    =   $otps;
    $otp->save();
    $dataArr    =   array('otp'=>$otps,'mobile'=> $post['mobile']);
        return response()->json(['status'=>true,'code'=>200,'data'=>$dataArr,'message'=>'Added Successfull.']);       
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
