<!--====== Start Process Section ======-->
<section class="process-area process-area-v1 pt-90 pb-85">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 6) 
            <div class="col-lg-7">
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
            @foreach ($process as $item )
                
            
            <div class="col-lg-4 col-md-6 col-sm-12 process-column">
                <div class="process-item text-center mb-40 wow fadeInUp" data-wow-delay="{{ $loop->iteration*15 }}">
                    <div class="icon">
                        <img src="{{ $item->icon }}" alt="">
                    </div>
                    <div class="text">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->subtitle }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Process Section ======-->