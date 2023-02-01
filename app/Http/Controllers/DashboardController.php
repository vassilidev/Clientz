<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        //TODO : Implement Statistics ($ in date Range, new clients, appointments, invoices ...)

        return view('pages.panel.dashboard');
    }
}