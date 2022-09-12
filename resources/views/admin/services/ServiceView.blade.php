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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Service Section</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Name of the Services
                                            </th>
                                            <th>
                                                Discription
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                            <th>
                                                Change
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($data as $data)

                                                <td class="py-1">
                                                    {{$data->nameOfServices}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->discription}}
                                                </td>
                                                <td>
                                                    <a href="{{url('deleteService',$data->id)}}"><button class="btn btn-light" style="background-color: red; color: white">Delete</button></a>

                                                </td>
                                                <td>
                                                    <a href="{{url('changeService',$data->id)}}"><button class="btn btn-light" style="background-color: #0000cc; color: white">Change</button></a>
                                                </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
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

