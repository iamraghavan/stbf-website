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

            <script>
            function initAutocomplete() {
                const input = document.getElementById('address');
                const autocomplete = new google.maps.places.Autocomplete(input, {
                    types: ['geocode'], // Restrict to addresses
                    componentRestrictions: { country: 'in' } // Restrict to India
                });
                autocomplete.addListener('place_changed', () => {
                    const place = autocomplete.getPlace();
                    if (place.formatted_address) {
                        input.value = place.formatted_address;
                    }
                });
            }

            // Sanitize message input to remove script tags and HTML
            function sanitizeInput(input) {
                const div = document.createElement('div');
                div.textContent = input; // Escapes HTML/script tags
                return div.innerHTML.replace(/[<>&"]/g, (char) => ({
                    '<': '&lt;',
                    '>': '&gt;',
                    '&': '&amp;',
                    '"': '&quot;'
                }[char]));
            }

            // Form validation
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const form = e.target;
                const phone = form.querySelector('input[name="phone"]').value;
                const message = form.querySelector('textarea[name="message"]').value;
                const messagesDiv = document.getElementById('form-messages');

                // Validate phone number (exactly 10 digits)
                const phoneRegex = /^[0-9]{10}$/;
                if (!phoneRegex.test(phone)) {
                    messagesDiv.innerHTML = '<p style="color: red;">Phone number must be exactly 10 digits.</p>';
                    return;
                }

                // Sanitize message
                const sanitizedMessage = sanitizeInput(message);
                if (sanitizedMessage !== message) {
                    messagesDiv.innerHTML = '<p style="color: red;">Message contains invalid characters (e.g., scripts or HTML tags).</p>';
                    return;
                }

                // If validation passes, submit the form
                const formData = new FormData(form);
                formData.set('message', sanitizedMessage); // Update message with sanitized version

                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value // Include CSRF token
                    }
                })
                .then(response => response.json())
                .then(data => {
                    messagesDiv.innerHTML = `<p style="color: green;">${data.message}</p>`;
                    form.reset();
                })
                .catch(error => {
                    messagesDiv.innerHTML = '<p style="color: red;">Error submitting form.</p>';
                    console.error('Form submission error:', error);
                });
            });

            // Real-time validation for phone number
            document.getElementById('contact-form').querySelector('input[name="phone"]').addEventListener('input', function(e) {
                const messagesDiv = document.getElementById('form-messages');
                const phone = e.target.value;
                const phoneRegex = /^[0-9]{10}$/;
                if (phone && !phoneRegex.test(phone)) {
                    messagesDiv.innerHTML = '<p style="color: red;">Phone number must be exactly 10 digits.</p>';
                } else {
                    messagesDiv.innerHTML = '';
                }
            });

            // Real-time sanitization preview for message
            document.getElementById('message').addEventListener('input', function(e) {
                const messagesDiv = document.getElementById('form-messages');
                const message = e.target.value;
                const sanitizedMessage = sanitizeInput(message);
                if (message && sanitizedMessage !== message) {
                    messagesDiv.innerHTML = '<p style="color: red;">Message contains invalid characters (e.g., scripts or HTML tags).</p>';
                } else {
                    messagesDiv.innerHTML = '';
                }
            });
            </script>


            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfUl7G2CIfkJdCRwakYUQeen2o5cCzcVE&libraries=places&callback=initAutocomplete">
            </script>
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

                 <script>
                 function initMap() {
                     const mapOptions = {
                         center: { lat: 13.1044977, lng: 80.1320214 },
                         zoom: 19,
                         mapTypeId: google.maps.MapTypeId.ROADMAP,
                         disableDefaultUI: false, // Ensure default UI is not disabled
                         zoomControl: true, // Enable zoom buttons (+/-)
                         mapTypeControl: true, // Enable map type control (Map/Satellite)
                         streetViewControl: true, // Enable Street View control
                         fullscreenControl: true // Enable fullscreen control
                     };

                     const map = new google.maps.Map(document.getElementById("map"), mapOptions);

                     const marker = new google.maps.Marker({
                         position: { lat: 13.1044977, lng: 80.1320214 },
                         map: map,
                         title: "Sri Thiruthani Foundation"
                     });
                 }
                 </script>

                 <script async defer
                     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfUl7G2CIfkJdCRwakYUQeen2o5cCzcVE&callback=initMap">
                 </script>
         </div>
      </div>
   </div>
</div>

@livewire('testimonial')
@endsection
