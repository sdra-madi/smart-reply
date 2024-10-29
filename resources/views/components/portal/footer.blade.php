<footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>{{ __('core.news') }}</h4>
            <p>
              {{ __('core.descripton_news_footer') }}
            </p>
            <form
              action="forms/newsletter.php"
              method="post"
              class="php-email-form"
            >
              <div class="newsletter-form">
                <input
                  type="email"
                  placeholder="{{ __('core.placeholder_news_footer') }}"
                  name="email"
                /><input type="submit" value="Subscribe" />
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                {{ __('core.sent_message') }}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Wesam Code</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street New York, NY 535022</p>
            <p class="mt-3">
              <strong>{{ __('core.phone') }} :</strong> <span>+1 5589 55488 55</span>
            </p>
            <p>
              <strong>{{ __('core.email') }} :</strong> <span>info@example.com</span>
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ __('core.links') }}</h4>
          <ul>
            
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('core.home') }}</a></li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">{{ __('core.about') }}</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">{{ __('core.services') }}</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">{{ __('core.pricing') }}</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">{{ __('core.contact') }}</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Web Development</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Product Management</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>
            {{ __('core.follow_us') }}
          </h4>
          <p>
            {{ __('core.description_follow_footer') }}
          </p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        © <span>{{ __('core.copyright') }}</span>
        <strong class="px-1 sitename">{{ __('core.name_com') }}</strong>
        <span>{{ __('core.description_copyright') }}</span>
      </p>
      <div class="credits">{{ __('core.name_com') }}</div>
    </div>
  </footer>
  <div class="book d-flex align-items-center justify-content-center">
    <span class="lightMode" id="lightMode">
      <i class="bi bi-moon icone"></i>
    </span>
    <span class="lightMode">
      <a href="#">EN</a>
    </span>
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
  </div>