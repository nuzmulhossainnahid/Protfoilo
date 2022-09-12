<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="content-inner">
        <div class="content-header">
            <h2>Portfolio</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".web-des">Design</li>
                    <li data-filter=".web-dev">Development</li>
                    <li data-filter=".art-Int">Artificial Intelligence</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">

            @foreach($portfolio as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolio->projectCategory}}">

                <div class="portfolio-wrap">
                    <figure>
                        <img src="PortfolioImage/{{$portfolio->image}}" class="img-fluid" alt="">
                        <a href="PortfolioImage/{{$portfolio->image}}" data-lightbox="portfolio" data-title="Project Name" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                        <a href="{{$portfolio->projectLink}}" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                        <a class="portfolio-title" href="#">Project Name <span>{{$portfolio->projectName}}</span></a>
                    </figure>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Portfolio Start -->