window.addEventListener("load", function (event) {
    // استرجاع القيم المحفوظة
    const savedValue = localStorage.getItem("task-complete-value");
    if (savedValue) {
        Circles.create({
            id: "task-complete",
            radius: 50,
            value: savedValue, // استخدم القيمة المحفوظة
            maxValue: 100,
            width: 5,
            text: function (value) {
                return value + "%";
            },
            colors: ["#36a3f7", "#fff"],
            duration: 400,
            wrpClass: "circles-wrp",
            textClass: "circles-text",
            styleWrapper: true,
            styleText: true,
        });
    } else {
        Circles.create({
            id: "task-complete",
            radius: 50,
            value: 80, // القيمة الافتراضية
            maxValue: 100,
            width: 5,
            text: function (value) {
                return value + "%";
            },
            colors: ["#36a3f7", "#fff"],
            duration: 400,
            wrpClass: "circles-wrp",
            textClass: "circles-text",
            styleWrapper: true,
            styleText: true,
        });
    }

    // حفظ القيمة عند تغييرها (يمكنك استبدالها بطريقة معينة إذا كنت تستخدمها)
    // على سبيل المثال، عند الضغط على زر معين
    document
        .getElementById("saveButton")
        .addEventListener("click", function () {
            const newValue = 90; // أو قم بتحديد القيمة الجديدة التي تريد حفظها
            localStorage.setItem("task-complete-value", newValue);
        });

    // إضافة النموذج
    $("body").append(modalShowcase);
    const myModal = new bootstrap.Modal("#modalShowcase");
    myModal.show();
});
// Jsvectormap
var world_map = new jsVectorMap({
    selector: "#world-map",
    map: "world",
    zoomOnScroll: false,
    regionStyle: {
        hover: {
            fill: "#435ebe",
        },
    },
    markers: [
        {
            name: "Indonesia",
            coords: [-6.229728, 106.6894311],
            style: { fill: "#435ebe" },
        },
        {
            name: "United States",
            coords: [38.8936708, -77.1546604],
            style: { fill: "#28ab55" },
        },
        {
            name: "Russia",
            coords: [55.5807481, 36.825129],
            style: { fill: "#f3616d" },
        },
        { name: "China", coords: [39.9385466, 116.1172735] },
        { name: "United Kingdom", coords: [51.5285582, -0.2416812] },
        { name: "India", coords: [26.8851417, 75.6504721] },
        { name: "Australia", coords: [-35.2813046, 149.124822] },
        { name: "Brazil", coords: [-22.9140693, -43.5860681] },
        { name: "Egypt", coords: [26.834955, 26.3823725] },
    ],
    onRegionTooltipShow(event, tooltip) {
        tooltip.css({ backgroundColor: "#435ebe" });
    },
});

// Chart
var ctx = document.getElementById("statisticsChart").getContext("2d");
var statisticsChart = new Chart(ctx, {
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
        datasets: [
            {
                label: "Subscribers",
                borderColor: "#f3545d",
                pointBackgroundColor: "rgba(243, 84, 93, 0.6)",
                pointRadius: 0,
                backgroundColor: "rgba(243, 84, 93, 0.4)",
                legendColor: "#f3545d",
                fill: true,
                borderWidth: 2,
                data: [
                    154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374,
                ],
            },
            {
                label: "New Visitors",
                borderColor: "#fdaf4b",
                pointBackgroundColor: "rgba(253, 175, 75, 0.6)",
                pointRadius: 0,
                backgroundColor: "rgba(253, 175, 75, 0.4)",
                legendColor: "#fdaf4b",
                fill: true,
                borderWidth: 2,
                data: [
                    256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521,
                ],
            },
            {
                label: "Active Users",
                borderColor: "#177dff",
                pointBackgroundColor: "rgba(23, 125, 255, 0.6)",
                pointRadius: 0,
                backgroundColor: "rgba(23, 125, 255, 0.4)",
                legendColor: "#177dff",
                fill: true,
                borderWidth: 2,
                data: [
                    542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900,
                ],
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false,
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
            padding: { left: 5, right: 5, top: 15, bottom: 15 },
        },
        scales: {
            yAxes: [
                {
                    ticks: {
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 5,
                        padding: 10,
                    },
                    gridLines: {
                        drawTicks: false,
                        display: true,
                        color: "#e3e3e3",
                        zeroLineColor: "transparent",
                    },
                },
            ],
            xAxes: [
                {
                    ticks: {
                        padding: 10,
                        fontStyle: "500",
                    },
                    gridLines: {
                        zeroLineColor: "transparent",
                        display: true,
                    },
                },
            ],
        },
    },
});
