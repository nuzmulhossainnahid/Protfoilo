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
                                <h4 class="card-title">Message Section</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Sender Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Subject
                                            </th>
                                            <th>
                                                Message
                                            </th>

                                            <th>
                                                Send Mail
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($data as $data)

                                                <td class="py-1">
                                                    {{$data->senderName}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->email}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->subject}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->message}}
                                                </td>

                                                <td>
                                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$data->email}}"><button class="btn btn-light" style="background-color: red; color: white">Mail</button></a>

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

