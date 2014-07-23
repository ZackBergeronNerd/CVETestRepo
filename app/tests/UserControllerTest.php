<?php
use CVE\Services\Validation\ValidationException;

class UserControllerTest extends TestCase {

	public function mock($class) {
		$mock = Mockery::mock($class);
		$this->app->instance($class, $mock);

		return $mock;
	}

	public function setUp()
	{
		parent::setUp();

		$this->user = $this->mock('CVE\User\UserRepositoryInterface');
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testStoreSuccess() {
		// Arrange
		$this->user->shouldReceive('create')
					->once()
					->andReturn('asdf');

		// Act
		$this->call('POST', 'users');

		// Assert
		$this->assertRedirectedTo('dashboard');
		$this->assertSessionHas('status_success');
	}

	public function testStoreFailure() {
		// Arrange
		$this->user->shouldReceive('create')
					->once()
					->andThrow(new ValidationException('fail'));

		// Act
		$this->call('POST', 'users');

		// Assert
		$this->assertRedirectedTo('register');
		$this->assertSessionHasErrors();
	}
	
	
	public function testUpdateSuccess() {
		// Arrange
		$this->user->shouldReceive('updateById')
					->once()
					->andReturn(true);

		// Act
		$this->call('PUT', 'users/1');

		// Assert
		$this->assertRedirectedTo('dashboard');
		$this->assertSessionHas('status_success');
	}
	
	
	public function testUpdateFailure() {
		// Arrange
		$this->user->shouldReceive('updateById')
					->once()
					->andThrow(new ValidationException('fail'));

		// Act
		$this->call('PUT', 'users/1', [], [], ['HTTP_REFERER' => 'http://localhost/redirect_back_test']);
		
		// Assert
		$this->assertRedirectedTo('redirect_back_test');
		$this->assertHasOldInput();
		$this->assertSessionHasErrors();
	}

	public function testDeleteSuccess() {
		// Arrange
		$this->user->shouldReceive('getById')->once()->andReturn(true);
		$this->user->shouldReceive('delete')->once()->andReturn(true);

		// Act
		$this->call('DELETE', 'users/1');

		// Assert
		$this->assertResponseOk();
	}
	
	public function testDeleteFailure() {
		// Arrange
		$this->user->shouldReceive('getById')->once()->andReturn(false);

		// Act
		$this->call('DELETE', 'users/1');
		
		// Assert
		$this->assertResponseStatus(400);
	}
}