<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Device extends Component
{
    public $did;
    protected $datos;
    public $name;
    public $momento;
    public $currentPage = 1;
    public $perPage = 10;
    public $grafica_f;
    public $grafica_v;

    protected $listeners = ['mostrar' => 'mostrar'];
    //use WithPagination;

    public function render()
    {
        return view('livewire.device', [
            'datos' => $this->datos,
        ]);
    }

    public function mount()
    {
        $this->mostrar();
    }

    public function mostrar()
    {
        $this->momento = now();
        $this->name = DB::table('devices')
    ->where('id', $this->did)
    ->value('name');

      $this->datos = DB::table('device_logs AS dlog')
      ->where('dlog.device_id', '=', $this->did)
      ->select('dlog.*')
      ->orderBy('dlog.created_at', 'desc')
      ->simplePaginate(9);
      //->toArray(); // Convertir los resultados en un array

      $this->grafica_f = DB::table('device_logs AS dlog')
      ->where('dlog.device_id', '=', $this->did)
      ->select('dlog.*')
      ->get();

        $this->grafica_f = json_encode($this->grafica_f);

        return view('livewire.device', [
            'datos' => $this->datos,
        ]);
    }

}
