<section class="banner-bottom-w3layouts py-5" id="contact">
    <form action="{{ route('contact') }}" method="post">
        <div class="container-fluid pt-xl-5 pt-lg-3">
            <!-- heading title -->
            <div class="mb-lg-5 mb-4 text-center">
                <h3 class="title-wthree text-dark mb-2">
                    <span class="mb-2">Get In Touch</span>Contact Me</h3>
                <p class="sub-tittle-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- //heading title -->
            <!-- contact address -->
            <div class="container">
                <div class="address row py-sm-5 pt-sm-0 pt-3 pb-sm-0 pb-5 mb-sm-5">
                    <div class="col-lg-4 address-grid" data-aos="zoom-out-up">
                        <div class="row address-info">
                            <div class="col-3 address-left text-lg-center text-right">
                                <i class="far fa-map text-center"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> {{ $setting->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid my-lg-0 my-4" data-aos="zoom-out-up">
                        <div class="row address-info">
                            <div class="col-3 address-left text-lg-center text-right">
                                <i class="far fa-envelope text-center"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>Email :
                                    <a href="mailto:{{ $setting->email }}"> {{ $setting->email }} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid" data-aos="zoom-out-up">
                        <div class="row address-info">
                            <div class="col-3 address-left text-lg-center text-right">
                                <i class="fas fa-mobile-alt text-center"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p> {{ $setting->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //contact address -->
            <div class="row " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <!-- map -->
                <div class="col-lg-6 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229400.94643869286!2d88.3322938246282!3d26.05351472550283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4ead8c059a75f%3A0xc71a02fe62d267fe!2sThakurgaon%20Sadar%20Upazila!5e0!3m2!1sen!2sbd!4v1602497033340!5m2!1sen!2sbd"
                        allowfullscreen></iframe>

                </div>
                <!-- //map -->
                <!-- contact form -->

                @csrf
                <div class="col-lg-6 main_grid_contact contact_here" style="color: #fff !important;">
                    <div class="form">
                        <h4 class="mb-4 text-left">Send me a message</h4>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="my-2">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="my-2">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="my-2">Message</label>
                                <textarea id="textarea" name="message" placeholder=""></textarea>
                            </div>
                            <div class="input-group1">
                                <input class="form-control" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- //contact form -->
            </div>
        </div>
    </form>
</section>
