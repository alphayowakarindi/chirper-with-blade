<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChirpRequest;
use App\Models\Chirp;

class ChirpController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('chirps.index', [
      'chirps' => Chirp::with('user')->latest()->get(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreChirpRequest $request)
  {
    $validated = $request->validated();

    $request->user()->chirps()->create($validated);

    return redirect(route('chirps.index'));
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Chirp  $chirp
   * @return \Illuminate\Http\Response
   */
  public function show(Chirp $chirp)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Chirp  $chirp
   * @return \Illuminate\Http\Response
   */
  public function edit(Chirp $chirp)
  {
    $this->authorize('update', $chirp);

    return view('chirps.edit', [
      'chirp' => $chirp,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Chirp  $chirp
   * @return \Illuminate\Http\Response
   */
  public function update(StoreChirpRequest $request, Chirp $chirp)
  {
    $this->authorize('update', $chirp);

    $validated = $request->validated();

    $chirp->update($validated);

    return redirect(route('chirps.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Chirp  $chirp
   * @return \Illuminate\Http\Response
   */
  public function destroy(Chirp $chirp)
  {
    $this->authorize('delete', $chirp);

    $chirp->delete();

    return redirect(route('chirps.index'));
  }
}
