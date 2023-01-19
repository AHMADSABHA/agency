<!--====== Start Team section ======-->
<section class="team-area team-area-v2 pt-130 pb-70">
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
                @if ($item->team_det_id < 5)
           
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-55 wow fadeInUp" data-wow-delay="{{ $loop ->iteration*20 }}">
                    <div class="img-holder">
                        <img src="{{ $item->image }}" alt="">
                    </div>
                    <div class="text text-center">
                        <ul class="social-link">
                            <li><a href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $item->dribbble }}"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="{{ $item->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <h4><a href="{{ route('ourteam.view') }}">{{ $item->name }}</a></h4>
                        <p class="position">{{ $item->position }}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            
        </div>
    </div>
</section><!--====== End Team section ======-->