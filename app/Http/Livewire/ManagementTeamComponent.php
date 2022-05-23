<?php

namespace App\Http\Livewire;
use App\Models\Team;
use Livewire\Component;

class ManagementTeamComponent extends Component
{
    public function render()
    {
        $team = Team::all();
        return view('livewire.management-team-component',['team'=>$team])->layout('layouts.base');
    }
}
