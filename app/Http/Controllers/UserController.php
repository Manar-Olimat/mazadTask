<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    //
      // show register/create form
      public function create(){
        return view('users.signup_user');
    }

    
//create new user
public function store(Request $request){
  $formFields=$request->validate(
  [
      'name' => ['required', 'min:3'],
              'email' => ['required', 'email', Rule::unique('users', 'email')],
              'password' => 'required|confirmed|min:6'
              ]
  );
  
  //hash password
  $formFields['password']=bcrypt($formFields['password']);
  
  
  //create user
  $user=User::create($formFields);
  
  // /auto log
  auth()->login($user);
  
  return redirect('/');
  
  }


    //show login form

public function login(){
  return view('users.login');
}

//authenticate user

public function authenticate(Request $request){
   
  $formFields=$request->validate(
      [
                  'email' => ['required', 'email'],
                  'password' => 'required'
                  ]
      );
// dd($formFields);
      if(auth()->attempt($formFields)){
          $request->session()->regenerate();

          return redirect('/');
  
      }
 return back()->withErrors(
  [
      'email'=> 'Invalid Credentials'
  ]
 )->onlyInput('email');     
}


// logout

public function logout(Request $request){

  auth()->logout();

  $request->session()->invalidate();
  $request->session()->regenerateToken();

  return redirect('/')->with('message','You have been logged out!');
  

}




// GOOGLE

public function redirectToGoogle(){
  return Socialite::driver('google')->redirect();

}

public function handleGoogleCallback(){

  try {
        
    $user = Socialite::driver('google')->user();
    // dd($user);
      // echo ('test successful');
      // check if they are an existing user
$existingUser=User::where('google_id',$user->id)->first();


if($existingUser){
      Auth::login($existingUser, true);
}

else{
// create a new user
      $newUser = User::create(
        [
          'name' => $user->name,
          'email'=>$user->email,
          'google_id' => $user->id,
          'password'=> encrypt('123456Manar@')
        ]
      );
      Auth::login($newUser, true);

}

    return redirect()->to('/');

} catch (Exception $e) {
      // return redirect('/login');
    // dd($e->getMessage());
      echo ($e->getMessage());
}



}



// FACEBOOK

public function redirectToFacebook(){
  return Socialite::driver('facebook')->redirect();

}

public function handleFacebookCallback(){

  

    try {
        
      $user = Socialite::with('facebook')->user();
      // dd($user->id);
      $id = $user->id;
  $existingUser=User::where('facebook_id',$id)->first();
  
  
  if($existingUser){
        Auth::login($existingUser, true);
  }
  
  else{
  // create a new user
        $newUser = User::create(
          [
            'name' => $user->name,
            'email'=>$user->email,
            'facebook_id' => $id,
            'password'=> encrypt('123456Manar@')

          ]
        );
        Auth::login($newUser, true);
  
  }
  
      return redirect()->to('/');
  
  } catch (Exception $e) {
        // return redirect('/login');
      // dd($e->getMessage());
        echo ($e->getMessage());
  }
  
  

}















}
