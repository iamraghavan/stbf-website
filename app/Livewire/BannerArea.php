<?php

namespace App\Livewire;

use Livewire\Component;

class BannerArea extends Component
{
    public $title;
    public $waterText;
    public $breadcrumbs = [];

    public function render()
    {
        return view('livewire.banner-area');
    }
}