   <!-- Start Footer Area -->
   <footer class="footer1">
       <div class="footer-area">
           <div class="container">
               <div class="row">
                   <div class="col-md-5 col-sm-5 col-xs-12">
                       <div class="footer-content logo-footer">
                           <div class="footer-head">
                               <div class="footer-logo">
                                   <a href="/">
                                       <img  src="{{asset('assets/logo/first-page.png')}}" alt="" style="width:186px;">
                                    </a>
                               </div>
                               <p>
                                   {{field_content([],'footer section', 'title_'.app()->getLocale()) ?? "  Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice"}}

                               </p>
                               <div class="subs-feilds">
                                   <div class="suscribe-input">
                                       <input type="email" class="email form-control width-80" id="sus_email" placeholder="{{ __('website.typeemail') }}">
                                       <button type="submit" id="sus_submit" class="add-btn">{{ __('website.subscribe') }}</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- end single footer -->
                   <div class="col-md-4 col-sm-3 col-xs-12">
                       <div class="footer-content">
                           <div class="footer-head">
                               <h4>Services Link</h4>

                               @php
                                   $footerservices = \App\Models\service::where('status',true)->pluck('name_'.app()->getLocale(),'id')->toArray();
                               @endphp

                                @foreach ( array_chunk($footerservices ,4) as $key=>$footerservice)

                               <ul class="footer-list">

                               @foreach ($footerservice as $key=>$footerservice)

                               <li><a href="{{route('website.service',[$key , $footerservice]) }}">
                               {{ $footerservice }}
                               </a></li>

                               @endforeach

                               </ul>

                               @endforeach

{{--
                               <ul class="footer-list hidden-sm">
                                   <li><a href="#">Search engine</a></li>
                                   <li><a href="#">Online support</a></li>
                                   <li><a href="#">Development</a></li>
                                   <li><a href="#">Pay per click</a></li>
                                   <li><a href="#">Event activation</a></li>
                                   <li><a href="#">Automotion</a></li>
                               </ul> --}}
                           </div>
                       </div>
                   </div>
                   <!-- end single footer -->
                   <div class="col-md-3 col-sm-4 col-xs-12">
                       <div class="footer-content last-content">
                           <div class="footer-head">
                               <h4>{{ __('website.information') }}</h4>
                               <div class="footer-contacts">
                                   <p><span>{{ __('website.location') }} :</span>
                                       {{field_content($settings,'footer section', 'location' ) ?? " "}}

                                   </p>
                                   <p><span>{{ __('website.tel') }} :</span>
                                       {{field_content($settings,'footer section', 'phone') ?? "+0890-564-5644"}}

                                   </p>
                                   <p><span> {{ __("website.email") }} :</span>
                                       {{field_content($settings,'footer section', 'mail') ?? "info@randerc3.com"}}
                                   </p>
                               </div>
                               {{-- <div class="footer-icons">
                                   <ul>
                                       <li>
                                           <a href="#">
                                               <i class="fa fa-facebook"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fa fa-twitter"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fa fa-google"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fa fa-pinterest"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="fa fa-instagram"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div> --}}
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Start Footer Bottom Area -->
       <div class="footer-area-bottom">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="copyright">
                           <p>
                              
                                {{ __('website.copywright') }}
                               <a href="#">Zoma's Tech</a>    {{ __('website.copywright_2') }}
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- End Footer Bottom Area -->
   </footer>
   <!-- End Footer Area -->
