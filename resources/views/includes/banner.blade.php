<div class="banner-area fix area-padding" style="background-image: url( {{field_content($settings ,'section5-homepage-headerdata' , 'image') ?? '/assets/img/background/bg2.jpg'}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="add-content">
                        <h3>
                        {{field_content($settings,'section5-homepage-headerdata', 'title_'.app()->getLocale()) ?? "Render It solutions corporate company established since "}}
                    </h3>
                        <div class="add-contact">
                            <span class="call-us"><i class="ti-mobile"></i>
                            {{field_content($settings,'section5-homepage-headerdata', 'phone') ?? " Tell free :+4321-7654543"}}
  
                        
                        </span>
                            <span class="call-us mail-us"><i class="ti-email"></i>
                            {{field_content($settings,'section5-homepage-headerdata', 'mail') ?? "Mail us :  render-09@mail.com"}}
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>