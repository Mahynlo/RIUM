<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post; //Importamos el modelo Post

class Posts extends Component
{
    public $posts, $titulo, $resumen, $post_id;
    public $isOpen = 0;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');//Aqui se llama a la vista posts.blade.php
    }

    public function create(){
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->titulo = '';
        $this->resumen = '';
        $this->post_id = '';
    }

    public function store()
    {
        $this->validate([
            'titulo' => 'required',
            'resumen' => 'required',
        ]);
   
        Post::updateOrCreate(['id' => $this->post_id], [
            'titulo' => $this->titulo,
            'resumen' => $this->resumen
        ]);
  
        session()->flash('message', 
            $this->post_id ? 'Publicación actualizada con éxito.' : 'Publicación creada con éxito.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->titulo = $post->titulo;
        $this->resumen = $post->resumen;
    
        $this->openModal();
    }

    public function delete($id){
        Post::find($id)->delete();
        session()->flash('message', 'Publicación eliminada con éxito.');
    }
}
