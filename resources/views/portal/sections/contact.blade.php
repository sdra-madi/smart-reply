<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('core.contact') }}</h2>
        <p>{{ __('core.contact_us') }}</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>{{ __('core.address') }}</h3>
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>{{ __('core.call_us') }}</h3>
                            <p>+1 5589 55488 55</p>
                            <p>+1 6678 254445 41</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>{{ __('core.email_us') }}</h3>
                            <p>info@example.com</p>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>{{ __('core.open_hours') }}</h3>
                            <p>Monday - Friday</p>
                            <p>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control"
                                placeholder="{{ __('core.your_name') }}" required="" />
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email"
                                placeholder="{{ __('core.your_email') }}" required="" />
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="subject"
                                placeholder="{{ __('core.your_subject') }}" required="" />
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="{{ __('core.your_message') }}" required=""></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>

                            <button type="submit">{{ __('core.btn_text_sent') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>
