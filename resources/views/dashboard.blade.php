@extends('layouts.master')

@section('page-action')
    <div class="btn-list">
        <span class="d-none d-sm-inline">
            <a href="#" class="btn">
                New view
            </a>
        </span>
        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
            data-bs-target="#modal-report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            Create new report
        </a>

        {{-- <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report"
           aria-label="Create new report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 5l0 14"/>
                <path d="M5 12l14 0"/>
            </svg>
        </a> --}}
    </div>
@endsection
@section('page-content')
    <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Sales</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                        <div>Conversion rate</div>
                        <div class="ms-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                7%
                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                            <span class="visually-hidden">75% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Revenue</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-0 me-2">$4,300</div>
                        <div class="me-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                8%
                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="chart-revenue-bg" class="chart-sm"></div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">New clients</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2">6,782</div>
                        <div class="me-auto">
                            <span class="text-yellow d-inline-flex align-items-center lh-1">
                                0%
                                <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="chart-new-clients" class="chart-sm"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Active users</div>
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2">2,986</div>
                        <div class="me-auto">
                            <span class="text-green d-inline-flex align-items-center lh-1">
                                4%
                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 17l6 -6l4 4l8 -8" />
                                    <path d="M14 7l7 0l0 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div id="chart-active-users" class="chart-sm"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                            <path d="M12 3v3m0 12v3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132 Sales
                                    </div>
                                    <div class="text-muted">
                                        12 waiting payments
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-green text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M17 17h-11v-14h-2" />
                                            <path d="M6 5l14 1l-1 7h-13" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        78 Orders
                                    </div>
                                    <div class="text-muted">
                                        32 shipped
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-twitter text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        623 Shares
                                    </div>
                                    <div class="text-muted">
                                        16 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-facebook text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132 Likes
                                    </div>
                                    <div class="text-muted">
                                        21 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Traffic summary</h3>
                    <div id="chart-mentions" class="chart-lg"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Locations</h3>
                    <div class="ratio ratio-21x9">
                        <div>
                            <div id="map-world" class="w-100 h-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                            <div class="progress progress-separated mb-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"
                                    aria-label="Regular"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 19%"
                                    aria-label="System"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 9%"
                                    aria-label="Shared"></div>
                            </div>
                            <div class="row">
                                <div class="col-auto d-flex align-items-center pe-2">
                                    <span class="legend me-2 bg-primary"></span>
                                    <span>Regular</span>
                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                </div>
                                <div class="col-auto d-flex align-items-center px-2">
                                    <span class="legend me-2 bg-info"></span>
                                    <span>System</span>
                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                                </div>
                                <div class="col-auto d-flex align-items-center px-2">
                                    <span class="legend me-2 bg-success"></span>
                                    <span>Shared</span>
                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                                </div>
                                <div class="col-auto d-flex align-items-center ps-2">
                                    <span class="legend me-2"></span>
                                    <span>Free</span>
                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card" style="height: 28rem">
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">JL</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a
                                                    witch."</strong> post.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/002m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/003m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dunn Slane</strong> posted <strong>"Well, what do you
                                                    want?"</strong>.
                                            </div>
                                            <div class="text-muted">today</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/000f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Emmy Levet</strong> created a new project <strong>Morning alarm
                                                    clock</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/001f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Maryjo Lebarree</strong> liked your photo.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">EP</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Egan Poetz</strong> registered new client as
                                                <strong>Trilia</strong>.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/002f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen
                                                    Pineapple Apple Pen</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/003f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Christabel Charlwood</strong> created a new project for
                                                <strong>Wikibox</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">HS</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Haskel Shelper</strong> change status of <strong>Tabler
                                                    Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                                            </div>
                                            <div class="text-muted">today</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/006m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/004f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Leesa Beaty</strong> posted new video.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/007m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Perren Keemar</strong> and 3 others followed you.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">SA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Sunny Airey</strong> upload 3 new photos to category
                                                <strong>Inspirations</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/009m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/010m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Thatcher Keel</strong> created a profile.
                                            </div>
                                            <div class="text-muted">3 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/005f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI
                                                    Birthday</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar"
                                                style="background-image: url(./static/avatars/006f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of
                                                    2020</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">AA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda
                                                    Blake</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="card-title">Development activity</div>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                        <div class="row g-2">
                            <div class="col-auto">
                                <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity"></div>
                            </div>
                            <div class="col">
                                <div>Today's Earning: $4,262.40</div>
                                <div class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 17l6 -6l4 4l8 -8" />
                                        <path d="M14 7l7 0l0 7" />
                                    </svg>
                                    +5% more than yesterday
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chart-development-activity"></div>
                </div>
                <div class="card-table table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Commit</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/000m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Fix dart Sass compatibility (#29755)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">28 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm">JL</span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Change deprecated html tags to text decoration classes (#29604)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">27 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/002m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Update change-version.js (#29736)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/000f.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Regenerate package-lock.json (#29730)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">25 Nov 2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                            <path d="M10 10l.01 0" />
                            <path d="M14 10l.01 0" />
                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h3 class="h1">Tabler Icons</h3>
                            <div class="markdown text-muted">
                                All icons come from the Tabler Icons set and are MIT-licensed. Visit
                                <a href="https://tabler-icons.io" target="_blank" rel="noopener">tabler-icons.io</a>,
                                download any of the 3222 icons in SVG, PNG or&nbsp;React and use them in your favourite
                                design tools.
                            </div>
                            <div class="mt-3">
                                <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank"
                                    rel="noopener">Download icons</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Most Visited Pages</h3>
                </div>
                <div class="card-table table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                            <tr>
                                <th>Page name</th>
                                <th>Visitors</th>
                                <th>Unique</th>
                                <th colspan="2">Bounce rate</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                /
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">4,896</td>
                            <td class="text-muted">3,654</td>
                            <td class="text-muted">82.54%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                /form-elements.html
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">3,652</td>
                            <td class="text-muted">3,215</td>
                            <td class="text-muted">76.29%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                /index.html
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">3,256</td>
                            <td class="text-muted">2,865</td>
                            <td class="text-muted">72.65%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                /icons.html
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">986</td>
                            <td class="text-muted">865</td>
                            <td class="text-muted">44.89%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                /docs/
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">912</td>
                            <td class="text-muted">822</td>
                            <td class="text-muted">41.12%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                /accordion.html
                                <a href="#" class="ms-1" aria-label="Open website">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-muted">855</td>
                            <td class="text-muted">798</td>
                            <td class="text-muted">32.65%</td>
                            <td class="text-end w-1">
                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener"
                style="background-image: url(./static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
                <div class="card-body"></div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Social Media Traffic</h3>
                </div>
                <table class="table card-table table-vcenter">
                    <thead>
                        <tr>
                            <th>Network</th>
                            <th colspan="2">Visitors</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Instagram</td>
                            <td>3,550</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>1,798</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>1,245</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>TikTok</td>
                            <td>986</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Pinterest</td>
                            <td>854</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>VK</td>
                            <td>650</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Pinterest</td>
                            <td>420</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tasks</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task"
                                    checked>
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Extend the data model.</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                August 04, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    2/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    3
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm"
                                    style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle"
                                    aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Verify the event flow.</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                January 03, 2019
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    3/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    6
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm">JL</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle"
                                    aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Database backup and maintenance</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                December 28, 2018
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    0/6
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    1
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm"
                                    style="background-image: url(./static/avatars/002m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task"
                                    checked>
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Identify the implementation team.</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                November 07, 2020
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    6/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    12
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm"
                                    style="background-image: url(./static/avatars/003m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle"
                                    aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Define users and workflow</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                November 23, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    3/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    5
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm"
                                    style="background-image: url(./static/avatars/000f.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle"
                                    aria-label="Select task" checked>
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Check Pull Requests</a>
                            </td>
                            <td class="text-nowrap text-muted">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M11 15l1 0" />
                                    <path d="M12 15l0 3" />
                                </svg>
                                January 14, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    2/9
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <path d="M8 9l8 0" />
                                        <path d="M8 13l6 0" />
                                    </svg>
                                    3
                                </a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm"
                                    style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8"
                                    size="3" aria-label="Invoices count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-muted">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm"
                                    aria-label="Search invoice">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select all invoices"></th>
                                <th class="w-1">No.
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 15l6 -6l6 6" />
                                    </svg>
                                </th>
                                <th>Invoice Subject</th>
                                <th>Client</th>
                                <th>VAT No.</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001401</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                                <td>
                                    <span class="flag flag-country-us"></span>
                                    Carlson Limited
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    15 Dec 2017
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Paid
                                </td>
                                <td>$887</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001402</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                                <td>
                                    <span class="flag flag-country-gb"></span>
                                    Adobe
                                </td>
                                <td>
                                    87956421
                                </td>
                                <td>
                                    12 Apr 2017
                                </td>
                                <td>
                                    <span class="badge bg-warning me-1"></span> Pending
                                </td>
                                <td>$1200</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001403</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                                <td>
                                    <span class="flag flag-country-de"></span>
                                    Bluewolf
                                </td>
                                <td>
                                    87952621
                                </td>
                                <td>
                                    23 Oct 2017
                                </td>
                                <td>
                                    <span class="badge bg-warning me-1"></span> Pending
                                </td>
                                <td>$534</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001404</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                                <td>
                                    <span class="flag flag-country-br"></span>
                                    Salesforce
                                </td>
                                <td>
                                    87953421
                                </td>
                                <td>
                                    2 Sep 2017
                                </td>
                                <td>
                                    <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                                </td>
                                <td>$1500</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001405</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a>
                                </td>
                                <td>
                                    <span class="flag flag-country-pl"></span>
                                    Printic
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    29 Jan 2018
                                </td>
                                <td>
                                    <span class="badge bg-danger me-1"></span> Paid Today
                                </td>
                                <td>$648</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001406</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a>
                                </td>
                                <td>
                                    <span class="flag flag-country-br"></span>
                                    Tabdaq
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    4 Feb 2018
                                </td>
                                <td>
                                    <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                                </td>
                                <td>$300</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001407</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                                <td>
                                    <span class="flag flag-country-us"></span>
                                    Apple
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    22 Mar 2018
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Paid Today
                                </td>
                                <td>$2500</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">001408</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                                <td>
                                    <span class="flag flag-country-pl"></span>
                                    Tookapic
                                </td>
                                <td>
                                    87956621
                                </td>
                                <td>
                                    13 May 2018
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Paid Today
                                </td>
                                <td>$940</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 6l-6 6l6 6" />
                                </svg>
                                prev
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                next
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 6l6 6l-6 6" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-12">
        <form action="https://httpbin.org/post" method="post" class="card">
            <div class="card-header">
                <h4 class="card-title">Form elements</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Static</label>
                                    <div class="form-control-plaintext">Input value</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Text</label>
                                    <input type="text" class="form-control" name="example-text-input"
                                           placeholder="Input placeholder">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="example-password-input"
                                           placeholder="Input placeholder">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Disabled</label>
                                    <input type="text" class="form-control" name="example-disabled-input"
                                           placeholder="Disabled..." value="Well, she turned me into a newt."
                                           disabled="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Readonly</label>
                                    <input type="text" class="form-control" name="example-disabled-input"
                                           placeholder="Readonly..." value="Well, how'd you become king, then?"
                                           readonly="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Required</label>
                                    <input type="text" class="form-control" name="example-required-input"
                                           placeholder="Required...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Textarea <span
                                            class="form-label-description">56/100</span></label>
                                    <textarea class="form-control" name="example-textarea-input" rows="6"
                                              placeholder="Content..">Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Select</div>
                                    <select class="form-select">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Select multiple</div>
                                    <select class="form-select" multiple="">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input group</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Search for…">
                                        <button class="btn" type="button">Go!</button>
                                    </div>
                                    <div class="input-group">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                        <input type="text" class="form-control"
                                               aria-label="Text input with dropdown button">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input group buttons</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="button" class="btn">Action</button>
                                        <button data-bs-toggle="dropdown" type="button"
                                                class="btn dropdown-toggle dropdown-toggle-split"></button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Icon input</label>
                                    <div class="input-icon mb-3">
                                        <input type="text" value="" class="form-control" placeholder="Search…">
                                        <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path
                                          d="M21 21l-6 -6"></path></svg>
                                </span>
                                    </div>
                                    <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path
                                          d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                </span>
                                        <input type="text" value="" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Loader input</label>
                                    <div class="input-icon mb-3">
                                        <input type="text" value="" class="form-control" placeholder="Loading…">
                                        <span class="input-icon-addon">
                                  <div class="spinner-border spinner-border-sm text-muted" role="status"></div>
                                </span>
                                    </div>
                                    <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <div class="spinner-border spinner-border-sm text-muted" role="status"></div>
                                </span>
                                        <input type="text" value="" class="form-control" placeholder="Loading…">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Separated inputs</label>
                                    <div class="row g-2">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Search for…">
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-icon" aria-label="Button">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                     height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                    <path d="M21 21l-6 -6"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with help icon</label>
                                    <div class="row g-2">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Search for…">
                                        </div>
                                        <div class="col-auto align-self-center">
                                  <span class="form-help" data-bs-toggle="popover" data-bs-placement="top"
                                        data-bs-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
                                  <p class='mb-0'><a href='#'>USP ZIP codes lookup tools</a></p>
                                  " data-bs-html="true">?</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Form control rounded</label>
                                    <input type="text" class="form-control form-control-rounded mb-2"
                                           name="Form control rounded" placeholder="Text..">
                                    <div class="input-icon">
                                        <input type="text" value="" class="form-control form-control-rounded"
                                               placeholder="Search…">
                                        <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                          d="M0 0h24v24H0z"
                                                                                          fill="none"></path><path
                                        d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path
                                        d="M21 21l-6 -6"></path></svg>
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Form control flush</label>
                                    <input type="text" class="form-control form-control-flush" name="Form control flush"
                                           placeholder="Text..">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input group</label>
                                    <div class="input-group mb-2">
                              <span class="input-group-text">
                                @
                              </span>
                                        <input type="text" class="form-control" placeholder="username"
                                               autocomplete="off">
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="subdomain"
                                               autocomplete="off">
                                        <span class="input-group-text">
                                .tabler.io
                              </span>
                                    </div>
                                    <div class="input-group">
                              <span class="input-group-text">
                                https://
                              </span>
                                        <input type="text" class="form-control" placeholder="subdomain"
                                               autocomplete="off">
                                        <span class="input-group-text">
                                .tabler.io
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with checkbox or radios</label>
                                    <div class="input-group mb-2">
                              <span class="input-group-text">
                                <input class="form-check-input m-0" type="checkbox" checked="">
                              </span>
                                        <input type="text" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off">
                                        <span class="input-group-text">
                                <input class="form-check-input m-0" type="radio" checked="">
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with prepended text</label>
                                    <div class="input-group input-group-flat">
                              <span class="input-group-text">
                                https://tabler.io/users/
                              </span>
                                        <input type="text" class="form-control ps-0" value="yourfancyusername"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with appended text</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control text-end pe-0" value="yourfancydomain"
                                               autocomplete="off">
                                        <span class="input-group-text">
                                .tabler.io
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with appended link</label>
                                    <div class="input-group input-group-flat">
                                        <input type="password" class="form-control" value="ultrastrongpassword"
                                               autocomplete="off">
                                        <span class="input-group-text">
                                <a href="#" class="input-group-link">Show password</a>
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with appended kbd</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control" autocomplete="off">
                                        <span class="input-group-text">
                                <kbd>ctrl + K</kbd>
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input with appended icon links</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control" autocomplete="off">
                                        <span class="input-group-text">
                                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Clear search"
                                   data-bs-original-title="Clear search"><!-- Download SVG icon from http://tabler-icons.io/i/x -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M18 6l-12 12"></path><path d="M6 6l12 12"></path></svg>
                                </a>
                                <a href="#" class="link-secondary ms-2" data-bs-toggle="tooltip"
                                   aria-label="Search settings" data-bs-original-title="Search settings"><!-- Download SVG icon from http://tabler-icons.io/i/adjustments -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M6 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M6 4l0 4"></path><path
                                          d="M6 12l0 8"></path><path
                                          d="M12 16m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path
                                          d="M12 4l0 10"></path><path d="M12 18l0 2"></path><path
                                          d="M18 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M18 4l0 1"></path><path
                                          d="M18 9l0 11"></path></svg>
                                </a>
                                <a href="#" class="link-secondary ms-2 disabled" data-bs-toggle="tooltip"
                                   aria-label="Add notification" data-bs-original-title="Add notification"><!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path
                                          d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>
                                </a>
                              </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Floating inputs</label>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floating-input"
                                               value="name@example.com" autocomplete="off">
                                        <label for="floating-input">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floating-password"
                                               value="Password" autocomplete="off">
                                        <label for="floating-password">Password</label>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelect">Select</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Image Check</label>
                                    <div class="row g-2">
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="1"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img
                                        src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg"
                                        alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach"
                                        class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="2"
                                                       class="form-imagecheck-input" checked="">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/brainstorming-session-with-creative-designers.jpg"
                                         alt="Brainstorming session with creative designers"
                                         class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="3"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg"
                                         alt="Finances - US Dollars and Bitcoins - Currency - Money"
                                         class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="4"
                                                       class="form-imagecheck-input" checked="">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg"
                                         alt="Group of people brainstorming and taking notes"
                                         class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="5"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img
                                        src="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg"
                                        alt="Blue sofa with pillows in a designer living room interior"
                                        class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck" type="checkbox" value="6"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img
                                        src="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg"
                                        alt="Home office desk with Macbook, iPhone, calendar, watch &amp; organizer"
                                        class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image Check Radio</label>
                                    <div class="row g-2">
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="1"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/group-of-people-sightseeing-in-the-city.jpg"
                                         alt="Group of people sightseeing in the city" class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="2"
                                                       class="form-imagecheck-input" checked="">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/color-palette-guide-sample-colors-catalog-.jpg"
                                         alt="Color Palette Guide. Sample Colors Catalog."
                                         class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="3"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/stylish-workplace-with-computer-at-home.jpg"
                                         alt="Stylish workplace with computer at home" class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="4"
                                                       class="form-imagecheck-input" checked="">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/pink-desk-in-the-home-office.jpg"
                                         alt="Pink desk in the home office" class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="5"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img
                                        src="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg"
                                        alt="Young woman sitting on the sofa and working on her laptop"
                                        class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <label class="form-imagecheck mb-2">
                                                <input name="form-imagecheck-radio" type="radio" value="6"
                                                       class="form-imagecheck-input">
                                                <span class="form-imagecheck-figure">
                                    <img src="./static/photos/coffee-on-a-table-with-other-items.jpg"
                                         alt="Coffee on a table with other items" class="form-imagecheck-image">
                                  </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Color Input</label>
                                    <div class="row g-2">
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="dark"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-dark"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput form-colorinput-light">
                                                <input name="color" type="radio" value="white"
                                                       class="form-colorinput-input" checked="">
                                                <span class="form-colorinput-color bg-white"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="blue"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-blue"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="azure"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-azure"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="indigo"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-indigo"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="purple"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-purple"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="pink"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-pink"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="red"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-red"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="orange"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-orange"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="yellow"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-yellow"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color" type="radio" value="lime"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-lime"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Color Input</label>
                                    <div class="row g-2">
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="dark"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-dark rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput form-colorinput-light">
                                                <input name="color-rounded" type="radio" value="white"
                                                       class="form-colorinput-input" checked="">
                                                <span class="form-colorinput-color bg-white rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="blue"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-blue rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="azure"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-azure rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="indigo"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-indigo rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="purple"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-purple rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="pink"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-pink rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="red"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-red rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="orange"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-orange rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="yellow"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-yellow rounded-circle"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color-rounded" type="radio" value="lime"
                                                       class="form-colorinput-input">
                                                <span class="form-colorinput-color bg-lime rounded-circle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Color picker</label>
                                    <input type="color" class="form-control form-control-color" value="#206bc4"
                                           title="Choose your color">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Validation States </label>
                                    <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
                                    <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
                                    <div class="invalid-feedback">Invalid feedback</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Validation States (lite)</label>
                                    <input type="text" class="form-control is-valid is-valid-lite mb-2"
                                           placeholder="Valid State..">
                                    <input type="text" class="form-control is-invalid is-invalid-lite"
                                           placeholder="Invalid State..">
                                </div>
                                <label class="form-label">Form fieldset</label>
                                <fieldset class="form-fieldset">
                                    <div class="mb-3">
                                        <label class="form-label required">Full name</label>
                                        <input type="text" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label required">Company</label>
                                        <input type="text" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label required">Email</label>
                                        <input type="email" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone number</label>
                                        <input type="tel" class="form-control" autocomplete="off">
                                    </div>
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <span
                                            class="form-check-label required">I agree to the Terms &amp; Conditions</span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Simple selectgroup</label>
                                    <div class="form-selectgroup">
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="HTML"
                                                   class="form-selectgroup-input" checked="">
                                            <span class="form-selectgroup-label">HTML</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="CSS"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">CSS</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="PHP"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">PHP</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="JavaScript"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">JavaScript</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Icon input</label>
                                    <div class="form-selectgroup">
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="sun"
                                                   class="form-selectgroup-input" checked="">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path
                                          d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
                                </span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="moon"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
                                </span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="cloud-rain"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud-rain -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path
                                          d="M11 13v2m0 3v2m4 -5v2m0 3v2"></path></svg>
                                </span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="cloud"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878"></path></svg>
                                </span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="Other"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">Other</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Selectgroup with icons and text</label>
                                    <div class="form-selectgroup">
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="icons" value="home" class="form-selectgroup-input"
                                                   checked="">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M5 12l-2 0l9 -9l9 9l-2 0"></path><path
                                          d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path
                                          d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                                  Home</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="icons" value="user"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path
                                          d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                  User</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="icons" value="circle"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/circle -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path></svg>
                                  Circle</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="icons" value="square"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/square -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"></path><path
                                          d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path></svg>
                                  Square</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Different style</label>
                                    <div class="form-selectgroup form-selectgroup-pills">
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="HTML"
                                                   class="form-selectgroup-input" checked="">
                                            <span class="form-selectgroup-label">HTML</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="CSS"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">CSS</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="PHP"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">PHP</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="JavaScript"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">JavaScript</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Payment method</label>
                                    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="radio" name="form-payment" value="visa"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div>
                                                    <span class="payment payment-provider-visa payment-xs me-2"></span>
                                                    ending in <strong>7998</strong>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="radio" name="form-payment" value="mastercard"
                                                   class="form-selectgroup-input" checked="">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="payment payment-provider-mastercard payment-xs me-2"></span>
                                                    ending in <strong>2807</strong>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="radio" name="form-payment" value="paypal"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="payment payment-provider-paypal payment-xs me-2"></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Project Manager</label>
                                    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="checkbox" name="form-project-manager[]" value="1"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div class="form-selectgroup-label-content d-flex align-items-center">
                                                    <span class="avatar me-3"
                                                          style="background-image: url(./static/avatars/000m.jpg)"></span>
                                                    <div>
                                                        <div class="font-weight-medium">Paweł Kuna</div>
                                                        <div class="text-muted">UI Designer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="checkbox" name="form-project-manager[]" value="2"
                                                   class="form-selectgroup-input" checked="">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div class="form-selectgroup-label-content d-flex align-items-center">
                                                    <span class="avatar me-3">JL</span>
                                                    <div>
                                                        <div class="font-weight-medium">Jeffie Lewzey</div>
                                                        <div class="text-muted">Chemical Engineer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="checkbox" name="form-project-manager[]" value="3"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div class="form-selectgroup-label-content d-flex align-items-center">
                                                    <span class="avatar me-3"
                                                          style="background-image: url(./static/avatars/002m.jpg)"></span>
                                                    <div>
                                                        <div class="font-weight-medium">Mallory Hulme</div>
                                                        <div class="text-muted">Geologist IV</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="checkbox" name="form-project-manager[]" value="4"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div class="form-selectgroup-label-content d-flex align-items-center">
                                                    <span class="avatar me-3"
                                                          style="background-image: url(./static/avatars/003m.jpg)"></span>
                                                    <div>
                                                        <div class="font-weight-medium">Dunn Slane</div>
                                                        <div class="text-muted">Research Nurse</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="checkbox" name="form-project-manager[]" value="5"
                                                   class="form-selectgroup-input">
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div class="form-selectgroup-label-content d-flex align-items-center">
                                                    <span class="avatar me-3"
                                                          style="background-image: url(./static/avatars/000f.jpg)"></span>
                                                    <div>
                                                        <div class="font-weight-medium">Emmy Levet</div>
                                                        <div class="text-muted">VP Product Management</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Buttons group</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="btn-radio-basic"
                                               id="btn-radio-basic-1" autocomplete="off" checked="">
                                        <label for="btn-radio-basic-1" type="button" class="btn">1 min</label>
                                        <input type="radio" class="btn-check" name="btn-radio-basic"
                                               id="btn-radio-basic-2" autocomplete="off">
                                        <label for="btn-radio-basic-2" type="button" class="btn">5 min</label>
                                        <input type="radio" class="btn-check" name="btn-radio-basic"
                                               id="btn-radio-basic-3" autocomplete="off">
                                        <label for="btn-radio-basic-3" type="button" class="btn">10 min</label>
                                        <input type="radio" class="btn-check" name="btn-radio-basic"
                                               id="btn-radio-basic-4" autocomplete="off">
                                        <label for="btn-radio-basic-4" type="button" class="btn">30 min</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Buttons group with dropdown</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                               id="btn-radio-dropdown-1" autocomplete="off" checked="">
                                        <label for="btn-radio-dropdown-1" type="button" class="btn">Option 1</label>
                                        <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                               id="btn-radio-dropdown-2" autocomplete="off">
                                        <label for="btn-radio-dropdown-2" type="button" class="btn">Option 2</label>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                                   id="btn-radio-dropdown-dropdown" autocomplete="off">
                                            <label for="btn-radio-dropdown-dropdown" class="btn dropdown-toggle"
                                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Other
                                            </label>
                                            <div class="dropdown-menu">
                                                <label class="dropdown-item"><input class="form-check-input m-0 me-2"
                                                                                    type="radio"> Option 1</label>
                                                <label class="dropdown-item"><input class="form-check-input m-0 me-2"
                                                                                    type="radio"> Option 2</label>
                                                <label class="dropdown-item"><input class="form-check-input m-0 me-2"
                                                                                    type="radio"> Option 3</label>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Option 4
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Option 5
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Option 6dropdown-menu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Vertical buttons group</label>
                                            <div class="btn-group-vertical w-100" role="group">
                                                <input type="radio" class="btn-check" name="btn-radio-vertical"
                                                       id="btn-radio-vertical-1" autocomplete="off" checked="">
                                                <label for="btn-radio-vertical-1" type="button" class="btn">Button
                                                    1</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical"
                                                       id="btn-radio-vertical-2" autocomplete="off">
                                                <label for="btn-radio-vertical-2" type="button" class="btn">Button
                                                    2</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical"
                                                       id="btn-radio-vertical-3" autocomplete="off">
                                                <label for="btn-radio-vertical-3" type="button" class="btn">Button
                                                    3</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical"
                                                       id="btn-radio-vertical-4" autocomplete="off">
                                                <label for="btn-radio-vertical-4" type="button" class="btn">Button
                                                    4</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical"
                                                       id="btn-radio-vertical-5" autocomplete="off">
                                                <label for="btn-radio-vertical-5" type="button" class="btn">Button
                                                    5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Vertical with dropdown</label>
                                            <div class="btn-group-vertical w-100" role="group">
                                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                                       id="btn-radio-vertical-dropdown-1" autocomplete="off" checked="">
                                                <label for="btn-radio-vertical-dropdown-1" type="button" class="btn">Button
                                                    1</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                                       id="btn-radio-vertical-dropdown-2" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-2" type="button" class="btn">Button
                                                    2</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                                       id="btn-radio-vertical-dropdown-3" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-3" type="button" class="btn">Button
                                                    3</label>
                                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                                       id="btn-radio-vertical-dropdown-4" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-4" type="button" class="btn">Button
                                                    4</label>
                                                <div class="btn-group" role="group">
                                                    <input type="radio" class="btn-check"
                                                           name="btn-radio-vertical-dropdown"
                                                           id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                    <label for="btn-radio-vertical-dropdown-dropdown"
                                                           class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                        Other
                                                    </label>
                                                    <div class="dropdown-menu">
                                                        <label class="dropdown-item"><input
                                                                class="form-check-input m-0 me-2" type="radio"> Option 1</label>
                                                        <label class="dropdown-item"><input
                                                                class="form-check-input m-0 me-2" type="radio"> Option 2</label>
                                                        <label class="dropdown-item"><input
                                                                class="form-check-input m-0 me-2" type="radio"> Option 3</label>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            Option 4
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Option 5
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Option 6dropdown-menu
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Toolbar</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-1" autocomplete="off" checked="">
                                        <label for="btn-radio-toolbar-1" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z"></path>
                                                <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-2" autocomplete="off">
                                        <label for="btn-radio-toolbar-2" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/italic -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11 5l6 0"></path>
                                                <path d="M7 19l6 0"></path>
                                                <path d="M14 5l-4 14"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-3" autocomplete="off">
                                        <label for="btn-radio-toolbar-3" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/underline -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 5v5a5 5 0 0 0 10 0v-5"></path>
                                                <path d="M5 19h14"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-4" autocomplete="off">
                                        <label for="btn-radio-toolbar-4" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/copy -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                                                <path
                                                    d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-5" autocomplete="off">
                                        <label for="btn-radio-toolbar-5" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/scissors -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M8.6 8.6l10.4 10.4"></path>
                                                <path d="M8.6 15.4l10.4 -10.4"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-6" autocomplete="off">
                                        <label for="btn-radio-toolbar-6" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/file-plus -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                <path
                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                <path d="M12 11l0 6"></path>
                                                <path d="M9 14l6 0"></path>
                                            </svg>
                                        </label>
                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                               id="btn-radio-toolbar-7" autocomplete="off">
                                        <label for="btn-radio-toolbar-7" class="btn btn-icon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                <path
                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                <path d="M9 14l6 0"></path>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <div class="form-label">Radios</div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" name="radios" checked="">
                                            <span class="form-check-label">Option 1</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" name="radios">
                                            <span class="form-check-label">Option 2</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" disabled="">
                                            <span class="form-check-label">Option 3</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" checked="" disabled="">
                                            <span class="form-check-label">Option 4</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Inline Radios</div>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radios-inline"
                                                   checked="">
                                            <span class="form-check-label">Option 1</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radios-inline">
                                            <span class="form-check-label">Option 2</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radios-inline"
                                                   disabled="">
                                            <span class="form-check-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Checkboxes</div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-label">Checkbox input</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" disabled="">
                                            <span class="form-check-label">Disabled checkbox input</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" checked="">
                                            <span class="form-check-label">Checked checkbox input</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Inline Checkboxes</div>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-label">Option 1</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" disabled="">
                                            <span class="form-check-label">Option 2</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" checked="">
                                            <span class="form-check-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Checkboxes with description</label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">
                                Default checkbox
                              </span>
                                        <span class="form-check-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              </span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">
                                Longer checkbox item that wraps on to two separate lines
                              </span>
                                        <span class="form-check-description">
                                Ab alias aut, consequuntur cumque esse eveniet incidunt laborum minus molestiae.
                              </span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">
                                Default checkbox without description
                              </span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Toggle switches</div>
                                    <label class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked="">
                                        <span class="form-check-label">Option 1</span>
                                    </label>
                                    <label class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">Option 2</span>
                                    </label>
                                    <label class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">Option 3</span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Single switch</div>
                                    <label class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">I agree with terms and conditions</span>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Notification</label>
                                    <div class="divide-y">
                                        <div>
                                            <label class="row">
                                                <span class="col">Push Notifications</span>
                                                <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                      <input class="form-check-input" type="checkbox" checked="">
                                    </label>
                                  </span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="row">
                                                <span class="col">SMS Notifications</span>
                                                <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                      <input class="form-check-input" type="checkbox">
                                    </label>
                                  </span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="row">
                                                <span class="col">Email Notifications</span>
                                                <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                      <input class="form-check-input" type="checkbox" checked="">
                                    </label>
                                  </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Custom File Input</div>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <div class="row g-2">
                                        <div class="col-5">
                                            <select name="user[month]" class="form-select">
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option selected="selected" value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <select name="user[day]" class="form-select">
                                                <option value="">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20" selected="">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="user[year]" class="form-select">
                                                <option value="">Year</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989" selected="">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                                <option value="1903">1903</option>
                                                <option value="1902">1902</option>
                                                <option value="1901">1901</option>
                                                <option value="1900">1900</option>
                                                <option value="1899">1899</option>
                                                <option value="1898">1898</option>
                                                <option value="1897">1897</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Text mask</label>
                                    <input type="text" name="input-mask" class="form-control" data-mask="00/00/0000"
                                           data-mask-visible="true" placeholder="00/00/0000" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telephone mask</label>
                                    <input type="text" name="input-mask" class="form-control" data-mask="(00) 0000-0000"
                                           data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Autosize textarea</label>
                                    <textarea class="form-control" data-bs-toggle="autosize"
                                              placeholder="Type something…"
                                              style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Datalist example</label>
                                    <input class="form-control" list="datalistOptions" placeholder="Type to search...">
                                    <datalist id="datalistOptions">
                                        <option value="Aruba">
                                        </option>
                                        <option value="Afghanistan">
                                        </option>
                                        <option value="Angola">
                                        </option>
                                        <option value="Anguilla">
                                        </option>
                                        <option value="Albania">
                                        </option>
                                        <option value="Andorra">
                                        </option>
                                        <option value="United Arab Emirates">
                                        </option>
                                        <option value="Argentina">
                                        </option>
                                        <option value="Armenia">
                                        </option>
                                        <option value="American Samoa">
                                        </option>
                                    </datalist>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Range input</label>
                                    <input type="range" class="form-range mb-2" value="40" min="0" max="100" step="10">
                                    <div class="form-range mb-2 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"
                                         id="range-simple">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect"
                                                     style="transform: translate(0%, 0px) scale(0.2, 1);"></div>
                                            </div>
                                            <div class="noUi-origin"
                                                 style="transform: translate(-80%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                     role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                     aria-valuemax="100.0" aria-valuenow="20.0" aria-valuetext="20.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-range mb-2 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"
                                         id="range-connect">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect"
                                                     style="transform: translate(60%, 0px) scale(0.3, 1);"></div>
                                            </div>
                                            <div class="noUi-origin"
                                                 style="transform: translate(-40%, 0px); z-index: 5;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                     role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                     aria-valuemax="90.0" aria-valuenow="60.0" aria-valuetext="60.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                            <div class="noUi-origin"
                                                 style="transform: translate(-10%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                                     role="slider" aria-orientation="horizontal" aria-valuemin="60.0"
                                                     aria-valuemax="100.0" aria-valuenow="90.0" aria-valuetext="90.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="form-range mb-2 text-green noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"
                                        id="range-color">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect"
                                                     style="transform: translate(0%, 0px) scale(0.4, 1);"></div>
                                            </div>
                                            <div class="noUi-origin"
                                                 style="transform: translate(-60%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                     role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                     aria-valuemax="100.0" aria-valuenow="40.0" aria-valuetext="40.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Datepicker</label>
                                    <input class="form-control mb-2" placeholder="Select a date" id="datepicker-default"
                                           value="2020-06-20">
                                    <div class="input-icon mb-2">
                                        <input class="form-control " placeholder="Select a date" id="datepicker-icon"
                                               value="2020-06-20">
                                        <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                          d="M0 0h24v24H0z"
                                                                                          fill="none"></path><path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path><path
                                        d="M16 3l0 4"></path><path d="M8 3l0 4"></path><path d="M4 11l16 0"></path><path
                                        d="M11 15l1 0"></path><path d="M12 15l0 3"></path></svg>
                              </span>
                                    </div>
                                    <div class="input-icon">
                              <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                          d="M0 0h24v24H0z"
                                                                                          fill="none"></path><path
                                        d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path><path
                                        d="M16 3l0 4"></path><path d="M8 3l0 4"></path><path d="M4 11l16 0"></path><path
                                        d="M11 15l1 0"></path><path d="M12 15l0 3"></path></svg>
                              </span>
                                        <input class="form-control" placeholder="Select a date"
                                               id="datepicker-icon-prepend" value="2020-06-20">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Inline datepicker</label>
                                    <div class="datepicker-inline" id="datepicker-inline">
                                        <div class="litepicker" data-plugins=""
                                             style="display: inline-block; position: relative;">
                                            <div class="container__main">
                                                <div class="container__months">
                                                    <div class="month-item">
                                                        <div class="month-item-header">
                                                            <button type="button" class="button-previous-month">
                                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                     width="24" height="24" viewBox="0 0 24 24"
                                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                          fill="none"></path>
                                                                    <path d="M15 6l-6 6l6 6"></path>
                                                                </svg>
                                                            </button>
                                                            <div><strong class="month-item-name">February</strong><span
                                                                    class="month-item-year">2023</span></div>
                                                            <button type="button" class="button-next-month">
                                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                     width="24" height="24" viewBox="0 0 24 24"
                                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                          fill="none"></path>
                                                                    <path d="M9 6l6 6l-6 6"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="month-item-weekdays-row">
                                                            <div title="Monday">Mon</div>
                                                            <div title="Tuesday">Tue</div>
                                                            <div title="Wednesday">Wed</div>
                                                            <div title="Thursday">Thu</div>
                                                            <div title="Friday">Fri</div>
                                                            <div title="Saturday">Sat</div>
                                                            <div title="Sunday">Sun</div>
                                                        </div>
                                                        <div class="container__days">
                                                            <div></div>
                                                            <div></div>
                                                            <div class="day-item" data-time="1675188000000"
                                                                 tabindex="0">1
                                                            </div>
                                                            <div class="day-item" data-time="1675274400000"
                                                                 tabindex="0">2
                                                            </div>
                                                            <div class="day-item" data-time="1675360800000"
                                                                 tabindex="0">3
                                                            </div>
                                                            <div class="day-item" data-time="1675447200000"
                                                                 tabindex="0">4
                                                            </div>
                                                            <div class="day-item" data-time="1675533600000"
                                                                 tabindex="0">5
                                                            </div>
                                                            <div class="day-item" data-time="1675620000000"
                                                                 tabindex="0">6
                                                            </div>
                                                            <div class="day-item" data-time="1675706400000"
                                                                 tabindex="0">7
                                                            </div>
                                                            <div class="day-item" data-time="1675792800000"
                                                                 tabindex="0">8
                                                            </div>
                                                            <div class="day-item" data-time="1675879200000"
                                                                 tabindex="0">9
                                                            </div>
                                                            <div class="day-item" data-time="1675965600000"
                                                                 tabindex="0">10
                                                            </div>
                                                            <div class="day-item" data-time="1676052000000"
                                                                 tabindex="0">11
                                                            </div>
                                                            <div class="day-item" data-time="1676138400000"
                                                                 tabindex="0">12
                                                            </div>
                                                            <div class="day-item" data-time="1676224800000"
                                                                 tabindex="0">13
                                                            </div>
                                                            <div class="day-item" data-time="1676311200000"
                                                                 tabindex="0">14
                                                            </div>
                                                            <div class="day-item" data-time="1676397600000"
                                                                 tabindex="0">15
                                                            </div>
                                                            <div class="day-item" data-time="1676484000000"
                                                                 tabindex="0">16
                                                            </div>
                                                            <div class="day-item" data-time="1676570400000"
                                                                 tabindex="0">17
                                                            </div>
                                                            <div class="day-item" data-time="1676656800000"
                                                                 tabindex="0">18
                                                            </div>
                                                            <div class="day-item" data-time="1676743200000"
                                                                 tabindex="0">19
                                                            </div>
                                                            <div class="day-item" data-time="1676829600000"
                                                                 tabindex="0">20
                                                            </div>
                                                            <div class="day-item" data-time="1676916000000"
                                                                 tabindex="0">21
                                                            </div>
                                                            <div class="day-item" data-time="1677002400000"
                                                                 tabindex="0">22
                                                            </div>
                                                            <div class="day-item is-today" data-time="1677088800000"
                                                                 tabindex="0">23
                                                            </div>
                                                            <div class="day-item" data-time="1677175200000"
                                                                 tabindex="0">24
                                                            </div>
                                                            <div class="day-item" data-time="1677261600000"
                                                                 tabindex="0">25
                                                            </div>
                                                            <div class="day-item" data-time="1677348000000"
                                                                 tabindex="0">26
                                                            </div>
                                                            <div class="day-item" data-time="1677434400000"
                                                                 tabindex="0">27
                                                            </div>
                                                            <div class="day-item" data-time="1677520800000"
                                                                 tabindex="0">28
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container__tooltip"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Progress</label>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" style="width: 38%" role="progressbar"
                                             aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"
                                             aria-label="38% Complete">
                                            <span class="visually-hidden">38% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-indeterminate bg-green"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Form buttons</label>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="btn w-100">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                                                </svg>
                                                Login with Github
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn w-100">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                                                </svg>
                                                Login with Twitter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tags input</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select a date" id="select-tags" value="" tabindex="-1">

                                        <option value="JavaScript">JavaScript</option>
                                        <option value="CSS">CSS</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="Bootstrap">Bootstrap</option>
                                        <option value="Ruby">Ruby</option>
                                        <option value="Python">Python</option>
                                        <option value="HTML">HTML</option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="HTML" class="item" data-ts-item="">HTML</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-tags-ts-dropdown"
                                                   id="select-tags-ts-control" placeholder="Select a date"
                                                   type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-tags-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Advanced tags input</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select a date" id="select-tags-advanced" value=""
                                            tabindex="-1">

                                        <option value="JavaScript">JavaScript</option>
                                        <option value="CSS">CSS</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="Bootstrap">Bootstrap</option>
                                        <option value="Ruby">Ruby</option>
                                        <option value="Python">Python</option>
                                        <option value="HTML">HTML</option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="HTML" class="item" data-ts-item="">HTML</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false"
                                                   aria-controls="select-tags-advanced-ts-dropdown"
                                                   id="select-tags-advanced-ts-control" placeholder="Select a date"
                                                   type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-tags-advanced-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Advanced select</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select a date" id="select-users" value="" tabindex="-1">

                                        <option value="2">Elon Musk</option>
                                        <option value="3">Paweł Kuna</option>
                                        <option value="4">Nikola Tesla</option>
                                        <option value="1">Chuck Tesla</option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="1" class="item" data-ts-item="">Chuck Tesla</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-users-ts-dropdown"
                                                   id="select-users-ts-control" placeholder="Select a date"
                                                   type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-users-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Advanced select with optgroup</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select a date" id="select-optgroups" value="" tabindex="-1">
                                        <optgroup label="Tags">

                                            <option value="JavaScript">JavaScript</option>
                                            <option value="CSS">CSS</option>
                                            <option value="jQuery">jQuery</option>
                                            <option value="Bootstrap">Bootstrap</option>
                                            <option value="Ruby">Ruby</option>
                                            <option value="Python">Python</option>
                                        </optgroup>
                                        <optgroup label="People">
                                            <option value="Chuck Tesla">Chuck Tesla</option>
                                            <option value="Elon Musk">Elon Musk</option>
                                            <option value="Paweł Kuna">Paweł Kuna</option>
                                            <option value="Nikola Tesla">Nikola Tesla</option>
                                        </optgroup>
                                        <option value="HTML">HTML</option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="HTML" class="item" data-ts-item="">HTML</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-optgroups-ts-dropdown"
                                                   id="select-optgroups-ts-control" placeholder="Select a date"
                                                   type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-optgroups-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Select with avatars</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select a date" id="select-people" value="" tabindex="-1">

                                        <option value="2"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot;>JL</span>">
                                            Jeffie Lewzey
                                        </option>
                                        <option value="3"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/002m.jpg)&quot;></span>">
                                            Mallory Hulme
                                        </option>
                                        <option value="4"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/003m.jpg)&quot;></span>">
                                            Dunn Slane
                                        </option>
                                        <option value="5"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/000f.jpg)&quot;></span>">
                                            Emmy Levet
                                        </option>
                                        <option value="6"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/001f.jpg)&quot;></span>">
                                            Maryjo Lebarree
                                        </option>
                                        <option value="7"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot;>EP</span>">
                                            Egan Poetz
                                        </option>
                                        <option value="8"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/002f.jpg)&quot;></span>">
                                            Kellie Skingley
                                        </option>
                                        <option value="9"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/003f.jpg)&quot;></span>">
                                            Christabel Charlwood
                                        </option>
                                        <option value="10"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot;>HS</span>">
                                            Haskel Shelper
                                        </option>
                                        <option value="11"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/006m.jpg)&quot;></span>">
                                            Lorry Mion
                                        </option>
                                        <option value="12"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/004f.jpg)&quot;></span>">
                                            Leesa Beaty
                                        </option>
                                        <option value="13"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/007m.jpg)&quot;></span>">
                                            Perren Keemar
                                        </option>
                                        <option value="14"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot;>SA</span>">
                                            Sunny Airey
                                        </option>
                                        <option value="15"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/009m.jpg)&quot;></span>">
                                            Geoffry Flaunders
                                        </option>
                                        <option value="16"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/010m.jpg)&quot;></span>">
                                            Thatcher Keel
                                        </option>
                                        <option value="17"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/005f.jpg)&quot;></span>">
                                            Dyann Escala
                                        </option>
                                        <option value="18"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/006f.jpg)&quot;></span>">
                                            Avivah Mugleston
                                        </option>
                                        <option value="19"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot;>AA</span>">
                                            Arlie Armstead
                                        </option>
                                        <option value="20"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/008f.jpg)&quot;></span>">
                                            Tessie Curzon
                                        </option>
                                        <option value="1"
                                                data-custom-properties="<span class=&quot;avatar avatar-xs&quot; style=&quot;background-image: url(./static/avatars/000m.jpg)&quot;></span>">
                                            Paweł Kuna
                                        </option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="1" class="item" data-ts-item=""><span
                                                    class="dropdown-item-indicator"><span class="avatar avatar-xs"
                                                                                          style="background-image: url(./static/avatars/000m.jpg)"></span></span>Paweł
                                                Kuna
                                            </div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-people-ts-dropdown"
                                                   id="select-people-ts-control" placeholder="Select a date"
                                                   type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-people-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Select with flags</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            id="select-countries" value="" tabindex="-1">

                                        <option value="de"
                                                data-custom-properties="<span class=&quot;flag flag-xs flag-country-de&quot;></span>">
                                            Germany
                                        </option>
                                        <option value="cz"
                                                data-custom-properties="<span class=&quot;flag flag-xs flag-country-cz&quot;></span>">
                                            Czech Republic
                                        </option>
                                        <option value="br"
                                                data-custom-properties="<span class=&quot;flag flag-xs flag-country-br&quot;></span>">
                                            Brazil
                                        </option>
                                        <option value="pl"
                                                data-custom-properties="<span class=&quot;flag flag-xs flag-country-pl&quot;></span>">
                                            Poland
                                        </option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="pl" class="item" data-ts-item=""><span
                                                    class="dropdown-item-indicator"><span
                                                        class="flag flag-xs flag-country-pl"></span></span>Poland
                                            </div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-countries-ts-dropdown"
                                                   id="select-countries-ts-control" type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-countries-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Select with labels</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            id="select-labels" value="" tabindex="-1">

                                        <option value="paste"
                                                data-custom-properties="<span class=&quot;badge bg-primary-lt&quot;>cmd + V</span>">
                                            Paste
                                        </option>
                                        <option value="cut"
                                                data-custom-properties="<span class=&quot;badge bg-primary-lt&quot;>cmd + X</span>">
                                            Cut
                                        </option>
                                        <option value="copy"
                                                data-custom-properties="<span class=&quot;badge bg-primary-lt&quot;>cmd + C</span>">
                                            Copy
                                        </option>
                                    </select>
                                    <div class="ts-wrapper form-select single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="copy" class="item" data-ts-item=""><span
                                                    class="dropdown-item-indicator"><span class="badge bg-primary-lt">cmd + C</span></span>Copy
                                            </div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false" aria-controls="select-labels-ts-dropdown"
                                                   id="select-labels-ts-control" type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-labels-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Advanced select with validation state</label>
                                    <select type="text"
                                            class="form-select mb-3 is-valid tomselected ts-hidden-accessible"
                                            id="select-countries-valid" value="" tabindex="-1">

                                        <option value="de">Germany</option>
                                        <option value="cz">Czech Republic</option>
                                        <option value="br">Brazil</option>
                                        <option value="pl">Poland</option>
                                    </select>
                                    <div
                                        class="ts-wrapper form-select mb-3 is-valid single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="pl" class="item" data-ts-item="">Poland</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false"
                                                   aria-controls="select-countries-valid-ts-dropdown"
                                                   id="select-countries-valid-ts-control" type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-countries-valid-ts-dropdown"></div>
                                        </div>
                                    </div>
                                    <select type="text" class="form-select is-invalid tomselected ts-hidden-accessible"
                                            id="select-countries-invalid" value="" tabindex="-1">

                                        <option value="de">Germany</option>
                                        <option value="cz">Czech Republic</option>
                                        <option value="br">Brazil</option>
                                        <option value="pl">Poland</option>
                                    </select>
                                    <div class="ts-wrapper form-select is-invalid single input-hidden full has-items">
                                        <div class="ts-control">
                                            <div data-value="pl" class="item" data-ts-item="">Poland</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false"
                                                   aria-controls="select-countries-invalid-ts-dropdown"
                                                   id="select-countries-invalid-ts-control" type="select-one"></div>
                                        <div class="dropdown-menu ts-dropdown single" style="display: none;">
                                            <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                                 id="select-countries-invalid-ts-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <div class="d-flex">
                    <a href="#" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary ms-auto">Send data</button>
                </div>
            </div>
        </form>
    </div> --}}
