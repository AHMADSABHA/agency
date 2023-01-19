<!--====== Start Contact section ======-->
<section class="contact-area contact-area-v3 pt-130 pb-130">
    <div class="container-1350">
        <div class="contact-wrapper light-gray-bg pt-80 pb-80 wow fadeInUp">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title st-one">Message Us</span>
                            <h2>Get Any Consultations ?
                                Contact With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form method="POST" enctype="" action="{{ route('contact.action.view') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name" name="fullname" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Email Address " name="email" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone Number" name="phone" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Write Message" name="write_message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group text-center">
                                            <button class="main-btn" type="submit">Send Us Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact section ======-->