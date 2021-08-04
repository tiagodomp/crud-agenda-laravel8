<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function config(Request $request): RedirectResponse
    {

        $request->validate([
            'locale' => 'required|string|max:2',
        ]);

        App::setLocale($request->get("locale", "en"));

        if(App::currentLocale() == $request->get("locale")) {
            return redirect('agendas')
                ->with('success', __('agenda.set_locale_success'));
        }

        return redirect('agendas')
            ->withErrors(__('agenda.set_locale_error'));
    }
}
