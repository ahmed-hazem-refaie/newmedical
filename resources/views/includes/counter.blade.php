<div class="counter-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="counter-image">
                    <div class="rotmate-image rotateme">
                        <img src="{{asset('assets/img/about/circle.png')}}" alt="">
                    </div>
                    <div class="top-img">
                        <img src="{{field_content($settings ,'Home page' , 'section-counter-image') ?? '/assets/img/about/self.png'}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="fun-text-all">
                    <!-- single counter  -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_text wow fadeInUp" data-wow-delay="0.2s">
                            <span class="counter-icon"><i class="ti-layers"></i></span>
                            <span class="counter">
                                {{field_content($settings,'Home Page', 'section-banner-project-count') ?? "510"}}
                            </span>
                            <h4>
                                {{field_content($settings,'Home Page', 'section-banner-project-title') ?? "Total projects"}}
                            </h4>
                        </div>
                    </div>
                    <!-- single counter  -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_text wow fadeInUp" data-wow-delay="0.3s">
                            <span class="counter-icon"><i class="ti-world"></i></span>

                            <span class="counter">
                                {{field_content($settings,'Home Page', 'section-banner-world-count') ?? "120"}}
                            </span>
                            <h4>
                                {{field_content($settings,'Home Page', 'section-banner-world-title') ?? "Worldwide"}}
                            </h4>

                        </div>
                    </div>
                    <!-- single counter  -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_text wow fadeInUp" data-wow-delay="0.4s">
                            <span class="counter-icon"><i class="ti-cup"></i></span>

                            <span class="counter">
                                {{field_content($settings,'Home Page', 'section-banner-awards-count') ?? "40"}}
                            </span>
                            <h4>
                                {{field_content($settings,'Home Page', 'section-banner-awards-title') ?? "Awards win"}}
                            </h4>

                        </div>
                    </div>
                    <!-- single counter  -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_text wow fadeInUp" data-wow-delay="0.5s">
                            <span class="counter-icon"><i class="ti-user"></i></span>
                            <span class="counter">
                                {{field_content($settings,'Home Page', 'section-banner-Team-count') ?? "210"}}
                            </span>
                            <h4>
                                {{field_content($settings,'Home Page', 'section-banner-Team-title') ?? "Team member"}}
                            </h4>
                        </div>
                    </div>
                    <!-- single counter  -->
                </div>
            </div>
        </div>
    </div>
</div>