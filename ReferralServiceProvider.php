<?php

namespace App\Referrals;

use

class ReferralServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::matched(function (RouteMatched $event) {
            if($event->route->named('referral')) {
                $this->storeInSession($event->route->parameter('user'));

                return redirect('/');
            }
            if (request()->has ('referer')) {
                $this->storeInSession(request ('referer'));
    
            }
        });
    }

}

public function register(): void
{
    $this->commands(ReferralCommissionPayout::class);
}

private function storeInSession(string $username):void
{
    //If the referred person already has an account, the referer
    //doesn't qualify for any potential commissions.
   if (Auth::check()) {
    return;
   }

   $referer = User::firstWhere(['username' => $username]);
   
   if($referer?->subscribed()) {
    Session::put('referer', $referer->username);
    Session::put('referer-origin', $_SERVER['HTTP_REFERER'] ?? null);
}
}

$provider = new ReferralServiceProvider();
