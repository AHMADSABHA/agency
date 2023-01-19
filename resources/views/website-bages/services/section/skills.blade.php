<!--====== Start Skill section ======-->
{{-- <div class="skill-area skill-area-v1 light-gray-bg pb-90 position-relative z-1"> --}}
    <div class="shape shape-one scene"><span data-depth="2"><img src="{{ asset('assets/images/shape/shape-7.png') }}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="3"><img src="{{ asset('assets/images/shape/shape-8.png') }}" alt=""></span></div>
    <div class="container">
        <div class="row align-items-center">
            @foreach ($constant as $item)
            @if ($item->id == 2)
                   
              
            
            <div class="col-lg-6">
                <div class="img-holder position-relative z-1 mb-50 wow fadeInLeft">
                    <div class="shape shape-one animate-float-y"><span><img src="assets/images/shape/shape-5.png" alt=""></span></div>
                    <img src="{{ asset('assets/images/skill/img-2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper mb-50">
                    <div class="section-title mb-30 wow fadeInUp">
                       
                        <span class="sub-title st-one">{{ $item->section }}</span>
                        <h2>{{ $item->title }}</h2>
                        <p class="blue-dark">{{ $item->subtitle }}</p>
                        @break
                        @endif
                        @endforeach
                    </div>
                    <div class="skill-list wow fadeInDown">
                        @foreach ($bestskills as $item )
                            
                       
                        <div class="single-skill">
                            <div class="progress-title">
                                <h5>{{ $item->services }} <span>{{ $item->precentage }}%</span></h5>
                            </div>
                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: {{ $item->precentage }}%"></div>
                            <div class="progress"></div>
                        </div>
                        @endforeach
                        
                    </div>
                   
                  
                </div>

            </div>
        </div>
    </div>
{{-- </div><!--====== End Skill section ======--> --}}