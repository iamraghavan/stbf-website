@extends('layouts.app')
@section('content')

@livewire('banner-area', [
    'title' => 'Contact Us',
    'waterText' => 'Contact Our Team',
    'breadcrumbs' => [
        ['label' => 'Home', 'route' => 'index', 'active' => false],
        ['label' => 'Contact Us', 'route' => 'contact', 'active' => true],
    ]
])
<style>
    .icon-ab{
        height: 90px;
    min-width: 90px;
    border-radius: 50%;
    background: var(--color-primary) !important;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    }
</style>
<div class="rts-contact-area-page rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--60 pr_sm--0 mb_sm--30 pr_md--10 pb_md--25 pb_sm--25">
                <div class="contact-main-wrapper-left">
                    <span>Get In Touch</span>
                    <h3 class="title-main">
                        We are always ready to help you <br> and answer your questions
                    </h3>
                    {{-- <p class="disc">
                        Pacific hake false trevally queen parrotfish black prickleback mosshead warbonnet sweeper!
                        Greenling sleeper.
                    </p> --}}
                    <div class="row g-24">
                        <div class="col-lg-6">
                            <div class="quick-contact-page-1">

                                <h5 class="title">Call Support Center 24/7</h5>
                                <p>
                                    +91 86089 05570 <br> +91 89399 24280
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quick-contact-page-1">

                                <h5 class="title">Visit Us</h5>
                                <p>
                                    R71/3, 1st Main Road, TNHB, <br>Ayapakkam, Chennai - 600077
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="quick-contact-page-1">

                                <h5 class="title">Write to Us</h5>
                                <p>
                                    srithiruthanifoundation@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
                <div id="form-messages"></div>
                <form id="contact-form" action="{{ route('submit.contact-form') }}" method="POST" class="contact-form-area-wrapper">
                    @csrf
                    <h4 class="title">Let’s Get in Touch</h4>
                    <div class="half-inpur-wrapper">
                        <div class="single">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="single">
                            <input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Phone number must be exactly 10 digits" required>
                        </div>
                    </div>
                    <div class="single">
                        <input type="email" name="email" placeholder="Email Address (Optional)" spellcheck="false" data-ms-editor="true">
                    </div>
                    <div class="single">
                        <input type="text" id="address" name="address" placeholder="Enter Address" required>
                    </div>
                    <textarea name="message" id="message" placeholder="Type Your Message (Max 250 characters)" maxlength="250" spellcheck="false" data-ms-editor="true" required></textarea>
                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                </form>
            </div>


        </div>
    </div>
</div>


<div class="rts-map-area rts-section-gapBottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="rts-map-area rts-section-gapBottom">

                <div class="rts-map-area rts-section-gapBottom">
                    <div class="container">
                       <div class="row">
                          <div class="col-lg-12">
                             <div class="rts-map-main-wrapper" id="map" style="height: 500px; width: 100%;"></div>
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
