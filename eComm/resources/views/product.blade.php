@extends('master')
@section("content")
<div class="custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="item {{$item['id'] == 1 ? 'active' : ''}}">
      <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}">
        <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
        </div>
      </a>
      </div>

    @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="trending-wrapper">
    <h3>Tredning Products</h3>
    @foreach($products as $item)
    <div class="col-md-2 col-sm-6 card shadow-sm custom-card" style="width: 22rem;">
      <div class="trening-item">
      <a href="detail/{{$item['id']}}" style="margin: 20px">
        <img class="trending-image card-img-top" src="{{$item['gallery']}}">
        <div class="card-body text-center">
        <h3 class="card-title text-dark text-center">{{$item['name']}}</h3>
        </div>
      </a>
      </div>
    </div>
  @endforeach
  </div>
</div>
</div>
@endsection

<style>
  .custom-card {
    border: none;
    background: linear-gradient(135deg, #e3f2fd,#FFFFFF,#FFFFFF, #bbdefb);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 8px;
    overflow: hidden;
    padding: 40px;
    margin: 30px;
  }

  .custom-card:hover {
    transform: scale(1.09);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    background: linear-gradient(135deg, #f8f9fa,#FFFFFF,#FFFFFF,#e3f2fd);
  }

  .trending-image {
    object-fit: cover;
    transition: opacity 0.3s;
  }

  .trending-image:hover {
    opacity: 0.9;
  }

  /* .card-body {
    width: 200px;
  } */

  .card-title {
    font-weight: bold;
    color: #333;
    text-decoration: none;
  }
</style>