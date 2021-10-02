<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // atsakingas uz atvaizdavima
    public function index()
    {
        $authors=Author::all(); // atlieka SELECT *FROM Authors DB
        return view("author.index", ['authors'=>$authors]); // perduoda i index informacija
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // grazink vaizda author create
       return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author= new Author;
        // author- objektas,/ -> DB lentele stulpelio pav./ = - GET arba POST
        // ->author_name- pavadinimas is formos
        $author->name=$request->author_name;
        $author->surname=$request->author_surname;
        $author->username=$request->author_username;

        $author->save(); // kai surasomi duomenys- issaugoma. Vietoj Insert ir ideda i DB

        return redirect()->route('author.index'); // atlieka nukelima i index psl
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
