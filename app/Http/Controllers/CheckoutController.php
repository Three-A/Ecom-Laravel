<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Payment;

class CheckoutController extends Controller
{
    public function step1()
    {
      if(Auth::check()){
        return redirect()->route('checkout.shipping');
      }

      return redirect('login');
    }

    public function shipping()
    {
      return view('front.shipping-info');
    }
    public function payment()
    {
      return view('front.payment');
    }
    public function store(Request $request)
  {
    $this->validate($request,[
        'nama'=>'required',
        'nama_bank'=>'required',
        'no_bank'=>'required',
        'Jumlah_Transfer'=>'required',
        'image'=>'image|mimes:png,jpg,jpeg|max:10000',
    ]);
    //image upload
    $image=$request->image;
    if($image){
      $imageName=$image->getClientOriginalName();
      $image->move('konfirmasi',$imageName);
      $formInput['image'] =$imageName;
    }
      Payment::create($request->all());
      //Auth::user()->order()->create($request->all());
        return redirect()->route('home');
  }
}
