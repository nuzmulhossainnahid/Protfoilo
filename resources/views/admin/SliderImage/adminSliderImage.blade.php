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
                                <h4 class="card-title">Slider Image</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Slider Image
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
                                                <img src="SliderImage/{{$data->sliderImage}}" style="width: 200px; height: 200px" alt="image"/>
                                            </td>
                                            <td>
                                                <a href="{{url('deleteSlider',$data->id)}}"><button class="btn btn-light" style="background-color: red; color: white">Delete</button></a>

                                            </td>
                                            <td>
                                                <a href="{{url('changeSlider',$data->id)}}"><button class="btn btn-light" style="background-color: #0000cc; color: white">Change</button></a>

                                            </td>
                                                @endforeach

                                        </tr>

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

