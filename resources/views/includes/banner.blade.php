<div class="banner-area fix area-padding" style="background-image: url( {{field_content($settings ,'Home page' , 'section-banner-image') ?? '/assets/img/background/bg2.jpg'}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="add-content">
                        <h3>
                        {{field_content($settings,'Home Page', 'section-banner-title') ?? "Render It solutions corporate company established since 1998"}}
                    </h3>
                        <div class="add-contact">
                            <span class="call-us"><i class="ti-mobile"></i>
                            {{field_content($settings,'Home Page', 'section-banner-phone') ?? " Tell free :+4321-7654543"}}
  
                        
                        </span>
                            <span class="call-us mail-us"><i class="ti-email"></i>
                            {{field_content($settings,'Home Page', 'section-banner-phone') ?? "Mail us :  render-09@mail.com"}}
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>