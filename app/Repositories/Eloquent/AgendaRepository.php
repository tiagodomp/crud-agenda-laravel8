<?php

namespace App\Repositories\Eloquent;

use App\Models\Agenda;
use App\Repositories\IAgendaRepository;
use Illuminate\Support\Collection;

class AgendaRepository extends BaseRepository implements IAgendaRepository
{

   /**
    * AgendaRepository constructor.
    *
    * @param Agenda $model
    */
   public function __construct(Agenda $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();
   }

   /**
    * @return Collection
    */
   public function count(): int
   {
       return $this->model->count();
   }
}
