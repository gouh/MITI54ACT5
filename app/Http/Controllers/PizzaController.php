<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Pizza;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PizzaController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizza.list', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function createView(): View
    {
        $ingredientes = Ingrediente::all();
        return view('pizza.create', compact('ingredientes'));
    }

    /**
     * @param $id
     * @return View
     */
    public function editView($id): View
    {
        $ingredientes = Ingrediente::all();
        $pizza = Pizza::find($id);

        $ingredientes_pizza = array_map(function ($ingrediente) {
            return $ingrediente['ingrediente_id'];
        }, $pizza->ingredientes()->get()->toArray());

        return view('pizza.edit', compact('ingredientes', 'pizza', 'ingredientes_pizza'));
    }

    /**
     * @param $id
     * @return View
     */
    public function showView($id): View
    {
        $pizza = Pizza::find($id);
        return view('pizza.show', compact('pizza'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $parameters = $request->post();
        if (isset($parameters['ingrediente']) && !empty($parameters['ingrediente'])) {
            $ingrediente = Ingrediente::find($parameters['ingrediente']);
        } else {
            return Redirect::back()->with('error', 'Es necesario seleccionar ingredientes');
        }

        $pizza = new Pizza();
        $pizza->nombre = $parameters['nombre'];
        $pizza->save();
        $pizza->ingredientes()->attach($ingrediente);

        return Redirect::to('pizzas')->with('success', 'Se creo una nueva pizza');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function update($id): RedirectResponse
    {
        $pizza = Pizza::find($id);
        $parameters = request()->post();

        if (isset($parameters['ingrediente']) && !empty($parameters['ingrediente'])) {
            $ingrediente = Ingrediente::find($parameters['ingrediente']);
        } else {
            return Redirect::back()->with('error', 'Es necesario seleccionar ingredientes');
        }

        $pizza->nombre = $parameters['nombre'];
        $pizza->save();

        $pizza->ingredientes()->sync([]);
        $pizza->ingredientes()->attach($ingrediente);

        return Redirect::to('/pizzas')->with('success', 'Se actualizo ' . $parameters['nombre']);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $pizza = Pizza::find($id);
        $nombre = $pizza->nombre;
        $pizza->ingredientes()->sync([]);
        $pizza->delete();
        return Redirect::to('/pizzas')->with('success', 'Se elimino ' . $nombre);
    }

}
