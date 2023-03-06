<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use JeroenDesloovere\VCard\VCard;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res = Http::get('https://api.canzell.com/__public__/user-service/users?key=email');

        $raw_users = $res->json();
        $users = array_slice($raw_users, 1, 20);

        return Inertia::render('Users', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $res = Http::get('https://api.canzell.com/__public__/user-service/users?key=id');

        $users = $res->json();
        $user = $users[$id];

        return Inertia::render('User', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }

    public function vcf(string $id)
    {
        $res = Http::get('https://api.canzell.com/__public__/user-service/users?key=id');

        $users = $res->json();
        $user = $users[$id];
        // define vcard
        $vcard = new VCard();

        // add personal data
        $vcard->addName($user['last_name'], $user['first_name'], '', '', '');

        // add work data
        $vcard->addCompany('Canzell Realty');
        $vcard->addJobtitle($user['roles'][0]);
        $vcard->addRole($user['roles'][0]);
        $vcard->addEmail($user['email']);
        $vcard->addPhoneNumber($user['phone'], 'PREF;WORK');
        $vcard->addPhoneNumber($user['phone'], 'WORK');
        $file_path = storage_path('app/public/image.jpg');
        // Function to write image into file
        file_put_contents($file_path, file_get_contents($user['mug']));

        $vcard->addPhoto($file_path);
        return $vcard->download();
    }
}