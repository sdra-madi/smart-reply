@props([
    "data_aos_delay" => null,
    "class_icone" => null,
    "title_name" => null,
    "description" => null,
    "class_div_color" => null

])

<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{$data_aos_delay}}">
    <div class="service-item {{$class_div_color}} position-relative">
        <i class="bi {{$class_icone}} icon"></i>
        <h3>{{$title_name}}</h3>
        <p>
            {{$description}}
        </p>
        <a href="#" class="read-more stretched-link"
            ><span>{{__("core.read_more")}}</span> <i class="bi bi-arrow-right"></i
        ></a>
    </div>
</div>