@extends('layouts.admintemplate')

@section('content')

<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Dashboard</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Project Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ project-task section ] start -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card project-task">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0"><i class="far fa-edit m-r-10"></i>Project Task</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg text-white f-14 f-w-400 float-right">23% Done</label>
                                                </div>
                                            </div>
                                            <h6 class="text-muted mt-4 mb-3">Complete Task : 6/10</h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width:60%;height:6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mt-3 mb-0 text-center text-muted">Project Team : 28 Persons</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-block">
                                            <h5 class="mb-4">Sales Statistics</h5>
                                            <h3 class="mb-4">2,30,598</h3>
                                            <span class="text-muted d-block">Top selling items statistic by last month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">Upcoming Event</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label>
                                                </div>
                                            </div>
                                            <h2 class="mt-2 ">45<sub class="text-muted f-14">Competitors</sub></h2>
                                            <h6 class="text-muted mt-3 mb-0">You can participate in event </h6>
                                            <i class="fab fa-angellist text-c-purple f-50"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ project-task section ] end -->

                                <!-- [ project-average section ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Reply</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="reply-price">
                                                <h3 class="">2.43 h</h3>
                                                <span class="text-uppercase">average time for first reply</span>
                                            </div>
                                            <div id="bar-chart1" class="ChartShadow BarChart barChart1" style="height:270px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ project-average section ] end -->

                                <!-- [ statistic chart ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Statistics</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div id="chart-percent" class="chart-percent" style="height:245px;"></div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <span class="mb-1 text-muted d-block">23%</span>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar progress-c-green" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <span class="mb-1 text-muted d-block">14%</span>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar progress-c-yellow" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <span class="mb-1 text-muted d-block">35%</span>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar progress-c-purple" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <span class="mb-1 text-muted d-block">28%</span>
                                                    <div class="progress" style="height: 5px;">
                                                        <div class="progress-bar progress-c-blue" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ statistic chart ] end -->

                                <!-- [ user web-list ] start -->
                                <div class="col-xl-4 col-md-12 m-b-30">
                                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="designer-tab" data-toggle="tab" href="#designer" role="tab">This Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Developer-tab" data-toggle="tab" href="#Developer" role="tab">All</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content User-Lists" id="myTabContent1">
                                        <div class="tab-pane fade show active" id="user" role="tabpanel">
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3784</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-2.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Julie Vad</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3544</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-3.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>2739</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Frida Thomse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>1032</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>8750</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>3750</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="designer" role="tabpanel">
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3784</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Julie Vad</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3544</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>2739</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Frida Thomse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>1032</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-2.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>8750</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-3.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>5850</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Developer" role="tabpanel">
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-2.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3784</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-2.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Julie Vad</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>3544</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-3.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>2739</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Frida Thomse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-down f-22 m-r-10 text-c-red"></i>1032</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center m-b-20">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Silje Larsen</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>8750</span>
                                                </div>
                                            </div>
                                            <div class="media friendlist-box align-items-center justify-content-center">
                                                <div class="m-r-10 photo-table">
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="m-0 d-inline">Storm Hanse</h6>
                                                    <span class="float-right d-flex  align-items-center"><i class="fas fa-caret-up f-22 m-r-10 text-c-green"></i>5875</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ user web-list ] end -->

                                <!-- [ overdue-task section ] start -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <h5 class="m-0">Overdue Tasks</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row  align-items-center">
                                                <div class="col-8">
                                                    <h2 class=" m-0">34</h2>
                                                    <span class="text-muted">Last Week 60%</span>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <h5 class="text-c-red f-w-400">10%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <h5 class="m-0">Tasks to Do</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row  align-items-center">
                                                <div class="col-8">
                                                    <h2 class=" m-0">25</h2>
                                                    <span class="text-muted">Last Week 40%</span>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <h5 class="text-c-green f-w-400">30%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <h5 class="m-0">Completed Task</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row  align-items-center">
                                                <div class="col-8">
                                                    <h2 class=" m-0">19</h2>
                                                    <span class="text-muted">Last Week 70%</span>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <h5 class="text-c-red f-w-400">25%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ overdue-task section ] end -->

                                <!-- [ user Project list ] start -->
                                <div class="col-md-12">
                                    <div class="card user-list">
                                        <div class="card-header">
                                            <h5>User Project List</h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block pb-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>project</th>
                                                            <th>Completed</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Social Media App</h6>
                                                                <p class="m-0">Assigned to<span class="text-c-green"> Tristan Madsen</span></p>
                                                            </td>
                                                            <td><span class="pie_1">326,134</span></td>
                                                            <td>
                                                                <h6 class="m-0">68%</h6></td>
                                                            <td>
                                                                <h6 class="m-0">October 26, 2017</h6></td>
                                                        </tr>

                                                        <tr>
                                                            <td><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-2.jpg') }}" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Newspaper Wordpress Web</h6>
                                                                <p class="m-0">Assigned to<span class="text-c-green">  Marcus Poulsen</span></p>
                                                            </td>
                                                            <td><span class="pie_2">110,134</span></td>
                                                            <td>
                                                                <h6 class="m-0">46%</h6></td>
                                                            <td>
                                                                <h6 class="m-0">September 4, 2017</h6></td>
                                                        </tr>

                                                        <tr>
                                                            <td><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-3.jpg') }}" alt="activity-user"></td>
                                                            <td>
                                                                <h6 class="mb-1">Dashboard UI Kit Design</h6>
                                                                <p class="m-0">Assigned to<span class="text-c-green">  Felix Johansen</span></p>
                                                            </td>
                                                            <td><span class="pie_3">226,134</span></td>
                                                            <td>
                                                                <h6 class="m-0">31%</h6></td>
                                                            <td>
                                                                <h6 class="m-0">November 14, 2017</h6></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="rounded-circle" style="width:40px;" src="{{ asset('images/user/avatar-1.jpg') }}" alt="activity-user"></td>
                                                            <td>a
                                                                <h6 class="mb-1">Social Media App</h6>
                                                                <p class="m-0">Assigned to<span class="text-c-green">  Tristan Madsen</span></p>
                                                            </td>
                                                            <td><span class="pie_4">500,134</span></td>
                                                            <td>
                                                                <h6 class="m-0">85%</h6></td>
                                                            <td>
                                                                <h6 class="m-0">December 14, 2017</h6></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ user Project list ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
