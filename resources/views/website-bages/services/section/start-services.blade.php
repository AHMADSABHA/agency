<!--====== Start Service Section ======-->
{{-- <section class="service-area service-area-v1 bototm-minus-200 position-relative z-2"> --}}
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item )
                
           
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <span class="sub-title st-one">{{ $item->section }}</span>
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->subtitle }}</p>
                </div>
            </div>
@break
            @endforeach
        </div>
        <div class="row justify-content-center">
            @foreach($service as $item)
            @php
                $list=[];
                $list=explode('#',$item->list);
            @endphp
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item service-style-three mb-40 wow fadeInUp" data-wow-delay="{{ $loop->iteration*15 }}">
                    <div class="icon">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('servicesdetails.view') }}">{{ $item->title }}</a></h3>
                        <ul class="list-style-two">
                            @for($i=0;$i<count($list);$i++)
                            <li>{{ $list[$i] }}</li>
                            @endfor
                        </ul>
                        <a href="{{ route('servicesdetails.view') }}" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
{{-- </section><!--====== End Service Section ======--> --}}