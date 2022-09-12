@extends('admin.include.main')

@section('title')Header @endsection

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
                                <h4 class="card-title">Edit Portfolio</h4>

                                <form class="forms-sample" action="{{url('editPortfolio',$data->id)}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Project Name</label>
                                        <input type="text" name="projectName" class="form-control" id="exampleInputName1" value="{{$data->projectName}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Project Category</label>
                                        <select name="projectCategory" class="form-control" style="color: black" id="">
                                            <option value="web-des">Design</option>
                                            <option value="web-dev">Development</option>
                                            <option value="art-Int">Artificial Intelligence</option>
                                        </select>


                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Project Link</label>
                                        <input type="text" name="projectLink" class="form-control" id="exampleInputName1" value="{{$data->projectLink}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Project Image</label>
                                        <input type="file" name="image" class="form-control" >
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

