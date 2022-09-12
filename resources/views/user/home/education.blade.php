<!-- Education Start -->
<div class="education" id="education">
    <div class="content-inner">
        <div class="content-header">
            <h2>Education</h2>
        </div>
        <div class="row align-items-center">
            @foreach($education as $education)
            <div class="col-md-6">
                <div class="edu-col">
                    <span>{{$education->startingDate}} <i>to</i> {{$education->endingDate}}</span>
                    <h3>{{$education->degreeName}}</h3>
                    <p>{{$education->discription}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Education Start -->