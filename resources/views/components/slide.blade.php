<div class="hero__items set-bg" data-setbg="{{$anime->getBanImage()}}">
    <div class="row">
        <div class="col-lg-6">
            <div class="hero__text">
                <div class="label">{{ $anime->getGenre() }}</div>
                <h2>{{ $anime->getTitleEnglish() }}</h2>
                <p> {{ substr($anime->getDetail(), 0, 20) }}@if(strlen($anime->getDetail()) > 20){{ '...' }}@endif</p>
                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>