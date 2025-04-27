<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $navItems = [
        ['name' => 'Home', 'route' => 'index', 'children' => []],
        ['name' => 'About Us', 'route' => 'about', 'children' => []],
        [
            'name' => 'Services',
            'route' => 'services',
            'children' => [
                ['name' => 'All Types of Building Construction', 'route' => 'services.building-construction'],
                ['name' => 'Interiors', 'route' => 'services.interiors'],
                ['name' => 'Renovation', 'route' => 'services.renovation'],
                ['name' => 'Architectural Planning (2D & 3D)', 'route' => 'services.architectural-planning'],
                ['name' => 'Bank Loan Estimation', 'route' => 'services.bank-loan-estimation'],
            ]
        ],
        [
            'name' => 'Projects',
            'route' => 'projects',
            'children' => [
                ['name' => 'Ongoing Projects', 'route' => 'projects.ongoing'],
                ['name' => 'Completed Projects', 'route' => 'projects.completed'],
            ]
        ],
        ['name' => 'Blog', 'route' => 'blog', 'children' => []],
        ['name' => 'Free Quote', 'route' => 'quote', 'children' => []],
        ['name' => 'Contact Us', 'route' => 'contact', 'children' => []],
    ];

    public function render()
    {
        return view('livewire.header');
    }
}