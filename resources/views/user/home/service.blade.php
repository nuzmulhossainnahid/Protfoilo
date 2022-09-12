<!-- Service Start -->
<div class="service" id="service">
    <div class="content-inner">
        <div class="content-header">
            <h2>Service</h2>
        </div>
        <div class="row align-items-center">
            @foreach($service as $service)
            <div class="col-md-6">
                <div class="srv-col">

                    <i class="fa fa-server"></i>
                    <h3>{{$service->nameOfServices}}</h3>
                    <p>{{$service->discription}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service Start -->