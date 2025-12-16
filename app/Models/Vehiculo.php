<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Vehiculo extends Model
{
    use SoftDeletes;

    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    static public function getVehiculos()
    {
        return self::all(); // Cambio aquí: all() no getAll()
    }

    static public function getVehiculoById($id)
    {
        return self::find($id); // Este está correcto
    }

    public function updateVehiculo(Request $request)
    {
        return $this->update($request->all()); // usa $this, no self
    }

    public function deleteVehiculo()
    {
        $this->delete(); // usa $this, no necesita parámetro
    }
}