@endsection
@push('custom-scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                stroke: {
                    width: [2, 1],
                    dashArray: [0, 3],
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "May",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67
                    ]
                }, {
                    name: "April",
                    data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35,
                        41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                        53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 240,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: false
                    },
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Web",
                    data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24,
                        29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6
                    ]
                }, {
                    name: "Social",
                    data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4,
                        6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0
                    ]
                }, {
                    name: "Other",
                    data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1,
                        2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: -4,
                        bottom: -4
                    },
                    strokeDashArray: 4,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19',
                    '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24',
                    '2020-07-25', '2020-07-26'
                ],
                colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor(
                    "green", 0.8)],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:on
        document.addEventListener("DOMContentLoaded", function() {
            const map = new jsVectorMap({
                selector: '#map-world',
                map: 'world',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: tabler.getColor('body-bg'),
                        stroke: tabler.getColor('border-color'),
                        strokeWidth: 2,
                    }
                },
                zoomOnScroll: false,
                zoomButtons: false,
                // -------- Series --------
                visualizeData: {
                    scale: [tabler.getColor('bg-surface'), tabler.getColor('primary')],
                    values: {
                        "AF": 16,
                        "AL": 11,
                        "DZ": 158,
                        "AO": 85,
                        "AG": 1,
                        "AR": 351,
                        "AM": 8,
                        "AU": 1219,
                        "AT": 366,
                        "AZ": 52,
                        "BS": 7,
                        "BH": 21,
                        "BD": 105,
                        "BB": 3,
                        "BY": 52,
                        "BE": 461,
                        "BZ": 1,
                        "BJ": 6,
                        "BT": 1,
                        "BO": 19,
                        "BA": 16,
                        "BW": 12,
                        "BR": 2023,
                        "BN": 11,
                        "BG": 44,
                        "BF": 8,
                        "BI": 1,
                        "KH": 11,
                        "CM": 21,
                        "CA": 1563,
                        "CV": 1,
                        "CF": 2,
                        "TD": 7,
                        "CL": 199,
                        "CN": 5745,
                        "CO": 283,
                        "KM": 0,
                        "CD": 12,
                        "CG": 11,
                        "CR": 35,
                        "CI": 22,
                        "HR": 59,
                        "CY": 22,
                        "CZ": 195,
                        "DK": 304,
                        "DJ": 1,
                        "DM": 0,
                        "DO": 50,
                        "EC": 61,
                        "EG": 216,
                        "SV": 21,
                        "GQ": 14,
                        "ER": 2,
                        "EE": 19,
                        "ET": 30,
                        "FJ": 3,
                        "FI": 231,
                        "FR": 2555,
                        "GA": 12,
                        "GM": 1,
                        "GE": 11,
                        "DE": 3305,
                        "GH": 18,
                        "GR": 305,
                        "GD": 0,
                        "GT": 40,
                        "GN": 4,
                        "GW": 0,
                        "GY": 2,
                        "HT": 6,
                        "HN": 15,
                        "HK": 226,
                        "HU": 132,
                        "IS": 12,
                        "IN": 1430,
                        "ID": 695,
                        "IR": 337,
                        "IQ": 84,
                        "IE": 204,
                        "IL": 201,
                        "IT": 2036,
                        "JM": 13,
                        "JP": 5390,
                        "JO": 27,
                        "KZ": 129,
                        "KE": 32,
                        "KI": 0,
                        "KR": 986,
                        "KW": 117,
                        "KG": 4,
                        "LA": 6,
                        "LV": 23,
                        "LB": 39,
                        "LS": 1,
                        "LR": 0,
                        "LY": 77,
                        "LT": 35,
                        "LU": 52,
                        "MK": 9,
                        "MG": 8,
                        "MW": 5,
                        "MY": 218,
                        "MV": 1,
                        "ML": 9,
                        "MT": 7,
                        "MR": 3,
                        "MU": 9,
                        "MX": 1004,
                        "MD": 5,
                        "MN": 5,
                        "ME": 3,
                        "MA": 91,
                        "MZ": 10,
                        "MM": 35,
                        "NA": 11,
                        "NP": 15,
                        "NL": 770,
                        "NZ": 138,
                        "NI": 6,
                        "NE": 5,
                        "NG": 206,
                        "NO": 413,
                        "OM": 53,
                        "PK": 174,
                        "PA": 27,
                        "PG": 8,
                        "PY": 17,
                        "PE": 153,
                        "PH": 189,
                        "PL": 438,
                        "PT": 223,
                        "QA": 126,
                        "RO": 158,
                        "RU": 1476,
                        "RW": 5,
                        "WS": 0,
                        "ST": 0,
                        "SA": 434,
                        "SN": 12,
                        "RS": 38,
                        "SC": 0,
                        "SL": 1,
                        "SG": 217,
                        "SK": 86,
                        "SI": 46,
                        "SB": 0,
                        "ZA": 354,
                        "ES": 1374,
                        "LK": 48,
                        "KN": 0,
                        "LC": 1,
                        "VC": 0,
                        "SD": 65,
                        "SR": 3,
                        "SZ": 3,
                        "SE": 444,
                        "CH": 522,
                        "SY": 59,
                        "TW": 426,
                        "TJ": 5,
                        "TZ": 22,
                        "TH": 312,
                        "TL": 0,
                        "TG": 3,
                        "TO": 0,
                        "TT": 21,
                        "TN": 43,
                        "TR": 729,
                        "TM": 0,
                        "UG": 17,
                        "UA": 136,
                        "AE": 239,
                        "GB": 2258,
                        "US": 4624,
                        "UY": 40,
                        "UZ": 37,
                        "VU": 0,
                        "VE": 285,
                        "VN": 101,
                        "YE": 30,
                        "ZM": 15,
                        "ZW": 5
                    },
                },
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
        // @formatter:off
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
                chart: {
                    type: "radialBar",
                    fontFamily: 'inherit',
                    height: 40,
                    width: 40,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 0,
                            size: '75%'
                        },
                        track: {
                            margin: 0
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                },
                colors: [tabler.getColor("blue")],
                series: [35],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 192,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Purchases",
                    data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15,
                        14, 25, 32, 40, 55, 60, 48, 52, 70
                    ]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                    '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                    '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                    '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                    '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                    '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
                point: {
                    show: false
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
@endpush
