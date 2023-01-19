<!--====== Start Features section ======-->
<section class="features-area pt-210">
    <div class="container">
        <div class="row">
            @foreach ($feature as $item)
                @php
                    $list=[];
                    $list=explode('.',$item->list);
                    $sublist=[];
                    $sublist=explode('.',$item->sublist);
                @endphp
           
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInLeft">
                    <div class="section-title mb-30">
                        <span class="sub-title st-one">Features</span>
                        <h2>{{$item->title}}</h2>
                        <p class="blue-dark">{{ $item->subtitle }}</p>
                    </div>
                    <p>{{$item->discription}}</p>
                    <a href=" {{ route('aboutus.view') }} " class="main-btn">Discover More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features-list mb-50 wow fadeInRight">
                   
                    @for($i=0;$i<count($list);$i++)    
                   
                    <div class="features-item mb-30">
                        <div class="text">
                            <h4>{{ $list[$i] }}</h4>
                            <p>{{ $sublist[$i] }}</p>
                        </div>
                    </div>
                  @endfor
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section><!--====== End Features section ======-->