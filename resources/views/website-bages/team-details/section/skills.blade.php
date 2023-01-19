<!--====== Start Skill Section ======-->
<section class="skill-area pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInLeft">
                    <div class="section-title">
                        @foreach ($constant as $item)
            @if ($item->id == 2) 
                        <span class="sub-title st-one">{{ $item->section }}</span>
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->subtitle }}</p>
                        @break
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInRight">
                    <div class="skill-list">
                        @foreach ($bestskills as $item )
                        <div class="single-skill">
                            <div class="progress-title">
                                <h5>{{ $item->services}} <span>{{ $item->precentage }}%</span></h5>
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
</section>
<!--====== End Skill Section ======-->