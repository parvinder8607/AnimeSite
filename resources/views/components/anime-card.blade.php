<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{$anime->getImageUrl()}}">
            <div class="ep">{{$anime->getEpisodeNo()}} / {{$anime->getEpisodeNo()}}</div>
            <div class="comment"><i class="fa fa-comments"></i> 11</div>
            <div class="view"><i class="fa fa-eye"></i> {{ $anime->getPopularity() }}</div>
        </div>
        <div class="product__item__text">
            <ul>
                @if($anime->isairing())
                <li>Active</li>
                @else
                <li>unactive</li>
                @endif
                <li>{{ $anime->getType() }}</li>
            </ul>
            <h5><a href="{{ route('show',['id'=>$anime->id(),'title'=>$anime->getTitleEnglish()]) }}">{{$anime->getTitleEnglish()}}</a></h5>
        </div>
    </div>
</div>