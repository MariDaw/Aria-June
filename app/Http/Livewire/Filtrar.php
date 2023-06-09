<?php

namespace App\Http\Livewire;

use App\Models\Famoso;
use App\Models\Publicacion;
use App\Models\Valoracion;
use Livewire\Component;
use Livewire\WithPagination;

class Filtrar extends Component
{


    public $famosoSelect = 'All';


    use WithPagination;

    public $orden ="created_at";

    public $searchTerm;

    public $active;
    public $query;



    public function render()
    {

        if ($this->famosoSelect == 'All')
        {
            $publicaciones = Publicacion::all();
        }
         else {
            $famosoLive = Publicacion::where('titulo', $this->famosoSelect)->get()[0]->id;

            $publicaciones = Publicacion:: where('famoso_id', $famosoLive)->get() ;


        }

        $famosos = Famoso::all();
        $valoraciones = Valoracion::all();
        return view('livewire.filtrar', [
            'publicaciones' =>	Publicacion::where(function($sub_query){
                $sub_query->where('titulo', 'like', '%'.$this->searchTerm.'%')
                          ->orWhere('descripcion', 'like', '%'.$this->searchTerm.'%');
            })->paginate(4), //Buscador de publicaciones y paginación

            'famosos' => $famosos,
            'valoraciones' => $valoraciones,



        ]);


    }



    public function updatingActive()
    {
        $this->resetPage();
    }

    public function updatingFamosoSelect()
    {
        $this->resetPage();
    }

}
