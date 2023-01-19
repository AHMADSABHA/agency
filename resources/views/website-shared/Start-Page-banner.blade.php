<!--====== Start Page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{ asset('assets/images/shape/shape-1.png') }}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{ asset('assets/images/shape/shape-2.png') }}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="{{ asset('assets/images/shape/shape-3.png') }}" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="{{ asset('assets/images/shape/shape-2.png') }}" alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>{{ $title }}</h1>
                    <ul class="breadcrumbs-link">
                        @foreach ($links as $link)
                        @isset($link['url'])
                            <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                        @else
                            <li class="active">{{ $link['title'] }}</li>
                        @endisset
                        @endforeach
                    </ul>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img">
                    <img src="{{ $breadcrumb }}" alt="">
                    
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-banner section ======-->