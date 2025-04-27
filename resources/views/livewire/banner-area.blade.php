<div>
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">{{ $waterText }}</span>
                        <h1 class="title">{{ $title }}</h1>
                        <div class="nav-area-navigation">
                            @foreach ($breadcrumbs as $breadcrumb)
                                <a href="{{ $breadcrumb['route'] ? route($breadcrumb['route']) : 'javascript:void(0)' }}"
                                   class="{{ $breadcrumb['active'] ? 'current' : '' }}">
                                   {{ $breadcrumb['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
