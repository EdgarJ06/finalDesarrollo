<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entradas = Entrada::paginate(10);
        return view('Blog.index', compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'etiquetas' => 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('imagenes', 'public');
            $data['imagen'] = $path;
        }

        Entrada::create($data);

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /*return view('entradas.edit', compact('entrada'));*/

        return view('Blog.edit', [
            'entrada' => Entrada::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrada $entrada)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'etiquetas' => 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($entrada->imagen) {
                Storage::disk('public')->delete($entrada->imagen);
            }
            $path = $request->file('imagen')->store('imagenes', 'public');
            $data['imagen'] = $path;
        }

        Entrada::update($data);

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrada = delete();

        return redirect()->route('entradas.index')
            ->with('success', 'Entrada eliminada correctamente.');
    }
}
