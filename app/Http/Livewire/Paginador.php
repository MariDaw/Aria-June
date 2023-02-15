<?php

namespace App\Http\Livewire;

use App\Models\Famoso;
use App\Models\Publicacion;
use App\Models\Valoracion;
use Livewire\Component;
use Livewire\WithPagination;

class Paginador extends Component
{


    public $famosoSelect = 'All';


    use WithPagination;

    public $searchTerm;

    public $active;
    public $query;



    public function render()
    {

        // $publicaciones = Famoso::where('nombre', $this->busqueda)
        //     ->when($this->busqueda, function ($query) {
        //         return $query->where(function ($query) {
        //             $query->where('nombre', 'ilike', "%$this->busqueda%");
        //         }
        //         );

        //     });




        if ($this->famosoSelect == 'All')
        {
            $publicaciones = Publicacion::all();
        }
         else {
            $famosoLive = Famoso::where('nombre', $this->famosoSelect)->get()[0]->id;

            $publicaciones = Publicacion:: where('famoso_id', $famosoLive)->get() ;


        }

        $famosos = Famoso::all();
        $valoraciones = Valoracion::all();
        return view('livewire.paginador', [
            // 'publicaciones' =>	Publicacion::where(function($sub_query){
            //     $sub_query->where('titulo', 'like', '%'.$this->searchTerm.'%')
            //               ->orWhere('descripcion', 'like', '%'.$this->searchTerm.'%');
            // })->paginate(3),
            'publicaciones' => $publicaciones,
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
