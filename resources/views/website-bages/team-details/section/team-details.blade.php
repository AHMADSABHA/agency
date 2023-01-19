<!--====== Start Team Details Section ======-->
<section class="team-details-section pt-130 pb-90 position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{ asset('assets/images/shape/shape-7.png') }}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{ asset('assets/images/shape/shape-8.png') }}" alt=""></span></div>
    <div class="container">
        <div class="team-details-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-holder mb-50 position-relative z-1 wow fadeInLeft">
                        <img src="{{ asset('assets/images/team/single-img-1.jpg') }}" alt="">
                        <div class="shape shape-one"><span><img src="{{ asset('assets/images/shape/shape-5.png') }}" alt=""></span></div>
                    </div>
                </div>
                @foreach ($team as $team )
                    
               
                <div class="col-lg-6">
                    <div class="text-wrapper mb-50 wow fadeInRight">
                        <div class="text"> 
                            <h3 class="title">{{ $team->name }}</h3>
                            <p class="position">{{ $team->position }}</p>
                            <p>{{ $team->discription }}</p>
                            <div class="social-box">
                                <h3>Follw Me</h3>
                                <ul class="social-link">
                                    <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $team->dribbble }}"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $team->behance }}"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="{{ $team->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{ $team->vemo }}"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                   
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!--====== End Team Details Section ======-->