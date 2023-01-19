<!--====== Start Fancy-text-block section ======-->
<section class="fancy-text-block fancy-text-block-v2 pt-210 pb-90">
    <div class="container">
        <div class="row">
            @foreach ($whatwedo as $item )
                
           
            <div class="col-lg-6">
                <div class="img-holder mb-50 wow fadeInLeft" data-wow-delay=".2s">

                    <img src="{{ $item->image }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInRight" data-wow-delay=".4s">
                    <div class="section-title mb-30">
                        <span class="sub-title st-one">What We Do</span>
                        <h2>{{ $item->title }}</h2>
                        <p class="blue-dark">{{ $item->subtitle }}</p>
                    </div>
                    <p>{{ $item->discription }}</p>
                    <a href="{{ route('aboutus.view') }}" class="main-btn arrow-btn">Discover More</a>
                </div>
            </div>
            @break
            @endforeach
        </div>
    </div>

</section><!--====== End Fancy-text-block section ======-->