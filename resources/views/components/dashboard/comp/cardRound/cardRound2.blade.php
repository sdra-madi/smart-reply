@props([
    'Jan' => '99',
    'Feb' => '125',
    'Mar' => '122',
    'Apr' => '105',
    'May' => '110',
    'Jun' => '124',
    'Jul' => '115',
    'Aug' => '434',
    'Sep' => '568',
    'Oct' => '610',
    'Nov' => '700',
    'Dec' => '900',
    'title' => 'Users Online',
    'description' => 'Active users at the moment',
    'usersOnline' => '17', // عدد المستخدمين الحاليين
    'percentageChange' => '+5%', // نسبة التغيير
])
<div class="card card-round">
    <div class="card-body pb-0">
        <div class="h1 fw-bold float-end text-primary">{{ $percentageChange }}</div>
        <h2 class="mb-2">{{ $usersOnline }}</h2>
        <p class="text-muted">{{ $description }}</p>
        <div class="pull-in sparkline-fix">
            <div id="lineChart2"></div>
        </div>
    </div>
</div>

@push('end_js')
    <script>
        $(document).ready(function() {
            $("#lineChart2").sparkline([
                {{ $Jan }},
                {{ $Feb }},
                {{ $Mar }},
                {{ $Apr }},
                {{ $May }},
                {{ $Jun }},
                {{ $Jul }},
                {{ $Aug }},
                {{ $Sep }},
                {{ $Oct }},
                {{ $Nov }},
                {{ $Dec }},
            ], {
                type: "line",
                height: "70",
                width: "100%",
                lineWidth: "2",
                lineColor: "#177dff",
                fillColor: "rgba(23, 125, 255, 0.14)"
            });
        });
    </script>
@endpush
