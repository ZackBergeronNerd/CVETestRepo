<?php namespace CVE\Clearview;

interface ClearviewRepositoryInterface {

    /**
     * @param $user_id
     * @return int
     */
    public function user_website_ids($user_id);

    /**
     * @param $user_id
     * @return array
     */
    public function user_websites($user_id);

    /**
     * @param $user_id
     * @param $client_id
     * @return array
     */
    public function user_websites_by_client($user_id, $client_id);

    /**
     * @return int
     */
    public function sends();

    /**
     * @param $user_id
     * @return int
     */
    public function sends_by_user($user_id);

    public function sends_by_user_and_client($user_id, $client_id);

    /**
     * @param $user_website_id
     * @return int
     */
    public function sends_by_website($user_website_id);

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function sends_by_website_and_client($user_website_id, $client_id);

    /**
     * @return int
     */
    public function opens();

    /**
     * @param $user_id
     * @return int
     */
    public function opens_by_user($user_id);

    public function opens_by_user_and_client($user_id, $client_id);

    /**
     * @param $user_website_id
     * @return int
     */
    public function opens_by_website($user_website_id);

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function opens_by_website_and_client($user_website_id, $client_id);

    /**
     * @return int
     */
    public function page_opens();

    /**
     * @param $user_id
     * @return int
     */
    public function page_opens_by_user($user_id);

    public function page_opens_by_user_and_client($user_id, $client_id);

    /**
     * @param $user_website_id
     * @return int
     */
    public function page_opens_by_website($user_website_id);

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function page_opens_by_website_and_client($user_website_id, $client_id);

    /**
     * @return int
     */
    public function open_rate();

    /**
     * @param $user_id
     * @return int
     */
    public function open_rate_by_user($user_id);

    public function open_rate_by_user_and_client($user_id, $client_id);

    /**
     * @param $user_website_id
     * @return int
     */
    public function open_rate_by_website($user_website_id);

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function open_rate_by_website_and_client($user_website_id, $client_id);

    /**
     * @return int
     */
    public function email_opens();

    /**
     * @param $user_id
     * @return int
     */
    public function email_opens_by_user($user_id);

    public function email_opens_by_user_and_client($user_id, $client_id);

    /**
     * @param $user_website_id
     * @return int
     */
    public function email_opens_by_website($user_website_id);

    /**
     * @param $user_website_id
     * @param $client_id
     * @return int
     */
    public function email_opens_by_website_and_client($user_website_id, $client_id);
}