@props([
    'icon' => 'fa-user-plus',       // أيقونة افتراضية
    'message' => 'New user registered',  // رسالة افتراضية
    'time' => '5 minutes ago'        // الوقت الافتراضي
])

<a href="#">
    <div class="notif-icon notif-primary">
        <i class="fa {{ $icon }}"></i>
    </div>
    <div class="notif-content">
        <span class="block">{{ $message }}</span>
        <span class="time">{{ $time }}</span>
    </div>
</a>