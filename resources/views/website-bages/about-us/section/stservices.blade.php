<!--====== Start Service Section ======-->
<section class="service-area bototm-minus-200">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($service as $item)
            @php
                $list=[];
                $list=explode('.',$item->list);
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
                        <a href="{{ route('services.view') }}" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!--====== End Service Section ======-->