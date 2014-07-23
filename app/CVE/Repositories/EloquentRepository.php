<?php namespace CVE\Repositories;

abstract class EloquentRepository {

  /**
   * Make a new instance of the entity to query on, utilizing eager loading
   *
   * @param array $with
   */
  public function make(array $with = array()) {
    return $this->model->with($with);
  }

  /**
   * Return all entities
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function getAll() {
    return $this->model->all();
  }

  /**
   * Find an entity by id
   *
   * @param int $id
   * @param array $with
   * @return Illuminate\Database\Eloquent\Model
   */
  public function getById($id, array $with = array()) {
    $query = $this->make($with);

    return $query->find($id);
  }

  /**
   * Find a single entity by key value
   *
   * @param string $key
   * @param string $value
   * @param array $with
   */
  public function getFirstBy($key, $value, array $with = array()) {
    return $this->make($with)->where($key, '=', $value)->first();
  }

  /**
   * Find many entities by key value
   *
   * @param string $key
   * @param string $value
   * @param array $with
   */
  public function getManyBy($key, $value, array $with = array()) {
    return $this->make($with)->where($key, '=', $value)->get();
  }

  /**
   * Return all results that have a required relationship
   *
   * @param string $relation
   */
  public function has($relation, array $with = array()) {
    $entity = $this->make($with);

    return $entity->has($relation)->get();
  }

  /**
   * Create new entities with array of fields and values
   *
   * @param array $fields
   */
   public function create($fields) {
     return $this->model->create($fields);
   }

   /**
    * Create new entities with array of fields and values
    *
    * @param array $fields
    */
    public function updateById($id, $fields) {
      $model = $this->model->find($id);

      if($model) {
        return $model->update($fields);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id) {
      return $this->model->find($id)->delete();
    }
}
