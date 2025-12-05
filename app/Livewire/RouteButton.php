<?php

namespace App\Livewire;

use Livewire\Component;

class RouteButton extends Component
{
    public string $ruta;
    public string $texto = 'Boton';
    public string $clase = 'btn btn-primary';

    public function navegar()
    {
        return $this->redirect($this->ruta, navigate: true);
    }

    public function render()
    {
        return view('livewire.route-button');
    }
}
