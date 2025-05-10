/**
 * Google Maps Handler for initializing map and autocomplete
 * @module GoogleMapsHandler
 */
class GoogleMapsHandler {
    constructor(apiKey, mapElementId, addressInputId) {
      this.apiKey = apiKey;
      this.mapElementId = mapElementId;
      this.addressInputId = addressInputId;
      this.map = null;
      this.marker = null;
      this.autocomplete = null;
    }

    /**
     * Initializes Google Maps and Autocomplete
     * @throws {Error} If Google Maps API fails to load
     */
    async init() {
      try {
        await this.loadGoogleMapsScript();
        this.initMap();
        this.initAutocomplete();
      } catch (error) {
        console.error('Google Maps initialization failed:', error);
        this.displayError('Unable to load map. Please check your internet connection and try again.');
      }
    }

    /**
     * Loads Google Maps script dynamically
     * @returns {Promise<void>}
     */
    loadGoogleMapsScript() {
      return new Promise((resolve, reject) => {
        if (window.google?.maps) {
          resolve();
          return;
        }
        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${this.apiKey}&libraries=places&callback=googleMapsCallback`;
        script.async = true;
        script.defer = true;
        window.googleMapsCallback = resolve;
        script.onerror = () => reject(new Error('Failed to load Google Maps API'));
        document.head.appendChild(script);
      });
    }

    /**
     * Initializes the map with a marker
     */
    initMap() {
      this.map = new google.maps.Map(document.getElementById(this.mapElementId), {
        center: { lat: 13.1044977, lng: 80.1320214 },
        zoom: 19,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        zoomControl: true,
        mapTypeControl: true,
        streetViewControl: true,
        fullscreenControl: true,
      });

      this.marker = new google.maps.Marker({
        position: { lat: 13.1044977, lng: 80.1320214 },
        map: this.map,
        title: 'Sri Thiruthani Foundation',
      });
    }

    /**
     * Initializes autocomplete for address input
     */
    initAutocomplete() {
      const input = document.getElementById(this.addressInputId);
      this.autocomplete = new google.maps.places.Autocomplete(input, {
        types: ['geocode'],
        componentRestrictions: { country: 'in' },
      });
      this.autocomplete.addListener('place_changed', () => {
        const place = this.autocomplete.getPlace();
        if (place.formatted_address) {
          input.value = place.formatted_address;
        }
      });
    }

    /**
     * Displays error message to user
     * @param {string} message
     */
    displayError(message) {
      const messagesDiv = document.getElementById('form-messages');
      messagesDiv.innerHTML = `<p style="color: red;">${message}</p>`;
    }

    /**
     * Cleans up Google Maps resources
     */
    cleanup() {
      if (this.marker) {
        this.marker.setMap(null);
      }
      this.map = null;
      this.autocomplete = null;
    }
  }

  /**
   * Input Sanitizer using DOMPurify
   * @module InputSanitizer
   */
  class InputSanitizer {
    /**
     * Sanitizes input to prevent XSS
     * @param {string} input
     * @returns {string}
     */
    static sanitize(input) {
      return DOMPurify.sanitize(input, { ALLOWED_TAGS: [], ALLOWED_ATTR: [] });
    }
  }

  /**
   * Form Validator for contact form
   * @module FormValidator
   */
  class FormValidator {
    constructor(formId) {
      this.form = document.getElementById(formId);
      this.messagesDiv = document.getElementById('form-messages');
      this.debounceTimeout = null;
    }

    /**
     * Initializes form event listeners
     */
    init() {
      this.form.addEventListener('submit', (e) => this.handleSubmit(e));
      this.form.querySelector('input[name="phone"]').addEventListener('input', (e) => this.debounceValidatePhone(e));
      this.form.querySelector('textarea[name="message"]').addEventListener('input', (e) => this.debounceValidateMessage(e));
    }

    /**
     * Debounces validation to improve performance
     * @param {Function} fn
     * @param {number} delay
     * @returns {Function}
     */
    debounce(fn, delay = 300) {
      return (...args) => {
        clearTimeout(this.debounceTimeout);
        this.debounceTimeout = setTimeout(() => fn.apply(this, args), delay);
      };
    }

    /**
     * Handles form submission with client-side validation
     * @param {Event} e
     */
    handleSubmit(e) {
      const name = this.form.querySelector('input[name="name"]').value.trim();
      const phone = this.form.querySelector('input[name="phone"]').value.trim();
      const address = this.form.querySelector('input[name="address"]').value.trim();
      const message = this.form.querySelector('textarea[name="message"]').value.trim();

      // Validate required fields
      if (!name) {
        e.preventDefault();
        this.displayError('Name is required.');
        return;
      }

      const phoneRegex = /^[0-9]{10}$/;
      if (!phoneRegex.test(phone)) {
        e.preventDefault();
        this.displayError('Phone number must be exactly 10 digits.');
        return;
      }

      if (!address) {
        e.preventDefault();
        this.displayError('Address is required.');
        return;
      }

      if (!message) {
        e.preventDefault();
        this.displayError('Message is required.');
        return;
      }

      // Sanitize message
      const sanitizedMessage = InputSanitizer.sanitize(message);
      if (sanitizedMessage !== message) {
        e.preventDefault();
        this.displayError('Message contains invalid characters.');
        return;
      }

      // If validation passes, allow native form submission
      this.messagesDiv.innerHTML = '';
    }

    /**
     * Validates phone number in real-time
     * @param {Event} e
     */
    validatePhone(e) {
      const phone = e.target.value.trim();
      const phoneRegex = /^[0-9]{10}$/;
      this.messagesDiv.innerHTML = phone && !phoneRegex.test(phone)
        ? '<p style="color: red;">Phone number must be exactly 10 digits.</p>'
        : '';
    }

    /**
     * Validates message in real-time
     * @param {Event} e
     */
    validateMessage(e) {
      const message = e.target.value.trim();
      const sanitizedMessage = InputSanitizer.sanitize(message);
      this.messagesDiv.innerHTML = message && sanitizedMessage !== message
        ? '<p style="color: red;">Message contains invalid characters.</p>'
        : '';
    }

    /**
     * Debounced phone validation
     */
    debounceValidatePhone = this.debounce(this.validatePhone.bind(this));

    /**
     * Debounced message validation
     */
    debounceValidateMessage = this.debounce(this.validateMessage.bind(this));

    /**
     * Displays error message
     * @param {string} message
     */
    displayError(message) {
      this.messagesDiv.innerHTML = `<p style="color: red;">${message}</p>`;
    }

    /**
     * Cleans up event listeners
     */
    cleanup() {
      this.form.removeEventListener('submit', this.handleSubmit);
      this.form.querySelector('input[name="phone"]').removeEventListener('input', this.debounceValidatePhone);
      this.form.querySelector('textarea[name="message"]').removeEventListener('input', this.debounceValidateMessage);
    }
  }

  /**
   * Initializes the application
   */
  async function initApp() {
    const mapsHandler = new GoogleMapsHandler(
      'AIzaSyDfUl7G2CIfkJdCRwakYUQeen2o5cCzcVE',
      'map',
      'address'
    );
    const formValidator = new FormValidator('contact-form');

    await mapsHandler.init();
    formValidator.init();

    // Cleanup on page unload ( Holder for SPAs)
    window.addEventListener('unload', () => {
      mapsHandler.cleanup();
      formValidator.cleanup();
    });
  }

  // Load DOMPurify and initialize app
  const domPurifyScript = document.createElement('script');
  domPurifyScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.0/purify.min.js';
  domPurifyScript.onload = () => initApp();
  document.head.appendChild(domPurifyScript);
