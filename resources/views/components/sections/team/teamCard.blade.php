@props([
    'imgSrc' => null,
    'name' => null,
    'position' => null,
    'description' => null,
    'socialLinks' => [
        'twitter' => null,
        'facebook' => null,
        'instagram' => null,
        'linkedin' => null,
    ],
    " data_aos_delay" => null,

])

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{$data_aos_delay}}">
    <div class="team-member">
        <div class="member-img">
            <img src="{{ asset($imgSrc) }}" class="img-fluid" alt="{{ $name }}" />
            <div class="social">
                @if(isset($socialLinks['twitter']))
                    <a href="{{ $socialLinks['twitter'] }}"><i class="bi bi-twitter"></i></a>
                @endif
                @if(isset($socialLinks['facebook']))
                    <a href="{{ $socialLinks['facebook'] }}"><i class="bi bi-facebook"></i></a>
                @endif
                @if(isset($socialLinks['instagram']))
                    <a href="{{ $socialLinks['instagram'] }}"><i class="bi bi-instagram"></i></a>
                @endif
                @if(isset($socialLinks['linkedin']))
                    <a href="{{ $socialLinks['linkedin'] }}"><i class="bi bi-linkedin"></i></a>
                @endif
            </div>
        </div>
        <div class="member-info">
            <h4>{{ $name }}</h4>
            <span>{{ $position }}</span>
            <p>{{ $description }}</p>
        </div>
    </div>
</div>
