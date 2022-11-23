<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FormRegistro; //Importamos el modelo FormRegistro

class Formulario extends Component
{
    public $formregistros, $proyecto, $tipo, $nombres, $apellidos, $correo, $formregistro_id;
    public $isOpen = 0;

    public function render()
    {
        $this->formregistros = FormRegistro::all();
        return view('livewire.formulario');
    }

    public function create(){
        $this->reset();
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    private function resetCreateForm(){
        $this->proyecto = '';
        $this->tipo = '';
        $this->nombres = '';
        $this->apellidos = '';
        $this->correo = '';
        $this->formregistro_id = '';
    }

    public function store(){
        $this->validate([
            'proyecto' => 'required',
            'tipo' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
        ]);

        FormRegistro::updateOrCreate(['id' => $this->formregistro_id], [
            'proyecto' => $this->proyecto,
            'tipo' => $this->tipo,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'correo' => $this->correo,
        ]);
        
        session()->flash('message', 
        $this->formregistro_id ? 'Formulario actualizado con éxito.' : 'Formulario creado con éxito.');
        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id){
        $formregistro = FormRegistro::findOrFail($id);
        $this->formregistro_id = $id;
        $this->proyecto = $formregistro->proyecto;
        $this->tipo = $formregistro->tipo;
        $this->nombres = $formregistro->nombres;
        $this->apellidos = $formregistro->apellidos;
        $this->correo = $formregistro->correo;
        $this->openModal();
    }

    public function delete($id){
        FormRegistro::find($id)->delete();
        session()->flash('message', 'Formulario eliminado con éxito.');
    }
}
