<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Repositories\IAgendaRepository;
use App\Http\Requests\AgendaPostRequest;
use App\Http\Requests\AgendaPutRequest;
use Illuminate\View\View;

class AgendaController extends Controller
{

    private $agenda;

    /**
     * @param IAgendaRepository $agendaRepository
     */
    public function __construct(IAgendaRepository $agendaRepository)
    {
        $this->agenda = $agendaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $agendas = $this->agenda->all();

        return view('agendas.index', compact('agendas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {

        $request->validate([
            'search' => 'required|string|max:64',
        ]);

        $agendas = $this->agenda->search($request->search);

        return view('agendas.index', compact('agendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AgendaPostRequest  $request
     * @return RedirectResponse
     */
    public function store(AgendaPostRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['tell'] = onlyNumber($data['tell']);

        if($this->agenda->create($data)) {
            return redirect('agendas')
                    ->with('success', __("agenda.contact_created_successfully"));
        }

        return redirect('agendas')
                    ->withErrors(__("agenda.error_creating_contact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AgendaPutRequest  $request
     * @param  integer  $id
     * @return RedirectResponse
     */
    public function update(AgendaPutRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $data['tell'] = onlyNumber($data['tell']);

        if($this->agenda->update($data, $id)) {
            return redirect('agendas')
                    ->with('success', __('agenda.contact_updated_successfully'));
        }

        return redirect('agendas')
                    ->withErrors(__('agenda.error_updating_contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        if($this->agenda->delete($id)) {
            return redirect('agendas')
                    ->with('success', __('agenda.contact_deleted_successfully'));
        }

        return redirect('agendas')
                    ->withErrors(__('agenda.error_deleting_contact'));
    }
}
