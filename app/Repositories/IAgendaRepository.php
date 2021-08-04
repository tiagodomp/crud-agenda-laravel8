<?php
namespace App\Repositories;

use App\Models\Agenda;
use Illuminate\Support\Collection;

interface IAgendaRepository
{
   public function all(): Collection;

   public function count(): int;
}
