        <!--====== Start About section ======-->
        @php
                                   $ARRAY_LIST=[];
                               @endphp
        <section class="about-area about-area-v3 pt-210 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-holder mb-50 wow fadeInLeft">
                            <img src="{{ asset('assets/images/about/about-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight">
                            <div class="section-title mb-25">
                                <span class="sub-title st-one">About Us</span>
                                @foreach ($aboutus as $item )
                                   
                                <h2>{{ $item->title }}
                                    </h2>
                                <p class="blue-dark">{{ $item->subtitle }}</p>
                            </div>
                            <p>{{ $item->discription }}</p>
                            <ul class="list-style-one mb-35">
                              @php 
                              
                              $ARRAY_LIST=explode('.',$item->list);
                              @endphp
                              @for ($i=0;$i<count($ARRAY_LIST);$i++)
                               <li> {{ $ARRAY_LIST[$i] }} </li>
                            @endfor
                            </ul>
                            @endforeach
                            <a href="{{ route('aboutus.view') }}" class="main-btn bordered-btn btn-blue arrow-btn">Learn More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About section ======-->