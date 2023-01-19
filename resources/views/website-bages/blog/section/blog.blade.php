 <!--====== Start Blog Section ======-->
 
     @foreach ($blog_tag as $items )
         
     @endforeach
 
 <section class="blog-standard-section pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">
                   
                  @foreach($blog as $item)

                    <div class="blog-standard-post-item mb-60 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 15 }}">
                        <div class="post-thumbnail">
                            <img src="{{ $item->image }}" alt="Post Image">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class=" cat-link cat-{{ $items->tag_id }} cat-{{ $item->blog_id }}">{{ $item->tag }}</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">{{ $item->date_blog }}</a></span></li>
                                    <li><span><i class="far fa-comments"></i><a href="#">Comment ({{ $item->comment->count('id') }})</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="{{ route('blogs-details.view') }}">{{ $item->title }}</a></h3>
                            <p>{{ $item->disc }}</p>
                            <a href="{{ route('blogs-details.view',['blog_id'=>$item->blog_id]) }}" class="main-btn bordered-btn btn-blue arrow-btn">Read More</a>
                        </div>
                    </div>
                   
                    @endforeach
                    <div class="blog-standard-post-item post-with-bg mb-60 wow fadeInUp" data-wow-delay=".35s">
                        <div class="post-thumbnail">
                            <img src="assets/images/blog/standard-4.jpg" alt="">
                            <div class="post-hover">
                                <div class="hover-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><a href="#" class="cat-link">Web Design</a></span></li>
                                            <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>
                                            <li><span><i class="far fa-comments"></i><a href="#">Comment (5)</a></span></li>
                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="">Everything You Want To Know About Creating Voicese User Interfaces Powerful Terminal</a></h3>
                                    <a href="" class="btn-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">
                    <div class="widget search-widget mb-30 wow fadeInUp">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search here" name="email" required>
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Category</h4>
                        <ul class="category-nav">
                            <li><a href="#">Organic Vegetables<span><i class="far fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Fresh Jack Fruits<span><i class="far fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Chicken Meat & Eggs<span><i class="far fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Organic Wheats<span><i class="far fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Cow Meat & Milk<span><i class="far fa-arrow-right"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="widget contact-info-widget bg_cover mb-30 wow fadeInUp" style="background-image: url(assets/images/widget/contact-1.jpg);">
                        <div class="contact-info-box text-center">
                            <div class="icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="info">
                                <h4><a href="tel:+01234567899">+0123 (456) 7899</a></h4>
                                <h5><a href="mailto:support@gmail.com">support@gmail.com</a></h5>
                                <a href="#" class="main-btn bordered-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget recent-post-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Recent News</h4>
                        <ul class="recent-post-list">
                            <li class="post-thumbnail-content">
                                <img src="assets/images/widget/news-1.jpg" alt="post image">
                                <div class="post-title-date">
                                    <h6><a href="{{ route('blogs-details.view') }}">Guide Modern CSS Colors HWB, LAB</a></h6>
                                    <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                </div>
                            </li>
                            <li class="post-thumbnail-content">
                                <img src="assets/images/widget/news-2.jpg" alt="post image">
                                <div class="post-title-date">
                                    <h6><a href="{{ route('blogs-details.view') }}">Guide Modern CSS Colors HWB, LAB</a></h6>
                                    <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                </div>
                            </li>
                            <li class="post-thumbnail-content">
                                <img src="assets/images/widget/news-3.jpg" alt="post image">
                                <div class="post-title-date">
                                    <h6><a href="{{ route('blogs-details.view') }}">Guide Modern CSS Colors HWB, LAB</a></h6>
                                    <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget tag-cloud-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Popular Tags</h4>
                        @foreach ($tags as $item )
                        <a href="#">{{ $item->name }}</a>
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Section ======-->