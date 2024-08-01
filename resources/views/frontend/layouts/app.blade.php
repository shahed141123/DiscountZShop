<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="{{ !empty($setting->site_motto) ? $setting->site_motto : config('app.name') }}" />
    <meta property="og:url" content="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <meta property="og:site_name"
        content="{{ !empty($setting->site_name) ? $setting->site_name : config('app.name') }}" />
    <link rel="canonical" href="{{ !empty($setting->site_url) ? $setting->site_name : config('app.url') }}" />
    <link rel="shortcut icon"
        href="{{ !empty($site->site_logo) && file_exists(public_path('storage/settings/' . $site->site_logo)) ? asset('storage/settings/' . $site->site_logo) : asset('images') }}"
        type="image/x-icon" />

    @props(['title'])
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- CSS Links -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider/slick-theme.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body>
    <div id="loader">
        <img src="{{ asset('frontend/assets/img/loader.gif') }}" alt="Loading..." />
    </div>

    <div id="content" style="display: none">
        <!-- Top Area Box -->
        @include('frontend.layouts.header-top')

        <!-- Top Area Box End -->
        <!-- Header and Navigation -->
        @include('frontend.layouts.header')
        <!-- Header and Navigation End -->
        <!-- Main Content Start -->
        <main>
            {{ $slot }}
        </main>
        <!-- Main Content End -->
        <!-- Footer Start -->
        @include('frontend.layouts.footer')

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>I will not close if you click outside of me.</div>
            </div>
        </div>
        <!-- Offcanvas Menu End -->
    </div>
    <!-- JavaScript Files -->
    <!-- Bootstrap 5.3 Bundle with Popper -->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.js') }}"></script>
    <!-- FontAwesome -->
    <script src="{{ asset('frontend/assets/js/icons/fontawesome.js') }}"></script>
    <!-- Slick Slider JavaScript -->
    <script src="{{ asset('frontend/assets/js/slider/slick.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('frontend/assets/js/script-dev.js') }}"></script>

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/bd/bd-all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"></script>
    <script>
        // Define your data for the map
        var data = [
            ["bd-da", 0],
            ["bd-sy", 1],
            ["bd-bk", 2],
            ["bd-kh", 3],
            ["bd-ba", 4],
            ["bd-cg", 5],
            ["bd-rp", 6],
            ["bd-rj", 7],
            ["bd-js", 8],
            ["bd-lg", 9],
            ["bd-br", 10],
            ["bd-co", 11],
            ["bd-hb", 12],
            ["bd-sh", 13],
            ["bd-dh", 14],
            ["bd-nj", 15],
            ["bd-pl", 16],
            ["bd-na", 17],
            ["bd-gb", 18],
            ["bd-md", 19],
            ["bd-mw", 20],
            ["bd-ct", 21],
            ["bd-kn", 22],
            ["bd-sw", 23],
            ["bd-rg", 24],
            ["bd-nk", 25],
            ["bd-lk", 26],
            ["bd-pb", 27],
            ["bd-fr", 28],
            ["bd-gz", 29],
            ["bd-sd", 30],
            ["bd-ss", 31],
            ["bd-ku", 32],
            ["bd-ra", 33],
            ["bd-mr", 34],
        ];

        // Create the chart
        var chart = Highcharts.mapChart("mapcontainer", {
            chart: {
                type: "map",
                map: "countries/bd/bd-all",
                backgroundColor: "rgba(0, 0, 0, 0)", // Transparent background color
            },

            title: {
                text: "",
                style: {
                    color: "#fff",
                },
            },

            subtitle: {
                text: "",
                style: {
                    color: "#fff",
                },
            },

            legend: {
                enabled: false,
            },

            tooltip: {
                enabled: false,
            },

            navigation: {
                buttonOptions: {
                    enabled: false,
                },
            },

            credits: {
                enabled: false,
            },

            plotOptions: {
                series: {
                    point: {
                        events: {
                            click: function() {
                                updateDetails(this.series.name, this.name, this.value);
                            },
                        },
                    },
                },
            },

            series: [{
                data: data,
                name: "Random data",
                allowPointSelect: true,
                cursor: "pointer",
                color: "#fff",
                states: {
                    select: {
                        color: "#f15a2d",
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: "{point.name}",
                },
            }, ],
        });

        // Function to update details
        function updateDetails(seriesName, pointName, pointValue) {
            var pointNameElem = document.getElementById("pointName");
            if (pointNameElem) {
                pointNameElem.textContent = pointName;
            }
        }
    </script>
    @include('toastr')
    @stack('scripts')
</body>

</html>
