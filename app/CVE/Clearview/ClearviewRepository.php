<?php namespace CVE\Clearview;


class ClearviewRepository implements ClearviewRepositoryInterface {

    protected $user;
    protected $client;
    protected $website_send;
    protected $website_open;
    protected $website_page_open;

    /**
     * @param \User $user
     * @param \Client $client
     * @param \UserWebsite $website
     * @param \UserWebsiteSend $website_send
     * @param \UserWebsiteOpen $website_open
     * @param \UserWebsitePageOpen $website_page_open
     */
    public function __construct(\User $user,
                                \Client $client,
                                \UserWebsite $website,
                                \UserWebsiteSend $website_send,
                                \UserWebsiteOpen $website_open,
                                \UserWebsitePageOpen $website_page_open) {
        $this->user = $user;
        $this->client = $client;
        $this->website = $website;
        $this->website_send = $website_send;
        $this->website_open = $website_open;
        $this->website_page_open = $website_page_open;
    }


    /**
     * @param $user_id
     * @return array
     */
    public function user_website_ids($user_id)
    {
        $websiteIDs = array();

        if(count($user_websites = $this->website->where('user_id', $user_id)->get())) {

            foreach($user_websites as $user_website) {
                $websiteIDs[] .= $user_website->id;
            }
        }

        return $websiteIDs;
    }

    /**
     * @param $user_id
     * @return array
     */
    public function user_websites($user_id) {
        $websites = array();
        $count = 0;

        foreach($this->website->where('user_id', $user_id)->get() as $user_website) {

            $websites[$count]['id'] = $user_website->id;
            $websites[$count]['name'] = $user_website->website->name;

            $count++;
        }

        return $websites;
    }

    public function user_websites_by_client($user_id, $client_id) {
        $websites = array();
        $count = 0;

        foreach($this->website->where('user_id', $user_id)->get() as $user_website) {
            if( count($this->website_page_open->where('user_website_id', $user_website->id)->where('client_id', $client_id)->first()) ||
                count($this->website_open->where('user_website_id', $user_website->id)->where('client_id', $client_id)->first()) ||
                count($this->website_send->where('user_website_id', $user_website->id)->where('client_id', $client_id)->first())) {
                $websites[$count]['id'] = $user_website->id;
                $websites[$count]['name'] = $user_website->website->name;

                $count++;
            }
        }

        return $websites;
    }

    /**
     * @return int
     */
    public function sends()
    {
        $sends = count($this->website_send->all());

        return $sends;
    }

