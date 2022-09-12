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
                                <h4 class="card-title">About Image</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Designation
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
                                                    <img src="AboutImage/{{$data->aboutImage}}" style="width: 200px; height: 200px" alt="image"/>
                                                </td>
                                                <td class="py-1">
                                                    {{$data->discription}}
                                                </td>
                                                <td>
                                                    <a href="{{url('deleteAbout',$data->id)}}"><button class="btn btn-light" style="background-color: red; color: white">Delete</button></a>

                                                </td>
                                                <td>
                                                    <a href="{{url('changeAbout',$data->id)}}"><button class="btn btn-light" style="background-color: #0000cc; color: white">Change</button></a>

                                                </td>
                                            @endforeach

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Skill</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Skill Name
                                            </th>
                                            <th>
                                                Percentage
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
                                        @foreach($skill as $skill)
                                        <tr>


                                                <td class="py-1">
                                                    {{$skill->skillName}}
                                                </td>
                                                <td class="py-1">
                                                    {{$skill->percentage}}
                                                </td>
                                                <td>
                                                    <a href="{{url('deleteSkill',$skill->id)}}"><button class="btn btn-light" style="background-color: red; color: white">Delete</button></a>

                                                </td>
                                                <td>
                                                    <a href="{{url('editSkill',$skill->id)}}"><button class="btn btn-light" style="background-color: #0000cc; color: white">Change</button></a>

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

