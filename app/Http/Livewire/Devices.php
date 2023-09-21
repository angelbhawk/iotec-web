<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Devices extends Component
{
    public $datos;

    public function render()
    {
      return view('livewire.devices');    
    }

    public function mount()
    {
        $this->mostrar();
    }

    public function mostrar()
    {
      $this->datos = DB::table('devices AS dev')
      ->join('application_devices AS adv', 'dev.id', '=', 'adv.device_id')
      ->join('applications AS app', 'adv.application_id', '=', 'app.id')
      ->join('user_applications AS uap', 'app.id', '=', 'uap.application_id')
      ->join('users AS usr', 'uap.user_id', '=', 'usr.id')
      ->where('usr.id', '=', 2)
      ->select('dev.*')
      ->distinct() // Utilizar distinct para evitar resultados repetidos
      ->get()
      ->toArray(); // Convertir los resultados en un array
  
    }

    public function ver()
    {

    }
}
