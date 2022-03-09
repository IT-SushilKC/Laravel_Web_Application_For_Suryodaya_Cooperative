<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;
class NewsComponent extends Component
{
    public function render()
    {
        $sectionnews = News::orderBy('id',"DESC")->paginate(4);
        return view('livewire.news-component',['sectionnews'=>$sectionnews])->layout('layouts.base');
    }
}
