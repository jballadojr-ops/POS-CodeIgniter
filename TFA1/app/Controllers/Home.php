<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function about(): string
    {
        return view('about');
    }

    public function customers(): string
    {
        return view('customers', [
            'names' => ['Avery Santos', 'Beatriz Cruz', 'Caleb Morgan', 'Diana Reyes'],
        ]);
    }

    public function users(): string
    {
        return view('users', [
            'names' => ['Avery Santos', 'Beatriz Cruz', 'Caleb Morgan', 'Diana Reyes'],
        ]);
    }
    public function email(): string
{
    return view('Email', [
        'emails' => [
            'juan@example.com',
            'maria@example.com',
            'pedro@example.com',
            'ana@example.com'
        ],
    ]);
}
}
