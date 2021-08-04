<?php

namespace App\Repositories\Eloquent;

use App\Repositories\IEloquentRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository implements IEloquentRepository
{
    /**
     * @var Model
     */
     protected $model;

    /**
     * Constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
    * @param array $data
    * @return Model
    */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
    * @param array $attr
    * @param int $id
    * @return bool
    */
    public function update(array $attr, int $id): bool
    {
        return $this->model->query()->where('id', $id)->update($attr);
    }

    /**
    * @param array $id
    * @return bool|null
    */
    public function delete(int $id): ?bool
    {
        return $this->model->where('id', $id)->delete();
    }

    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
    * @param $query
    * @return Collection
    */
    public function search($query): ?Collection
    {
        $queryBuilder = $this->model->query();

        foreach($this->model->getFillable() as $label) {
            $queryBuilder->orWhere($label, 'LIKE' , "%$query%");
        }

        return $queryBuilder->get();
    }
}
