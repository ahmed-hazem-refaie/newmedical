<div class="service-area service-area-2 bg-color area-padding-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>
                    
                        {{field_content($settings,'service-details', 'home_title_'.app()->getLocale()) ?? ""}}
                    </h3>
                    <p>
                        {{field_content($settings,'service-details', 'home_info_'.app()->getLocale()) ?? ""}}                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-services">


                @foreach ($services as $service)

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <span class=" {{object_get($service,'logo')  ?? 'flaticon-052-project-plan'}}"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>
                                    {{object_get($service,'name_'.app()->getLocale()) ?? "Product Design"}}

                                </h4>
                                <p>
                                    {{ substr(object_get($service,'info_'.app()->getLocale()) ,0,120)."......" ??  " Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands."}}
                                </p>
                                <a class="service-btn" href="{{ route('website.service',[$service->id,$service->name_en]) }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                {{-- <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <span class="flaticon-052-project-plan"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>
                                    {{field_content($settings,'Home Page', 'section-services-title1') ?? "Product Design"}}

                                </h4>
                                <p>
                                    {{field_content($settings,'Home Page', 'section-services-description1') ?? " Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands."}}
                                </p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-icon">
                            <span class="flaticon-031-financial"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">

                                <h4>
                                    {{field_content($settings,'Home Page', 'section-services-title2') ?? "It management"}}

                                </h4>
                                <p>
                                    {{field_content($settings,'Home Page', 'section-services-description3') ?? "Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands."}}
                                </p>

                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-icon">
                            <span class="flaticon-057-statistics"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">

                                <h4>
                                    {{field_content($settings,'Home Page', 'section-services-title3') ?? "Data security"}}

                                </h4>
                                <p>
                                    {{field_content($settings,'Home Page', 'section-services-description3') ?? "Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands."}}
                                </p>

                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon">
                            <span class="flaticon-012-business"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">

                                <h4>
                                    {{field_content($settings,'Home Page', 'section-services-title3') ?? "It consultancy"}}

                                </h4>
                                <p>
                                    {{field_content($settings,'Home Page', 'section-services-description3') ?? "Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands."}}
                                </p>


                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-icon">
                            <span class="flaticon-041-network"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>Cloude services</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-icon">
                            <span class="flaticon-002-analysis"></span>
                        </div>
                        <div class="service-inner">
                            <div class="service-content">
                                <h4>It support helpdesk</h4>
                                <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu. independent agency, free from the internal demands.</p>
                                <a class="service-btn" href="#"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single dervices --> --}}
            </div>
        </div>
    </div>
</div>
