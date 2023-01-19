<!--====== Start Portfolio section ======-->
<section class="portfolio-area portfolio-area-v1 pt-130 pb-135">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 5) 
            
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <span class="sub-title st-one">{{ $item->section }}</span>
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->subtitle }}</p>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="portfolio-slider-one">
            @foreach ($latest as $item )
            <div class="portfolio-item portfolio-style-one wow fadeInUp">
                <div class="img-holder">
                    <img src="{{$item->image }}" alt="Img">
                    <a href="{{$item->image }}" class="portfolio-hover img-popup">
                        <div class="hover-content">
                            <i class="far fa-plus"></i>
                        </div>
                    </a>
                </div>
                <div class="text">
                    <h3 class="title"><a href="{{ route('portfoliodetails.view',['project_id'=>$item->project_id]) }}">{{ $item->title }}</a></h3>
                    <a href="{{ route('portfolio.view') }}" class="cat-link">{{ $item->subtitle }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Portfolio section ======-->