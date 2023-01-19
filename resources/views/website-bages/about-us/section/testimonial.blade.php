<!--====== Start Testimonial Section ======-->
<section class="testimonial-area testimonial-area-v3 pattern-bg dark-blue-bg pt-130 pb-135">
    <div class="shape shape-one"><span><img src="{{ asset('assets/images/shape/circle-logo-2.png') }}" alt=""></span></div>
    <div class="container">
        <div class="row">
            @foreach ($constant as $item)
            @if ($item->id == 9) 
            <div class="col-lg-8">
                <div class="section-title section-title-white mb-55 wow fadeInLeft">
                    <span class="sub-title st-one">{{ $item->section }}</span>
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->subtitle }}</p>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="testimonial-slider-three">
            @foreach ($testmonial as $item )
                
           
            <div class="testimonial-item mb-55 wow fadeInUp">
                <div class="author-thumb">
                   <img src="{{ $item->icon}}" alt=""> 
                </div>
                <div class="testimonial-content">
                    <p>{{ $item->discription }} </p>
                    <div class="author-quote-title d-flex">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h4>{{ $item->Name }}</h4>
                            <p class="position">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->