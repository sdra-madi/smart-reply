@props([
    "data_aos_delay" => null,
    "class_div_color" => null,
    "title_div" => null,
    "price" => null,
    "class_icone" => null,
    "text_span" => null,
    "featured" => null,
])

<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{$data_aos_delay}}">
    <div class="pricing-tem">
        <span class="{{$featured}}">{{$featured}}</span>
        <h3 style="color: {{$class_div_color}}">{{$title_div}}</h3>
        <div class="price"><sup>$</sup>{{$price}}<span> / mo</span></div>
        <div class="icon">
            <i class="bi {{$class_icone}}" style="color: {{$class_div_color}}"></i>
        </div>
        <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
        </ul>
        <a href="#" class="btn-buy">{{__("core.buy_now")}}</a>
    </div>
</div>