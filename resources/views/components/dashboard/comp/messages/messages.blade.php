@props([
    'src' => 'portal/assets-dash/img/jm_denis.jpg',
    'subject' => 'Jimmy Denis',
    'message' => 'How are you ?',
    'time' => '5 minutes ago'
])

<a href="#">
    <div class="notif-img">
        <img src="{{ asset($src) }}" alt="Img Profile" />
    </div>
    <div class="notif-content">
        <span class="subject">{{ $subject }}</span>
        <span class="block">{{ $message }}</span>
        <span class="time">{{ $time }}</span>
    </div>
</a>
