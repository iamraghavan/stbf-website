@extends('layouts.app')
@section('content')

@livewire('banner-area', [
    'title' => 'Dedicated to Building Dreams, Crafting Quality, and Shaping the Future of Construction',
    'waterText' => 'About',
    'breadcrumbs' => [
        ['label' => 'Home', 'route' => 'index', 'active' => false],
        ['label' => 'About Us', 'route' => 'about', 'active' => true],
    ]
])



@livewire('testimonial')
@endsection
