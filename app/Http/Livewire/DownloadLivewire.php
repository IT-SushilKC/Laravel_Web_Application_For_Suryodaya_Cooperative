<?php

namespace App\Http\Livewire;
use App\Models\DownloadFile;
use Livewire\Component;

class DownloadLivewire extends Component
{
    public function render()
    {
        $data = DownloadFile::all();
        return view('livewire.download-livewire',['data'=>$data])->layout('layouts.base');
    }
}
