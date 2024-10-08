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
        <!-- 4 AREAS -->
        <!-- VISIT AND SALES -->
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h5 class="">Visit and Sales Statistics</h5>
                    <ul class="tabs tab-pills">
                        <li>
                            <div class="dropdown  custom-dropdown-icon">
                                <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                    <a class="dropdown-item" data-value="Settings"
                                        href="javascript:void(0);">Quarterly</a>
                                    <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Half
                                        Yearly</a>
                                    <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                    <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                    <a class="dropdown-item" data-value="Download"
                                        href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widget-content">
                    <div class="tabs tab-content">
                        <div id="content_1" class="tabcontent">
                            <div id="visitAndSales"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- VISIT AND SALES ENDS-->
        <!-- STATISTICS -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one gradient-purple-bliss">
                <div class="widget-heading">
                    <h5 class="text-white light">Statistics</h5>
                </div>
                <div class="widget-content">
                    <div class="p-2 text-center">
                        <a class="text-white font-medium-1 pointer">Month</a>
                        <a class="btn bg-light-primary text-primary stronger mx-3 px-3">Week</a>
                        <a class="text-white font-medium-1 pointer">Day</a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="font-35 d-block">
                            <span class="text-white">$708.89</span>
                            <i class="las la-arrow-up text-success"></i>
                        </div>
                        <span class="font-15 text-white">This Week +98.44</span>
                    </div>
                    <div id="statistics" class=""></div>
                </div>
            </div>
        </div>
        <!-- STATISTICS ENDS-->
        <!-- SOCIAL TRAFFIC -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget widget-activity-four">
                <div class="widget-heading">
                </div>
                <div class="widget-content">
                    <div class="text-center mb-4">
                        <div
                            class="avatar-md mx-auto mb-4 rounded-circle bg-light-primary font-25 d-flex justify-content-center align-items-center">
                            <i class="lab la-facebook text-info"></i>
                        </div>
                        <p class="font-16 text-muted mb-2"></p>
                        <h6>
                            <a class="text-dark">Facebook - <span class="text-muted font-15">125 traffic</span> </a>
                        </h6>
                        <p class="text-muted">The generated facebook therefore always free from posts, big images, or
                            words etc.</p>
                        <a class="text-primary font-16" href="">Learn more <i class="las la-angle-right"></i></a>
                        <div class="mb-0 mt-4 row">
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <i class="lab la-facebook-f text-info font-25"></i>
                                    <p class="text-muted mb-0">77.2K</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <i class="lab la-twitter text-info font-25"></i>
                                    <p class="text-muted mb-0">44.2K</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <i class="lab la-instagram text-danger font-25"></i>
                                    <p class="text-muted mb-0">25.1K</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <i class="lab la-linkedin-in text-info font-25"></i>
                                    <p class="text-muted mb-0">10.2K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SOCIAL TRAFFIC ENDS-->
        <!-- ITEM SOLD -->
        <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three widget-best-seller">
                <div class="widget-heading mb-0">
                    <h5>Item Sold</h5>
                    <span class="w-numeric-title">Calculated in last 7 days</span>
                </div>
                <div class="widget-content">
                    <div id="item-sold"></div>
                </div>
                <div class="best-selling-day d-flex mb-3">
                    <i class="las la-chevron-circle-up font-25 mr-2 mt-2 text-success-teal"></i>
                    <div class="flex-grow-1">
                        <span class="font-15 text-light-black stronger">Best Selling</span>
                        <span class="font-13 float-right mt-1 text-success-teal">67</span>
                        <p class="mb-0 font-12 text-muted">Wednesday</p>
                    </div>
                </div>
                <div class="best-selling-day d-flex mb-0">
                    <i class="las la-chevron-circle-down font-25 mr-2 mt-2 text-danger"></i>
                    <div class="flex-grow-1">
                        <span class="font-15 text-light-black stronger">Worst Selling</span>
                        <span class="font-13 float-right mt-1 text-danger">21</span>
                        <p class="mb-0 font-12 text-muted">Friday</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ITEM SOLD ENDS-->
        <!-- TOP COUNTRIES -->
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three widget-best-seller">
                <div class="widget-heading mb-0"></div>
                <div class="text-center">
                    <div class="mb-4">
                        <i class="las la-map-marked-alt font-45 text-danger"></i>
                    </div>
                    <h3>11,789 Sales</h3>
                    <p>San Francisco (Top Country)</p>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-centered table-nowrap mb-2">
                        <tbody>
                            <tr>
                                <td style="width: 30%;">
                                    <p class="mb-0">San Francisco</p>
                                </td>
                                <td style="width: 25%;">
                                    <h5 class="mb-0">11,789</h5>
                                </td>
                                <td>
                                    <div class="bg-transparent progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="94"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 94%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">California</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">10,952</h5>
                                </td>
                                <td>
                                    <div class="bg-transparent progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="82"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Paris</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">10,075</h5>
                                </td>
                                <td>
                                    <div class="bg-transparent progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- TOP COUNTRIES ENDS-->
        <!-- ADD PROJECT -->
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three add-project">
                <div class="iq-card dash-hover-gradient iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="mb-0 font-size-32 text-dark">
                            <i class="las la-file-invoice-dollar font-45"></i>
                        </div>
                    </div>
                    <div class="iq-card-body mt-4">
                        <h3>Sales</h3>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="card-action font-size-14 mt-3">
                        <span class="float-right">Tommorow</span>
                        <i class="ri-timer-2-line"></i> 2:30pm
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three add-project">
                <div class="iq-card dash-hover-gradient iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="mb-0 font-size-32 text-dark">
                            <i class="las la-headset font-45"></i>
                        </div>
                    </div>
                    <div class="iq-card-body mt-4">
                        <h3>Support</h3>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="card-action font-size-14 mt-3">
                        <span class="float-right">Tommorow</span>
                        <i class="ri-timer-2-line"></i> 2:30pm
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three add-project">
                <div class="iq-card dash-hover-gradient iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="mb-0 font-size-32 text-dark">
                            <i class="las la-user-shield font-45"></i>
                        </div>
                    </div>
                    <div class="iq-card-body mt-4">
                        <h3>Account</h3>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="card-action font-size-14 mt-3">
                        <span class="float-right">Tommorow</span>
                        <i class="ri-timer-2-line"></i> 2:30pm
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three add-project p-0">
                <div
                    class="iq-card dash-hover-blank d-flex align-items-center iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body text-center">
                        <h5 class="">Add New Project</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD PROJECT ENDS-->
        <!-- ONGOING TASK -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three add-project">
                <div class="widget-heading mb-0">
                    <h5>Ongoing Task</h5>
                    <span class="w-numeric-title">System Team</span>
                </div>
                <div class="widget-content">
                    <ul class="task-lists m-0 p-0 mt-4">
                        <li class="d-flex mb-4 align-items-center">
                            <div class="user-img img-fluid"><img src="assets/img/profile-1.jpg" alt="story-img"
                                    class="rounded-circle avatar-sm"></div>
                            <div class="media-support-info ml-3">
                                <h6 class="mb-0">Make New Home Page</h6>
                                <p class="mb-0 font-size-12">Feb 14, 2020</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div class="user-img img-fluid"><img src="assets/img/profile-2.jpg" alt="story-img"
                                    class="rounded-circle avatar-sm"></div>
                            <div class="media-support-info ml-3">
                                <h6 class="mb-0">Redesign the Dashboard</h6>
                                <p class="mb-0 font-size-12">Feb 12, 2020</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div class="user-img img-fluid"><img src="assets/img/profile-3.jpg" alt="story-img"
                                    class="rounded-circle avatar-sm"></div>
                            <div class="media-support-info ml-3">
                                <h6 class="mb-0">Analysis New Product</h6>
                                <p class="mb-0 font-size-12">Feb 10, 2020</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div class="user-img img-fluid"><img src="assets/img/profile-4.jpg" alt="story-img"
                                    class="rounded-circle avatar-sm"></div>
                            <div class="media-support-info ml-3">
                                <h6 class="mb-0">Update Dashboard 3</h6>
                                <p class="mb-0 font-size-12">Feb 12, 2020</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="user-img img-fluid"><img src="assets/img/profile-5.jpg" alt="story-img"
                                    class="rounded-circle avatar-sm"></div>
                            <div class="media-support-info ml-3">
                                <h6 class="mb-0">Solve Support Ticket</h6>
                                <p class="mb-0 font-size-12">Feb 14, 2020</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ONGOING TASK ENDS-->
        <!-- AMOUNT -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-six bg-light-danger p-4 mb-4 mt-4">
                <div class="d-flex align-items-center">
                    <div class="col-md-9 p-0">
                        <p class="text-danger">Amount Due</p>
                        <h2 class="text-danger"> $5450.90 </h2>
                        <h6 class="text-danger mb-0"> From WS Retail</h6>
                        <p class="text-danger mb-0"> Payment for next week </p>
                    </div>
                    <div class="col-md-3 chart-icon text-right p-0">
                        <i class="las la-coins font-45 text-danger"></i>
                    </div>
                </div>
            </div>
            <div class="widget widget-six bg-light-success p-4">
                <div class="d-flex align-items-center">
                    <div class="col-md-9 p-0">
                        <p class="text-success-teal">Amount Recieved</p>
                        <h2 class="text-success-teal"> $2450.90 </h2>
                        <h6 class="text-success-teal mb-0"> Milestone Completed </h6>
                        <p class="text-success-teal mb-0"> All payment recieved </p>
                    </div>
                    <div class="col-md-3 chart-icon text-right p-0">
                        <i class="las la-hand-holding-usd font-45 text-success-teal"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- AMOUNT ENDS-->
        <!-- SCHEDULE -->
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-three">
                <div class="widget-heading mb-0">
                    <h5>Schedule</h5>
                    <span class="w-numeric-title">Today's Schedule</span>
                </div>
                <div class="widget-content">
                    <ul class="schedule-lists m-0 p-0 mt-4">
                        <li class="d-flex justify-content-between mb-4 align-items-center">
                            <div class="media-support-info">
                                <h6 class="mb-2">Skype call with Ruby</h6>
                                <p class="mb-0"><span class="badge badge-primary">11:45 am</span> USA</p>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="bs-tooltip" title=""
                                    data-original-title="Jeremy Lawson">
                                    <img src="assets/img/profile-4.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Dino Morea">
                                    <img src="assets/img/profile-5.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Anna Ivanovic">
                                    <img src="assets/img/profile-6.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4 align-items-center">
                            <div class="media-support-info">
                                <h6 class="mb-2">Meeting with Team</h6>
                                <p class="mb-0"><span class="badge badge-info">10:30 am</span> Caneda</p>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="bs-tooltip" title=""
                                    data-original-title="Shin Chan">
                                    <img src="assets/img/profile-5.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Nobi Kopilu">
                                    <img src="assets/img/profile-8.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Shimi Williams">
                                    <img src="assets/img/profile-10.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4 align-items-center">
                            <div class="media-support-info">
                                <h6 class="mb-2">Analysing with Client</h6>
                                <p class="mb-0"><span class="badge badge-warning text-white">02:00 pm</span> Africa</p>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="bs-tooltip" title=""
                                    data-original-title="Ding Dong">
                                    <img src="assets/img/profile-11.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="King Lomi">
                                    <img src="assets/img/profile-12.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Rafa Matic">
                                    <img src="assets/img/profile-13.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4 align-items-center">
                            <div class="media-support-info">
                                <h6 class="mb-2">Meeting with Team</h6>
                                <p class="mb-0"><span class="badge badge-success">03:30 am</span> Australia</p>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="bs-tooltip" title=""
                                    data-original-title="Joe Jonas">
                                    <img src="assets/img/profile-14.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Viku Hami">
                                    <img src="assets/img/profile-15.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                    data-original-title="Novac Federer">
                                    <img src="assets/img/profile-16.jpg"
                                        class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                        alt="avatar">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--SCHEDULE ENDS-->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget dashboard-table">
                <div class="widget-heading">
                    <h5 class="">Payout History</h5>
                </div>
                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Client</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Payouts</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Johnson & Johnson</td>
                                    <td>$2,189</td>
                                    <td><span class="badge outline-badge-info"> Processing </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                title="Edit"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                title="Delete"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>UC Corporation</td>
                                    <td>$9,189</td>
                                    <td><span class="badge outline-badge-warning"> Pending </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                title="Edit"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                title="Delete"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Web-o-Soft</td>
                                    <td>$2,189</td>
                                    <td><span class="badge outline-badge-success-teal"> Completed </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                title="Edit"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                title="Delete"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sun Pharma</td>
                                    <td>$12,189</td>
                                    <td><span class="badge outline-badge-warning"> Pending </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                title="Edit"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                title="Delete"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sandisko</td>
                                    <td>$19,189</td>
                                    <td><span class="badge outline-badge-info"> Processing </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                title="Edit"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                title="Delete"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget dashboard-table">
                <div class="widget-heading">
                    <h5 class="">Seller Targets</h5>
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span>Options</span> <i
                                class="las la-angle-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown"
                            style="will-change: transform;">
                            <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                            <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                            <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                        </div>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Seller Info</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Progress</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Sales</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="assets/img/profile-6.jpg"
                                                class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                alt="avatar">
                                            <p class="mb-0">Connor Mcguere</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-warning" role="progressbar"
                                                style="width: 29.56%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-warning">29.56%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="assets/img/profile-5.jpg"
                                                class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                alt="avatar">
                                            <p class="mb-0">Johny Borja</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-success-teal" role="progressbar"
                                                style="width: 92.89%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-success-teal">92.89%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="assets/img/profile-3.jpg"
                                                class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                alt="avatar">
                                            <p class="mb-0">Dingo Hernandes</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-info" role="progressbar"
                                                style="width: 65.01%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-info">62.01%</span></td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="assets/img/profile-13.jpg"
                                                class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                alt="avatar">
                                            <p class="mb-0">Kristopher Benny</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-danger" role="progressbar"
                                                style="width: 15.28%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-danger">15.28%</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="font-13 text-center mt-4 mb-1 text-muted">
                            <a class="text-primary" href="javascript:void(0);">Click here</a> to see the full seller
                            list
                        </p>
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