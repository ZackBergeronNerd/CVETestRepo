<?php

class PartnerInvitesController extends \BaseController {

    /**
     * Display a view for accepting a partner invitation
     * GET /accept_invitation
     *
     * @return Response
     */
    public function accept_invitation($code)
    {
        if(!is_null($partner_invite = PartnerInvite::where('invite_code', $code)->first())) {
            $original_user_website = UserWebsite::find($partner_invite->user_website_id);

            if(Auth::check()) {
                // An account is logged in
                if($partner_invite->partner_email == Auth::user()->email) {
                    // Logged in user is the prospective partner, add user_website, redirect to packages
                    $new_user_website = new UserWebsite;

                    $new_user_website->website_id = $original_user_website->website_id;
                    $new_user_website->user_id = Auth::user()->id;
                    $new_user_website->subdomain = $partner_invite->subdomain;

                    if($new_user_website->save()) {
                        $partner_invite->delete();
                        Session::flash('status_success', 'Congratulations! Your new partner package can be found below.');
                    } else {
                        Session::flash('status_error', 'There was an error creating your partner package');
                    }
                    return Redirect::to('user_websites');
                } else if(Auth::user()->email != $partner_invite->partner_email) {
                    // Logged in user is not the prospective partner
                    Session::flash('status_error', 'You were not the intended recipient for that invite');
                    return Redirect::to('dashboard');
                }
            } else {
                // An account is not logged in, create registration view, with invite code attached, pre-fill email
                Session::set('invite_code', $code);
                Session::set('partner_email', $partner_invite->partner_email);
                Session::set('partner_first', $partner_invite->partner_first);
                Session::set('partner_last', $partner_invite->partner_last);

                if(is_null(User::where('email', $partner_invite->partner_email)->first())) {
                    return Redirect::to('/register');
                } else {
                    return Redirect::to('/');
                }

            }
        } else {
            Session::flash('status_error', 'Invitation has already been accepted');
            return Redirect::to("/");
        }
    }

	/**
	 * Display a listing of the resource.
	 * GET /partnerinvites
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /partnerinvites/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /partnerinvites
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /partnerinvites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /partnerinvites/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /partnerinvites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /partnerinvites/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}