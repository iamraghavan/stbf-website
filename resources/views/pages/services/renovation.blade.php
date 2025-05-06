@extends('layouts.app')
@section('content')

@livewire('banner-area', [
    'title' => 'Renovation',
    'waterText' => 'Our Services',
    'breadcrumbs' => [
        ['label' => 'Home', 'route' => 'index', 'active' => false],
        ['label' => 'Services', 'route' => 'services', 'active' => true],
        ['label' => 'Renovation', 'route' => 'services.renovation', 'active' => true],
    ]
])


<div class="service-details-area rts-section-gapTop pb--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-details-main-wrapper-thumbnail">
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                </div>
                <div class="service-details-inner-area-wrapper">
                    <h4 class="title">{{ $service['title'] }}</h4>
                    <p class="disc">{{ $service['description'] }}</p>
                    <div class="service-main-wrapper-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $activeTab == 'whats-included' ? 'active' : '' }}" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="{{ $activeTab == 'whats-included' ? 'true' : 'false' }}">What’s Included</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $activeTab == 'no-compromises' ? 'active' : '' }}" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="{{ $activeTab == 'no-compromises' ? 'true' : 'false' }}">No Compromises on Quality</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $activeTab == 'customized-solutions' ? 'active' : '' }}" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="{{ $activeTab == 'customized-solutions' ? 'true' : 'false' }}">Customized Solutions</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade {{ $activeTab == 'whats-included' ? 'show active' : '' }}" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="inner-wrapper-tab-service-wrapper">
                                    @foreach ($service['whats_included'] as $item)
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>{{ $item['title'] }}:</b> {{ $item['description'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade {{ $activeTab == 'no-compromises' ? 'show active' : '' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="inner-wrapper-tab-service-wrapper">
                                    @foreach ($service['no_compromises'] as $item)
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>{{ $item['title'] }}:</b> {{ $item['description'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade {{ $activeTab == 'customized-solutions' ? 'show active' : '' }}" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="inner-wrapper-tab-service-wrapper">
                                    @foreach ($service['customized_solutions'] as $item)
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>{{ $item['title'] }}:</b> {{ $item['description'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@livewire('testimonial')
@endsection
