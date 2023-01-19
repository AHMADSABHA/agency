<!--====== Start pricing section ======-->
<section class="pricing-area pricing-area-v1 dark-blue-bg pattern-bg pt-130 pb-120">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{ asset('assets/images/shape/shape-9.png') }}" alt=""></span></div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 4)
            <div class="col-lg-6">
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
            @foreach ($plan as $item)
            @php
            $checked=[];
            $checked=explode('.',$item->checked);
            $hidden=[];
            $hidden=explode('.',$item->hidden);
        @endphp
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="pricing-item pricing-item-two bg-white mb-40 wow fadeInUp" data-wow-delay="{{ $loop->iteration*20 }}">
                    @if($item->plan_id == 2)
                    <div class="ribbon">Popular</div>
                    @endif
                    <div class="pricing-head text-center">
                        <span class="plan">{{ $item->title }}</span>
                        <h2 class="price"><span class="currency">$</span>{{ $item->price }}</h2>
                    </div>
                    <div class="pricing-body">
                        <p>Sit amet consectetur adiising seddo eiusmod teme</p>
                        <ul class="pricing-list">
                            @for($i=0;$i<count($checked);$i++)
                            <li class="check">{{ $checked[$i] }}</li>
                            @endfor
                            @for($i=0;$i<count($hidden);$i++)
                            @if($hidden[$i]!=null)
                            <li class="uncheck">{{ $hidden[$i] }}</li>
                            @endif
                            @endfor
                        </ul>
                        <a href="{{ route('servicesdetails.view') }}" class="main-btn arrow-btn bordered-btn btn-blue">Choose Plan</a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section><!--====== End pricing section ======-->