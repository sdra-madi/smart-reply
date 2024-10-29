@props([
    'Jan' => '542',
    'Feb' => '480',
    'Mar' => '430',
    'Apr' => '550',
    'May' => '530',
    'Jun' => '453',
    'Jul' => '380',
    'Aug' => '434',
    'Sep' => '568',
    'Oct' => '610',
    'Nov' => '700',
    'Dec' => '900',
])
<div class="card card-round">
    <div class="card-header">
        <div class="card-head-row">
            <div class="card-title">
                User Statistics
            </div>
            <div class="card-tools">
                <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                    <span class="btn-label">
                        <i class="fa fa-pencil"></i>
                    </span>
                    Export
                </a>
                <a href="#" class="btn btn-label-info btn-round btn-sm">
                    <span class="btn-label">
                        <i class="fa fa-print"></i>
                    </span>
                    Print
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
</div>
@push('end_js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lineChart = document.getElementById("lineChart").getContext("2d");
            var myLineChart = new Chart(lineChart, {
                type: "line",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [{
                        label: "Active Users",
                        borderColor: "#1d7af3",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#1d7af3",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        borderWidth: 2,
                        data: [
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
                        ],
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "bottom",
                        labels: {
                            padding: 10,
                            fontColor: "#1d7af3",
                        },
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest",
                        xPadding: 10,
                        yPadding: 10,
                        caretPadding: 10,
                    },
                    layout: {
                        padding: {
                            left: 15,
                            right: 15,
                            top: 15,
                            bottom: 15
                        },
                    },
                },
            });
        });
    </script>
@endpush
