<!--====== Start Team section ======-->
<section class="fancy-text-block light-gray-bg pb-90 fancy-text-block-v1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text-wrapper mb-40 fadeInLeft">
                    <div class="section-title mb-25">
                        @foreach ($how_we_are as $item )
                            
                       
                        <span class="sub-title st-one">How We Are</span>
                        <h2>{{$item->title}}</h2>
                        <p class="blue-dark">{{ $item->subtitle }}</p>
                    </div>
                    <p>{{ $item->discription }}</p>
                    <a href="/aboutus" class="main-btn arrow-btn">Discover More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-holder position-relative z-1 mb-40 wow fadeInRight">
                    <div class="shape shape-one"><span><img src="{{ asset('assets/images/shape/circle-logo-2.png') }}" alt=""></span></div>
                    <div class="shape shape-two"><span><img src="{{ asset('assets/images/shape/shape-6.png') }}" alt=""></span></div>
                    <img src="{{$item->image }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!--====== End Team section ======-->