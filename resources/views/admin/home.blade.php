@extends('admin.include.main')

@section('title')Home @endsection

@section('body')

<div class="container-scroller">
    @include('admin.home.navbarTop')
    @include('admin.home.navbarDown')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('admin.home.themSeteing')
        <!-- partial -->
       @include('admin.home.slider')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
                                        <h1 class="mb-0">8742</h1>
                                    </div>
                                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                                </div>
                                <canvas id="expense-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
                                        <h1 class="mb-0">47,840</h1>
                                    </div>
                                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                                </div>
                                <canvas id="budget-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
                                        <h1 class="mb-0">$7,243</h1>
                                    </div>
                                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                                </div>
                                <canvas id="balance-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
           @include('admin.home.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@endsection

