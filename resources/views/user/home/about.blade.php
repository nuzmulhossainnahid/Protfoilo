<!-- About Start -->
<div class="about" id="about">
    <div class="content-inner">
        <div class="content-header">
            <h2>About Me</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <img src="AboutImage/{{$about->aboutImage}}" alt="Image">
            </div>
            <div class="col-md-6 col-lg-7">
                <p>
                   {{$about->discription}}
                </p>
                <a class="btn" href="https://mail.google.com/mail/?view=cm&fs=1&to={{$contact->email}}">Hire Me</a>
            </div>
        </div>
        <div class="row">
            @foreach($skill as $skill)
            <div class="col-md-6">
                <div class="skills">
                    <div class="skill-name">
                        <p>{{$skill->skillName}}</p><p>{{$skill->percentage}}%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
                @endforeach

        </div>
    </div>
</div>
<!-- About End -->