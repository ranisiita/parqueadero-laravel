<?php
namespace App\Http\Controllers;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::getVehiculos();
        return view('vehiculos.index', compact('vehiculos'));
    }
    public function create()
    {
        return view('vehiculos.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|max:10',
            'tipo' => 'required',
        ]);

        Vehiculo::create($request->all()); // Cambio aquí - era createVehiculo

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo registrado.');
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'placa' => 'required|max:10',
            'tipo' => 'required',
        ]);

        $vehiculo->update($request->all()); // Cambio aquí - era updateVehiculo

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo actualizado.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete(); // Cambio aquí - era deleteVehiculo

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehículo eliminado.');
    }
    public function edit(Vehiculo $vehiculo)  // ← ESTE FALTABA
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }
}
