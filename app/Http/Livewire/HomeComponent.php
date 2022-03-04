<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Home_Slider;
use App\Models\Notice;
use App\Models\News;
class HomeComponent extends Component
{
    function showSingleNews($id){
        $news = News::where('id',$id)->first();
        return view('livewire.single-news', ['news'=>$news])->layout('layouts.base');
    }
    public function render()
    {
        $sliders = Home_Slider::all();
        $notice = Notice::all();
        $homenews = News::orderBy('id',"DESC")->paginate(3);
        return view('livewire.home-component', ['sliders'=>$sliders,'notice'=>$notice,'homenews'=>$homenews])->layout('layouts.base');
    }
}
