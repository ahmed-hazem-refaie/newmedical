<div class="d-block">
    <div class="form-group">

        <div
            data-callback="recaptchaCallback"
            class="g-recaptcha d-inline-block text-md-right"
            data-sitekey="{{env('reCAPTCHA_KEY',"6LegElIcAAAAAF4w1UCrERQ-apQrzrimEEbCEIM5")}}"
        >
  
        </div>
        
        @error('g-recaptcha-response')
        <span class="text-danger font-weight-bold server-error-msg " role="alert">
            {{ $message }}
        </span>
        @enderror
    <div class="invalid-tooltip d-none" id="not-robot"> {{__('IMPROVE THAT U R NOT ROBOT')}}</div>
    </div>
</div>
<script
src="https://www.google.com/recaptcha/api.js?hl=en"
    async
    defer
></script>
