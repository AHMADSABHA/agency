<!--====== Start Team Section ======-->
<section class="team-area team-area-v3 light-gray-bg pt-130 pb-90 position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{ asset('assets/images/shape/shape-7.png') }}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{ asset('assets/images/shape/shape-12.png') }}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="2.5"><img src="{{ asset('assets/images/shape/shape-8.png') }}" alt=""></span></div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 8) 
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
        <div class="row">
            @foreach ($team as $item )
               @if($item->team_det_id < 4)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-item mb-40 wow fadeInUp" data-wow-delay="{{ $loop->iteration*15 }}">
                    <div class="img-holder">
                        <img src="{{$item->image }}" alt="">
                        <div class="team-hover">
                            <div class="hover-content">
                                <h3 class="title"><a href="{{ route('teamdetails.view') }}">{{ $item->name }}</a></h3>
                                <p class="position">{{ $item->position }}</p>
                            </div>
                            <div class="hover-content-two">
                                <h3 class="title"><a href="{{ route('teamdetails.view') }}">{{ $item->name }}</a></h3>
                                <p class="position">{{ $item->position }}</p>
                                <ul class="social-link">
                                    <li><a href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $item->dribbble }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $item->twitter }}"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
          @endif
            @endforeach
        </div>
    </div>
</section><!--====== End Team Section ======-->