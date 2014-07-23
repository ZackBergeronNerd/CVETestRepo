<?php namespace CVE\Client;

use CVE\Repositories\EloquentRepository;

// Client interfaces for all Eloquent Database Interactions on Client Model
class EloquentClientRepository extends EloquentRepository implements ClientRepositoryInterface {

  	protected $model;
  	protected $user;
  	protected $user_client;

	public function __construct(\Client $model,
                                \User $user,
                                \User_client $user_client) {
		$this->model = $model;
		$this->user = $user;
		$this->user_client = $user_client;
	}
 
	/**
	* Create a new User_client entry for the current client and passed user_id
	*
	* @param integer $client_id
	* @param integer $user_id
	*/
	public function addToUser($client_id, $user_id) {
		$user = $this->user->find($user_id);
		$client = $this->model->find($client_id);

		if($user && $client) {
			return $this->user_client->create(['user_id' => $user->id, 'client_id' => $client->id]);
		}
	}

}