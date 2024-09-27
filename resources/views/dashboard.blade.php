@extends('backend.layout.app')
@section('title', 'Dashboard')
@section('css')
@endsection

@section('navbar')
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
            <li class="nav-item more-dropdown">
                <div class="input-group input-group-sm">
                    <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text"
                        placeholder="Select Date">
                    <div class="input-group-append">
                        <span class="input-group-text bg-dark border-primary" id="basic-addon2">
                            <i class="lar la-calendar"></i>
                        </span>
                    </div>
                </div>
            </li>
            <li class="nav-item more-dropdown">
                <a href="javascript: void(0);" data-original-title="Reload Data" data-placement="bottom"
                    class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                    <i class="las la-sync"></i>
                </a>
            </li>
            <li class="nav-item custom-dropdown-icon">
                <a href="javascript: void(0);" data-original-title="Filter" data-placement="bottom" id="customDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                    <i class="las la-filter"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                    <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);">Filter 1</a>
                    <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);">Filter 2</a>
                    <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);">Filter 3</a>
                </div>
            </li>
        </ul>
    </header>
</div>
@endsection

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <!-- 4 AREAS -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget four-areas">
                <div class="card-box">
                    <div class="row">
                        <div class="col-4">
                            <div
                                class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-info text-center">
                                <i class="las la-globe font-35"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <h3 class="text-dark my-1">100M</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Global Reach</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">150M</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget four-areas">
                <div class="card-box">
                    <div class="row">
                        <div class="col-4">
                            <div
                                class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-secondary text-center">
                                <i class="las la-certificate font-35"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <h3 class="text-dark my-1">98</span></h3>
                                <p class="text-muted mb-1 text-truncate">Presigious Awards</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">100</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">98% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget four-areas">
                <div class="card-box">
                    <div class="row">
                        <div class="col-4">
                            <div
                                class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-success text-center">
                                <i class="lar la-handshake font-35"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <h3 class="text-dark my-1">745</span></h3>
                                <p class="text-muted mb-1 text-truncate">New Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">1000</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 75%">
                                <span class="sr-only">75% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget four-areas">
                <div class="card-box">
                    <div class="row">
                        <div class="col-4">
                            <div
                                class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-danger text-center">
                                <i class="lar la-thumbs-down font-35"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <h3 class="text-dark my-1">2200</span></h3>
                                <p class="text-muted mb-1 text-truncate">Negative Feedback</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-right">200</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                aria-valuemax="100" style="width: 15%">
                                <span class="sr-only">15% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modal')
@endsection


@section('script')
@endsection