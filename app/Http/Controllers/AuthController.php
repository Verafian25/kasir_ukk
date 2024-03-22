<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    private $auth;
    private $valdation;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
        $this->valdation = [
            'username' => ['required'],
            'password' => ['required']
        ];
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate($this->valdation);
        $data = $this->auth->loginProcess($request);

        if ($data) {
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('auth.login');
        }
    }

    public function logoutProcess(){
        session()->forget('user');
        return redirect()->route('auth.login');
    }
}
