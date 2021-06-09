<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class TextField extends Component{

    public $tipo;
    public $nombre;
    public $cols;
    public $class;
    public $valor;
    public $deshabilitado;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $tipo = null, string $nombre = null, string $cols = null, string $class = null, string $valor = null, bool $deshabilitado = null){

        $this->tipo = $tipo ?? 'text';
        $this->nombre = $nombre ?? 'TextField_'.time();
        $this->cols = $cols ?? 2;
        $this->class = $class ?? '';
        $this->valor = $valor ?? '';
        $this->deshabilitado = $deshabilitado ?? '';

    }

    public function deshabilitado(){
        return $this->deshabilitado ? ' disabled ' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.text-field');
    }
}
