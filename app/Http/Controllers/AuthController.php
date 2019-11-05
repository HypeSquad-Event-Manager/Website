<?php


namespace App\Http\Controllers;

use Socialite;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth')->only('handleLogout');
    }

    public function redirectToProvider()
    {
        return Socialite::with('discord')->setScopes(['identify', 'guilds'])->redirect();
    }

    public function handleProviderCallback()
    {
        if ($dUser = Socialite::with('discord')->user())
        {
            $user = User::updateOrCreate(
                ['userid' => $dUser->getId()],
                [
                    'username' => $dUser->getName(),
                    'discrim' => $dUser->user['discriminator'],
                    'avatar' => $dUser->getAvatar(),
                    'accessToken' => $dUser->token
                ]
            );
            Auth::login($user, true);
            return redirect()->intended('/');
        }
    }

    public function handleLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
