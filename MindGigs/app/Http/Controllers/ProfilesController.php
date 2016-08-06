<?php

namespace App\Http\Controllers;

use File;
use Auth;
use App\Profile;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Input as Input;

class ProfilesController extends Controller
{
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required','briefdescription' => 'required','address' => 'required','languages' => 'required','about' => 'required','interests' => 'required',  
        ]);
    }

    protected function create()
    {
		$frame_str="http://localhost:8000/auth/empty";
		$input1 = Input::only('proftitle');
		$input2 = Input::only('address');
		$input3 = Input::only('langs');
		$input4 = Input::only('about');
		$input5 = Input::only('interests');
			
		$id = Auth::id();
		$usr = User::find($id);

		$logprof = new Profile;
		$logprof->username = $usr->name;
		$logprof->briefdescription = $input1['proftitle'];
		$logprof->address = $input2['address'];
		$logprof->languages = $input3['langs'];
		$logprof->about = $input4['about'];
		$logprof->interests = $input5['interests'];


		$logprof->save();
			//	File::put('C:\wamp\bin\apache\apache2.4.9\htdocs\asgn3\resources\views\auth\test.blade.php', $input['code']);
			//	return vreturn Redirect::to('login');iew('auth\test');
	//	return Redirect::to('/profile');
		
    }
}