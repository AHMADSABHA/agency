<section class="contact-info-v1 pt-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-60">
                    <span class="sub-title st-one">Get In Touch</span>
                    <h2>Have Any Project on 
                        Mind? Work Together</h2>
                </div>
            </div>
        </div>
        @php
            $array=[];

        @endphp
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    @foreach ( $get_in as $item )
                    @php
                $array=explode('#',$item->subtitle);
                  @endphp
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay="{{ $loop->iteration*15 }}">
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <div class="info">
                                <h4>{{ $item->title }}</h4>
                                @for($i=0;$i<count($array);$i++)
                                <p>{{ $array[$i] }}</p>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <div class="map-box mb-30">
                    <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>