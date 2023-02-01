@extends('layouts.dashboard')

@section('content')
    <div class="container-xl px-4 mt-5">
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="me-4 mb-3 mb-sm-0">
                <h1 class="mb-0">{{ __('generic.dashboard') }}</h1>
                <div class="small">
                    <span id="time"></span>
                </div>
            </div>

            <form action="{{ route('panel.dashboard') }}" method="POST">
                @csrf
                <div class="input-group input-group-joined border-0 shadow" style="width: 20.5rem">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    <input name="toto" class="form-control pe-2 pointer" id="litepicker">
                    <button class="btn btn-success"><i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-green h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-green mb-1">{{ __('generic.earnings') }}</div>
                                <div class="h5">XXX €</div>
                                <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                    <i class="fas fa-chevron-up me-2"></i> XX%
                                </div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-euro-sign fa-2x text-green-soft"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-secondary mb-1">{{ __('generic.client') }}</div>
                                <div class="h5">XX</div>
                                <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                    <i class="fas fa-chevron-down me-2"></i> XX%
                                </div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-users fa-2x text-secondary-soft"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">{{ __('pages/dashboard.avg_money') }}</div>
                                <div class="h5">XX €</div>
                                <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                    <i class="fas fa-chevron-up me-2"></i> XX%
                                </div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-divide fa-2x text-primary-soft"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-start-lg border-start-yellow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-yellow mb-1">{{ __('pages/dashboard.avg_time') }}</div>
                                <div class="h5">XXHXX</div>
                                <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                    <i class="fas fa-chevron-up me-2"></i> XX%
                                </div>
                            </div>
                            <div class="ms-2">
                                <i class="fas fa-clock fa-2x text-yellow-soft"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Report summary card example-->
                <div class="card mb-4">
                    <div class="card-header">Affiliate Reports</div>
                    <div class="list-group list-group-flush small">
                        <a class="list-group-item list-group-item-action" href="#!">
                            <svg class="svg-inline--fa fa-dollar-sign fa-fw text-blue me-2" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z"></path>
                            </svg>
                            <!-- <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i> Font Awesome fontawesome.com -->
                            Earnings Reports
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <svg class="svg-inline--fa fa-tag fa-fw text-purple me-2" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="tag" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"></path>
                            </svg>
                            <!-- <i class="fas fa-tag fa-fw text-purple me-2"></i> Font Awesome fontawesome.com -->
                            Average Sale Price
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <svg class="svg-inline--fa fa-arrow-pointer fa-fw text-green me-2" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="arrow-pointer" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M318.4 304.5c-3.531 9.344-12.47 15.52-22.45 15.52h-105l45.15 94.82c9.496 19.94 1.031 43.8-18.91 53.31c-19.95 9.504-43.82 1.035-53.32-18.91L117.3 351.3l-75 88.25c-4.641 5.469-11.37 8.453-18.28 8.453c-2.781 0-5.578-.4844-8.281-1.469C6.281 443.1 0 434.1 0 423.1V56.02c0-9.438 5.531-18.03 14.12-21.91C22.75 30.26 32.83 31.77 39.87 37.99l271.1 240C319.4 284.6 321.1 295.1 318.4 304.5z"></path>
                            </svg>
                            <!-- <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i> Font Awesome fontawesome.com -->
                            Engagement (Clicks &amp; Impressions)
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <svg class="svg-inline--fa fa-percent fa-fw text-yellow me-2" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="percent" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M374.6 73.39c-12.5-12.5-32.75-12.5-45.25 0l-320 320c-12.5 12.5-12.5 32.75 0 45.25C15.63 444.9 23.81 448 32 448s16.38-3.125 22.62-9.375l320-320C387.1 106.1 387.1 85.89 374.6 73.39zM64 192c35.3 0 64-28.72 64-64S99.3 64.01 64 64.01S0 92.73 0 128S28.7 192 64 192zM320 320c-35.3 0-64 28.72-64 64s28.7 64 64 64s64-28.72 64-64S355.3 320 320 320z"></path>
                            </svg>
                            <!-- <i class="fas fa-percentage fa-fw text-yellow me-2"></i> Font Awesome fontawesome.com -->
                            Conversion Rate
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <svg class="svg-inline--fa fa-chart-pie fa-fw text-pink me-2" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="chart-pie" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M304 16.58C304 7.555 310.1 0 320 0C443.7 0 544 100.3 544 224C544 233 536.4 240 527.4 240H304V16.58zM32 272C32 150.7 122.1 50.34 238.1 34.25C248.2 32.99 256 40.36 256 49.61V288L412.5 444.5C419.2 451.2 418.7 462.2 411 467.7C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zM558.4 288C567.6 288 575 295.8 573.8 305C566.1 360.9 539.1 410.6 499.9 447.3C493.9 452.1 484.5 452.5 478.7 446.7L320 288H558.4z"></path>
                            </svg>
                            <!-- <i class="fas fa-chart-pie fa-fw text-pink me-2"></i> Font Awesome fontawesome.com -->
                            Segments
                        </a>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                View More Reports
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Progress card example-->
                <div class="card bg-primary border-0">
                    <div class="card-body">
                        <h5 class="text-white-50">Budget Overview</h5>
                        <div class="mb-4">
                            <span class="display-4 text-white">$48k</span>
                            <span class="text-white-50">per year</span>
                        </div>
                        <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <!-- Area chart example-->
                <div class="card mb-4">
                    <div class="card-header">Revenue Summary</div>
                    <div class="card-body">
                        <div class="chart-area">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="myAreaChart" width="875" height="240"
                                    style="display: block; width: 875px; height: 240px;"
                                    class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Bar chart example-->
                        <div class="card h-100">
                            <div class="card-header">Sales Reporting</div>
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="chart-bar">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myBarChart" width="403" height="240"
                                            style="display: block; width: 403px; height: 240px;"
                                            class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <div class="card-footer position-relative">
                                <a class="stretched-link" href="#!">
                                    <div class="text-xs d-flex align-items-center justify-content-between">
                                        View More Reports
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pie chart example-->
                        <div class="card h-100">
                            <div class="card-header">Traffic Sources</div>
                            <div class="card-body">
                                <div class="chart-pie mb-4">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myPieChart" width="403" height="240"
                                            style="display: block; width: 403px; height: 240px;"
                                            class="chartjs-render-monitor"></canvas>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-blue"></i>
                                            Direct
                                        </div>
                                        <div class="fw-500 text-dark">55%</div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-purple"></i>
                                            Social
                                        </div>
                                        <div class="fw-500 text-dark">15%</div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-green"></i>
                                            Referral
                                        </div>
                                        <div class="fw-500 text-dark">30%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
@endsection

@push('js')
    <script>
        let now = new Date();

        function refreshTime() {
            let now = new Date();

            document.getElementById("time").textContent = now.toLocaleString();
        }

        refreshTime();

        setInterval(refreshTime, 100);

        let firstDayOfMonth = new Date(now.getFullYear(), now.getMonth(), 1);
        let lastDayOfMonth = new Date(now.getFullYear(), now.getMonth() + 1, 0);

        const picker = new Litepicker({
            element: document.getElementById('litepicker'),
            startDate: firstDayOfMonth,
            endDate: lastDayOfMonth,
            singleMode: false,
            numberOfMonths: 2,
            numberOfColumns: 2,
            plugins: ['ranges'],
        });
    </script>
@endpush