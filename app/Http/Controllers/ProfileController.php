<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function addProfile(Request $request) {
      $profile = new Profile;
      $profile->fullname = $request->Input('fullname');
      $profile->save();
      $response = array('response' => 'profile Added!', 'success' => true);
      return $response;
    }
}
