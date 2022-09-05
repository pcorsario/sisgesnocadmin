<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
class Counter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $count = 0;
    // public function increment()
    // {
    //     $this->count++;
    // }
    // public function decrement()
    // {
    //     $this->count--;
    // }
    public function render()
    {
        return view('livewire.counter', [

            'productos' => Producto::paginate(3),

        ]);
    }
}
