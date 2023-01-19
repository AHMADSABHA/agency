 <!--====== Start Blog Details section ======-->
 <section class="blog-details-section pt-130 pb-100">
            <div class="container">
                <div class="row">
                   
                   
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-wrapper wow fadeInUp">
                            <div class="blog-post-item">
                                <div class="post-thumbnail mb-30">
                                    <img src="{{ $blog->image }}" alt="">
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><a href="#" class="cat-link">{{ $blog->tag }}</a></span></li>
                                            <li><span><i class="far fa-calendar-alt"></i><a href="#">{{ $blog->date_blog }}</a></span></li>
                                            <li><span><i class="far fa-comments"></i><a href="#">Comment ({{ $blog->comment->count('id') }})</a></span></li>
                                        </ul>
                                    </div>
                                    <h3 class="title">{{ $blog->title }}</h3>
                                    <p>{{ $blog->disc }}</p>
                                    <div class="content-img">
                                        <img src="{{ $blog->sub_image }}" alt="">
                                    </div>
                                    <h4>{{ $blog->title2 }}</h4>
                                    <p>{{ $blog->disc2 }}</p>
                                    <ul class="list-style-one mb-45">
                                        @php
                        $list=[];
                       $list=explode('#',$blog->list);
                    @endphp
@foreach ($list as $item )
    

                                        <li>{{$item }}</li>
                                        @endforeach
                                    </ul>
                                    
                                    <div class="post-share-tag mb-30">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="post-tag-cloud mb-30">
                                                    <ul>
                                                        <li class="item-heading">Tags :</li>
                                                        <li><a href="#">Graphics</a></li>
                                                        <li><a href="#">Digital</a></li>
                                                        <li><a href="#">Web UX/UI</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="social-share float-lg-right mb-30">
                                                    <ul class="social-link">
                                                        <li class="item-heading">Share :</li>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-author-box mb-70">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/author-1.jpg" alt="post author">
                                </div>
                                <div class="author-content">
                                    <h4>Shawn B. Bailey</h4>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comments-area mb-70 wow fadeInUp">
                                <h4 class="comments-title">Popular Comments</h4>
                                <ul class="comments-list">
                                    @foreach ($comment as $items )
                                   
                                    <li class="comment mb-45">
                                        <div class="comment-avatar">
                                            <img src="{{ $items->icon }}" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">{{ $items->name }}<span class="date">{{ $items->date_comment }}</span></span>
                                                <p>{{ $items->content }}</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                   
                                    @endforeach 
                                   
                                </ul>
                            </div>
                            <div class="comments-respond mb-35" id="comment-respond">
                                <h4 class="comments-heading">Leave A comment</h4>
                                <form class="comment-form" method="POST" enctype="multipart/form-data" action="{{ route('comment.action') }}">
                                    @csrf
                                    <div class="row">
                                        {{-- <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="id" name="id" >
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Your blog_id" name="blog_id" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="name" name="name" required>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="date" class="form_control" placeholder="Your date_comment" name="date_comment" required>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="file" class="form_control" placeholder="Your photo" name="icon" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea name="content" class="form_control" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn arrow-btn" type="submit">Send comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                            <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                            <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/widget/news-2.jpg" alt="post image">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                            <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/widget/news-3.jpg" alt="post image">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">Guide Modern CSS Colors HWB, LAB</a></h6>
                                            <span class="posted-on">By <a href="#">Somalia D. Silba</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget tag-cloud-widget mb-30 wow fadeInUp">
                                <h4 class="widget-title">Popular Tags</h4>
                                <a href="#">3D Creative</a>
                                <a href="#">Agency</a>
                                <a href="#">Digital</a>
                                <a href="#">Web Design</a>
                                <a href="#">Strategy</a>
                                <a href="#">UX/UI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Blog Details section ======-->