<?php
//Event::listen('auth.login', 'UsersController@onLogin');

/*
Event::listen('auth.login', function($event)
{
    if(Session::has('invite_code')) {
        $partner_invite = PartnerInvite::where('invite_code', Session::get('invite_code'))->first();
        $original_user_website = UserWebsite::find($partner_invite->user_website_id);
        $new_user_website = new UserWebsite;

        $new_user_website->website_id = $original_user_website->website_id;
        $new_user_website->user_id = Auth::user()->id;
        $new_user_website->subdomain = $partner_invite->subdomain;

        if($new_user_website->save()) {
            if(Session::has('new_user')) {
                Session::flash('status_success', 'Congratulations! Your new partner package can be found below. Make sure to fill out the rest of <a href="/profile">your profile here.</a>');
            } else {
                Session::flash('status_success', 'Congratulations! Your new partner package can be found below.');
            }
        } else {
            Session::flash('status_error', 'There was an error creating your partner package');
        }
    }
});
*/