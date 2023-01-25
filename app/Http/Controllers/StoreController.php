<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use App\Models\Store;
// use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    //

      // show register/create form
      public function create(){
        return view('users.signup_seller');
    }

    
//create new user
public function store(Request $request){
        // dd($request);
  $formFields=$request->validate(
  [
      'name' => ['required', 'min:3'],
              'email' => ['required', 'email'],
              'contact_email' => 'required|email',
              'contact_phone' => 'required|min:10',
              'type' => 'required'
              ]
  );
  
  //hash password
//   $formFields['password']=bcrypt($formFields['password']);
  
  
  //create user
  $owner=User::where(['email'=>$formFields['email']])->first();
        // dd($owner['id']);
        $data = [
            'name'=> $formFields['name'],
            'contact_email' =>$formFields['contact_email'] ,
              'contact_phone' => $formFields['contact_phone'],
              'type' => $formFields['type'],
              'user_id'=>1
        ];
        // dd($formFields);
// User::updated(['type'=>'seller']);
        $owner->type = 'seller';
        $owner->save();
  // /auto log
//   auth()->login($user);
  
  //create user
  $user=Store::create($data);
  
  // /auto log
  auth()->login($owner);
  
  return redirect('/');  
  }


  // profile

  public function show(){
    $user = Auth::user();
    $store = Store::where('user_id', $user->id)->first();
    $products = Products::all()->where('store_id', $store->id);

    // dd($products);
        return view('users.seller_profile', ['store' => $store], ['products'=>$products]);
    // return view('users.seller_profile');
  }
}
