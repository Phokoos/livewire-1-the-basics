<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|min:3')]
    public $title = '';
    #[Rule('required|min:5')]
    public $content = '';

    public function save()
    {
//        $this->validate([
//            'title' => 'required|min:3',
//            'content' => 'required|min:5'
//        ]);

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
