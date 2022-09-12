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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Education Section</h4>

                                <form class="forms-sample" action="{{url('editEducationFrom',$data->id)}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Degree Name</label>
                                        <input type="text" name="degreeName" class="form-control" id="exampleInputName1" value="{{$data->degreeName}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Discription</label>
                                        <input type="text" name="discription" class="form-control" id="exampleInputName1" value="{{$data->discription}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Starting Date</label>
                                        <input type="date" name="startingDate" class="form-control"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Ending Date</label>
                                        <input type="date" name="endingDate" class="form-control"  >
                                    </div>

                                    <input type="submit"   class="btn btn-success mr-2" style="background-color: green">
                                    <button class="btn btn-light" style="background-color: red">Cancel</button>
                                </form>
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

