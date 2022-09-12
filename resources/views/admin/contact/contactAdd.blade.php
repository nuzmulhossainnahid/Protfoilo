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
                                <h4 class="card-title">Add Contact Section</h4>

                                <form class="forms-sample" action="{{url('addContactFrom')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Position</label>
                                        <input type="text" name="position" class="form-control" id="exampleInputName1" placeholder="Position">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputName1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Phone</label>
                                        <input type="number" name="phone" class="form-control" id="exampleInputName1" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Address</label>
                                        <textarea name="address" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Links</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Twitter</label>
                                        <input type="text" name="twitter" class="form-control" id="exampleInputName1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="exampleInputName1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">LinkIN</label>
                                        <input type="text" name="linkIn" class="form-control" id="exampleInputName1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" id="exampleInputName1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Youtube</label>
                                        <input type="text" name="youtube" class="form-control" id="exampleInputName1" >
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

