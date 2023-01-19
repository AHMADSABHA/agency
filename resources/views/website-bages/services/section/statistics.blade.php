<!--====== Start Counter Section ======-->
{{-- <section class="counter-area counter-area-v1 pt-130 pb-90"> --}}
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 3)
            <div class="col-lg-6">
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
        <div class="row no-gutters">
            @foreach ($agencystatics as $item )
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-item mb-40 wow fadeInUp" data-wow-delay="{{ $loop->iteration*10 }}">
                    <div class="icon">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <div class="text">
                        <h2 class="number"><span>{{ $item->number }}</span>{{ $item->extinsion }}</h2>
                        <p>{{ $item->type }}</p>
                    </div>
                </div>
            </div>  
            @endforeach
            
            
        </div>
    </div>
{{-- </section><!--====== End Counter Section ======--> --}}