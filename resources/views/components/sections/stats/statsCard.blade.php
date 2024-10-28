@props([
    "color" => null,
    "data_purecounter_end" => null,
    "name_type" => null,
    "class_icone" => null,
])
    <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi {{$class_icone}} color-orange flex-shrink-0"
            style="color: {{$color}}"
            ></i>
            <div>
                <span
                data-purecounter-start="0"
                data-purecounter-end="{{$data_purecounter_end}}"
                data-purecounter-duration="1"
                class="purecounter"
                ></span>
                <p>{{$name_type}}</p>
            </div>
        </div>
    </div>
     