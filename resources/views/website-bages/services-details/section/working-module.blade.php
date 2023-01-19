<!--====== Start Process Section ======-->
<section class="process-area process-area-v2 dark-blue-bg pt-130 pb-130 position-relative z-1">
    <div class="shape shape-one scene"><span data-depth=".5"><img src="{{ asset('assets/images/shape/shape-10.png') }}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="1"><img src="{{ asset('assets/images/shape/shape-11.png') }}" alt=""></span></div>
    <div class="shape shape-three"><span></span></div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 7) 
            <div class="col-lg-8">
                <div class="section-title section-title-white text-center mb-55 wow fadeInUp">
                    <span class="sub-title st-one">{{ $item->section }}</span>
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->subtitle }}</p>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="process-wrapper">
                    <div class="row">
                        @foreach ($working_mod as $item )
                            
                        
                        <div class="col-lg-6">
                            <div class="process-item mb-65 wow fadeInUp" data-wow-delay="{{ $loop->iteration*20 }}">
                                <div class="icon">
                                    <img src="{{ $item->icon }}" alt="">
                                </div>
                                <div class="text">
                                    <span class="step">{{ $item->step }}</span>
                                    <h4>{{ $item->title }}</h4>
                                    <p>{{$item->subtitle}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Process Section ======-->