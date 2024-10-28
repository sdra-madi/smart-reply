<section id="pricing" class="pricing section">
    <div class="container section-title" data-aos="fade-up">
      <h2>{{__("core.pricing")}}</h2>
      <p>{{__("core.pricing_title")}}<br /></p>
    </div>

    <div class="container">
      <div class="row gy-4">
        
        <x-sections.pricing.pricingCard data_aos_delay="100" class_div_color="#20c997" title_div="Free Plan" price="0" class_icone="bi-box" featured="" text_span=""/>

        <x-sections.pricing.pricingCard data_aos_delay="200" class_div_color="#0dcaf0" title_div="Starter Plan" price="19" class_icone="bi-send" featured="featured" text_span="Featured"/>

        <x-sections.pricing.pricingCard data_aos_delay="300" class_div_color="#fd7e14" title_div="Business Plan" price="29" class_icone="bi-airplane" featured="" text_span=""/>

        <x-sections.pricing.pricingCard data_aos_delay="400" class_div_color="#0d6efd" title_div="Ultimate Plan" price="49" class_icone="bi-rocket" featured="" text_span=""/>

      </div>
      <!-- End pricing row -->
    </div>
  </section>