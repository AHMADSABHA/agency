<!--====== Start Partners Section ======-->
{{-- <section class="partners-area pt-125 pb-130"> --}}
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 10) 
            <div class="col-lg-8">
                <div class="section-title text-center mb-55 wow fadeInUp">
                    <h2>{{ $item->section }}</h2>
                    <p>{{ $item->subtitle }}</p>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="partners-wrapper wow fadeInUp">
            @foreach ($g_icon as $item )
                
            
            <div class="partner-item">
                <div class="img-holder">
                    <a href="#"><img src="{{$item->icon }}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
{{-- </section><!--====== End Partners Section ======--> --}}