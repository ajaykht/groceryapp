<?php

namespace App\Http\Controllers;
use App\Otp;
use App\User;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
    public function destroy($mobile)
    {
        //print_r($mobile); die;
        Otp::where('mobile', $mobile)->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\v1\Vendors  $vendors
     * @return \Illuminate\Http\Response
     * check OTP 
     * Destroy OTP
     */
    public function checkOtp(Request $r) {
     $chkOtp =  Otp::where(array( 'mobile'=> $r->mobile,'otp'=>$r->otp ))->get();
        if(count($chkOtp)>0) {
            $dataArr = User::where('mobile',$r->mobile)->get();
            $this->destroy($r->mobile);
            return response()->json(['status'=>true,'code'=>200,'data'=>$dataArr]);
        } else {
            return response()->json(['status'=>false,'code'=>401,'message'=>"OTP Not valid"]);
        }
    }

}
