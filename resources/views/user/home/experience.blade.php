<!-- Experience Start -->
<div class="experience" id="experience">
    <div class="content-inner">
        <div class="content-header">
            <h2>Experience</h2>
        </div>
        <div class="row align-items-center">
            @foreach($experience as $experience)
            <div class="col-md-6">
                <div class="exp-col">
                    <span>{{$experience->startingDate}} <i>to</i> {{$experience->endingDate}}</span>
                    <h3>{{$experience->degreeName}}</h3>
                    <h4>{{$experience->address}}</h4>
                    <h5>{{$experience->post}}</h5>
                    <p>{{$experience->discription}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Experience Start -->