<?php
namespace App\Livewire;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{
    public $todo = '';
    public $todos = [
        'Take out trash',
        'To dishes'
    ];


    //When something updating
//    public function updatedTodo($value)
//    {
//        $this->todo = strtoupper($value);
//    }

    // Working from start
//    public function mount()
//    {
//        $this->todos = [
//            'Take out trash',
//            'To dishes'
//        ];
//    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
