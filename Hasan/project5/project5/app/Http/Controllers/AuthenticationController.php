<?php // AuthenticationController

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class AuthenticationController extends Controller

{

    public function register(Request $request)

    {

        $attr = $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|string|email|unique:users,email',

            'password' => 'required|string|min:6|confirmed'

        ]);

        $user = User::create([

            'name' => $attr['name'],

            'password' => bcrypt($attr['password']),

            'email' => $attr['email']

        ]);
        //Log::channel('logs')->info('Register:',$request->all());
        log::channel('Register')->info('Register', [ 'action'=> Route::current()->getActionMethod()]);

        return response()->json(['message' => 'Registration successful'], 200);

    }

    public function login(Request $request)

    {


        $attr = $request->validate([

            'email' => 'required|string|email|',

            'password' => 'required|string|min:6'

        ]);

        if (!Auth::attempt($attr)) {

            return response()->json(['message' => 'Credentials not match'], 401);

        }

        $response = [

            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer',

            $user = Auth::user()

        ];
     //  Log::channel('logs')->info('Ingelogd:',$request->all());
        log::channel('Ingelogd')->info('Ingelogd', [ 'action'=> Route::current()->getActionMethod()]);

        return response()->json($response, 200);

    }

    public function logout()
    {

        auth()->user()->tokens()->delete();

        log::channel('logout')->info('logout', [ 'action'=> Route::current()->getActionMethod()]);

        return response()->json(['message' => auth()->user()->tokens()], 200);


    }

}
