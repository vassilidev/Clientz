<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Cashier\Exceptions\IncompletePayment;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(): void
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Transaction $transaction
     * @return Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }


    /**
     * @throws IncompletePayment
     */
    public function charge(Request $request, Appointment $appointment): RedirectResponse
    {
        /** @var Client $client */
        $client = $appointment->client;

        $client->createOrGetStripeCustomer();
        $client->charge($appointment->due_amount, $request->payment_method);

        return redirect()->back();
    }
}
