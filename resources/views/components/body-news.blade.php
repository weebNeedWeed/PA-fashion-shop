@props(["news"])

<div class="body-news-box mb-4">
  <img src="{{asset($news->image)}}" class="body-news-img">
  <div class="content-box">
    <h4 class="body-news-title">{{$news->title}}</h4>
    <p class="body-news-description">
      {{$news->description}}
    </p>
  </div>
</div>
