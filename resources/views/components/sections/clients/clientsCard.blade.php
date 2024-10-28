@props([
    "src_img" => null,
    "href" => "#",
])
<div class="swiper-slide">
    <div class="div-img-clients">
        <a href="{{ $href }}">
            <img src="{{ asset($src_img) }}" alt="" />
        </a>
    </div>
</div>
