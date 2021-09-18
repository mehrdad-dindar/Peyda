<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Models\User;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'nullable|numeric',
        ]);
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('index');
    }

    public function loginPhone()
    {
        return view('auth.mobile_login');
    }

    public function loginEmail()
    {
        return view('auth.login-email');
    }

    public function doLoginEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only('email', 'password');
        $rememberMe = $request->input('remember_me');
        if (auth()->attempt($data, $rememberMe))
            return redirect()->route('index');
        else
            return redirect()->back()->withErrors('Either email or password is wrong.');
    }

    public function doLoginPhone(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'phone_num' => 'required|exists:users',
            //TODO فعال سازی ریکپچا
            /*'g-recaptcha-response' => ['required',new Recaptcha()],*/
        ]);
        $user = User::where('phone_num', $request->phone_num)->first();

        $token = Token::create([
            'user_id' => $user->id
        ]);
        $rememberMe = !empty($request->remember_me);
        if ($token->sendCode()) {
            session()->put("code_id", $token->id);
            session()->put("user_id", $user->id);
            session()->put("remember", $rememberMe);

            return redirect()->route('verify');
        }

        $token->delete();
        return redirect()->route('login')->withErrors([
            "Unable to send verification code"
        ]);
    }

    public function verify()
    {
        return view('auth.mobile_verify');
    }

    public function doVerify(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric'
        ]);

        if (!session()->has('code_id') || !session()->has('user_id'))
            return redirect()->route('login');

        $token = Token::where('user_id', session()->get('user_id'))->find(session()->get('code_id'));

        if (!$token || empty($token->id))
            return redirect()->route('login');

        if (!$token->isValid())
            return redirect()->back()->withErrors(['کد تأیید منقضی شده است.']);

        if ($token->code !== $request->get('code'))
            return redirect()->back()->withErrors(['کد تأیید اشتباه است.']);

        $token->update([
            'used' => true
        ]);

        $user = User::find(session()->get('user_id'));

        $rememberMe = session()->get('remember');

        auth()->login($user, $rememberMe);

        return redirect()->route('dashboard');

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->back();
    }

}
