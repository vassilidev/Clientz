<?php

namespace App\Http\Controllers;

use App\Http\Requests\Panel\Model\ClientRequest;
use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.panel.clients.indexClient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('pages.panel.clients.createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        $client = Client::create($request->validated());

        toast(__('crud.messages.create', ['model' => __('model.client')]), 'success');

        return redirect()->route('panel.client.show', $client);
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     *
     * @return View
     */
    public function show(Client $client): View
    {
        return view('pages.panel.clients.showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     *
     * @return View
     */
    public function edit(Client $client): View
    {
        return view('pages.panel.clients.editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param Client        $client
     *
     * @return RedirectResponse
     */
    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());

        toast(__('crud.messages.update', ['model' => __('model.client')]));

        return redirect()->route('panel.client.show', compact('client'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     *
     * @return RedirectResponse
     */
    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        toast(__('crud.messages.delete', ['model' => __('model.client')]));

        return redirect()->route('panel.client.index');
    }
}
