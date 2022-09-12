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
                                <h4 class="card-title">Experience Section</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Position
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Phone
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Twitter
                                            </th>
                                            <th>
                                                Facebook
                                            </th>
                                            <th>
                                                LinkIn
                                            </th>
                                            <th>
                                                Instagram
                                            </th>
                                            <th>
                                                Youtube
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
                                                    {{$data->name}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->position}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->email}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->phone}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->address}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->twitter}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->facebook}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->linkIn}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->instagram}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->youtube}}
                                                </td>
                                                <td>
                                                    <a href="{{url('deleteContact',$data->id)}}"><button class="btn btn-light" style="background-color: red; color: white">Delete</button></a>

                                                </td>
                                                <td>
                                                    <a href="{{url('changeContact',$data->id)}}"><button class="btn btn-light" style="background-color: #0000cc; color: white">Change</button></a>
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

