@props(["news"])

<div class="col-12 col-sm-6 col-md-4">
  <div class="head-news-box">
    <img src="{{asset($news->image)}}" class="head-news-img">

    <p class="head-news-title">
      {{$news->title}}
    </p>
  </div>
</div>