    /**
     * @param $user_id
     * @return int
     */
    public function sends_by_user($user_id)
    {
        $sends = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))->get());

        return $sends;
    }

    public function sends_by_user_and_client($user_id, $client_id)
    {
        $sends = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))->where('client_id', $client_id)->get());

        return $sends;
    }


    /**
     * @param $user_website_id
     * @return int
     */
    public function sends_by_website($user_website_id)
    {
        $sends = count($this->website_send->where('user_website_id', $user_website_id)->get());

        return $sends;
    }

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function sends_by_website_and_client($user_website_id, $client_id)
    {
        $sends = count($this->website_send->where('user_website_id', $user_website_id)->where('client_id', $client_id)->get());

        return $sends;
    }

    /**
     * @return int
     */
    public function opens()
    {
        $opens = count($this->website_open->all());

        return $opens;
    }

    /**
     * @param $user_id
     * @return int
     */
    public function opens_by_user($user_id)
    {
        $opens = count($this->website_open->whereIn('user_website_id', $this->user_website_ids($user_id))->get());

        return $opens;
    }

    public function opens_by_user_and_client($user_id, $client_id)
    {
        $opens = count($this->website_open->whereIn('user_website_id', $this->user_website_ids($user_id))->where('client_id', $client_id)->get());

        return $opens;
    }

    /**
     * @param $user_website_id
     * @return int
     */
    public function opens_by_website($user_website_id)
    {
        $opens = count($this->website_open->where('user_website_id', $user_website_id)->get());

        return $opens;
    }

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function opens_by_website_and_client($user_website_id, $client_id)
    {
        $opens = count($this->website_open->where('user_website_id', $user_website_id)->where('client_id', $client_id)->get());

        return $opens;
    }

    /**
     * @return int
     */
    public function page_opens()
    {
        $page_opens = count($this->website_page_open->all());

        return $page_opens;
    }

    /**
     * @param $user_id
     * @return int
     */
    public function page_opens_by_user($user_id)
    {
        $page_opens = count($this->website_page_open->whereIn('user_website_id', $this->user_website_ids($user_id))->get());

        return $page_opens;
    }

    public function page_opens_by_user_and_client($user_id, $client_id)
    {
        $page_opens = count($this->website_page_open->whereIn('user_website_id', $this->user_website_ids($user_id))->where('client_id', $client_id)->get());

        return $page_opens;
    }

    /**
     * @param $user_website_id
     * @return int
     */
    public function page_opens_by_website($user_website_id)
    {
        $page_opens = count($this->website_page_open->where('user_website_id', $user_website_id)->get());

        return $page_opens;
    }

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function page_opens_by_website_and_client($user_website_id, $client_id)
    {
        $page_opens = count($this->website_page_open->where('user_website_id', $user_website_id)->where('client_id', $client_id)->get());

        return $page_opens;
    }

    /**
     * @return float|int
     */
    public function open_rate()
    {
        $sends = $this->sends();
        $send_opens = count($this->website_send->where('package_opened', 1)->get());

        if($sends) {
            $open_rate = round(($send_opens / $sends * 100));
        } else {
            $open_rate = 0;
        }

        return $open_rate;
    }

    /**
     * @param $user_id
     * @return float|int
     */
    public function open_rate_by_user($user_id)
    {
        $sends = $this->sends_by_user($user_id);
        $send_opens = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))->where('package_opened', 1)->get());

        if($sends) {
            $open_rate = round(($send_opens / $sends * 100));
        } else {
            $open_rate = 0;
        }

        return $open_rate;
    }

    public function open_rate_by_user_and_client($user_id, $client_id)
    {
        $sends = $this->sends_by_user($user_id);
        $send_opens = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))
                            ->where('client_id', $client_id)
                            ->where('package_opened', 1)->get());

        if($sends) {
            $open_rate = round(($send_opens / $sends * 100));
        } else {
            $open_rate = 0;
        }

        return $open_rate;
    }

    /**
     * @param $user_website_id
     * @return float|int
     */
    public function open_rate_by_website($user_website_id)
    {
        $sends = $this->sends_by_website($user_website_id);
        $send_opens = count($this->website_send->where('user_website_id', $user_website_id)->where('package_opened', 1)->get());

        if($sends) {
            $open_rate = round(($send_opens / $sends * 100));
        } else {
            $open_rate = 0;
        }

        return $open_rate;
    }

    /**
     * @param $user_website_id
     * @param $client_id
     * @return float|int
     */
    public function open_rate_by_website_and_client($user_website_id, $client_id)
    {
        $sends = $this->sends_by_website_and_client($user_website_id, $client_id);
        $send_opens = count($this->website_send->where('user_website_id', $user_website_id)->where('client_id', $client_id)->where('package_opened', 1)->get());

        if($sends) {
            $open_rate = round(($send_opens / $sends * 100));
        } else {
            $open_rate = 0;
        }

        return $open_rate;
    }

    /**
     *
     */
    public function email_opens()
    {
        $email_opens = count($this->website_send->where('email_opened', 1)->get());
    }

    /**
     * @param $user_id
     * @return int
     */
    public function email_opens_by_user($user_id)
    {
        $email_opens = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))->where('email_opened', 1)->get());

        return $email_opens;
    }

    public function email_opens_by_user_and_client($user_id, $client_id)
    {
        $email_opens = count($this->website_send->whereIn('user_website_id', $this->user_website_ids($user_id))
                                ->where('client_id', $client_id)
                                ->where('email_opened', 1)->get());

        return $email_opens;
    }

    /**
     * @param $user_website_id
     * @return int
     */
    public function email_opens_by_website($user_website_id)
    {
        $email_opens = count($this->website_send->where('user_website_id', $user_website_id)->where('email_opened', 1)->get());

        return $email_opens;
    }

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function email_opens_by_website_and_client($user_website_id, $client_id)
    {
        $email_opens = count($this->website_send->where('user_website_id', $user_website_id)->where('client_id', $client_id)->where('email_opened', 1)->get());

        return $email_opens;
    }
}