<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreDishRequest;
use App\Dish;
use App\Main;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dish = Dish::all();
      return view ('dishes.dishList', compact('dish'));
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
    public function store(StoreDishRequest $request)
    {
      Dish::create([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'image_url' => $request->input('image_url'),
      'price' => $request->input('price'),
      'main_id' => $request->input('main_id'),
    ]);

    return redirect()->route('dish')->with('ZINUTE', 'PRODUKTAS ISSAUGOTAS');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
     public function adddish(){
       $mains = Main::all();

       return view('dishes.create', compact('mains'));
    }
    public function show($id)
    {

      $dish=Dish::findOrFail($id);
      return view ('dishes.singledish', compact('dish'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
      // $this->authorize('update',Product::class);
      $main = Main::all();
      // $dish = Dish::all();
      return view ('dishes.edit', compact('dish', 'main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */

    public function update(StoreDishRequest $request, Dish $dish)
    {
      $dish->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'image_url' => $request->input('image_url'),
        'price' => $request->input('price'),
        'main_id' => $request->input('main_id'),
]);
return redirect()->route('dish')->with('ZINUTE', 'PRODUKTAS ISSAUGOTAS');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // $this->authorize('delete',Dish::class);

  Dish::findOrFail($id)->delete();
  return redirect()->route('dish')->with('ZINUTE','Sekmingai istrinta');
    }
}
