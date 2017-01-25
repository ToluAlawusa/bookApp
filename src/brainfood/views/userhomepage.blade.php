
@extends('base')
@section('browsertitle')userhomepage @stop
@section('content')

    <div class="book-display">
      @foreach ($splash as $splash)
        <a href="/userbookpreview/{!! $splash->product_id !!}/">
          <div class="display-book" style="background: url({!! $splash->image !!}) 
          no-repeat center; background-size: cover; width: 190px;
          height: 270px;"></div>
      <div class="info">
        <h2 class="book-title">{!! $splash->product_name !!}</h2>
          <h3 class="book-author">{!! $splash->author_name !!}</h3>
            <h3 class="book-price">${!! $splash->price !!}</h3></a>
      </div>
      @endforeach          
    </div>                 
    <div class="trending-books horizontal-book-list">
      <h3 class="header">Trending</h3>
      <ul class="book-list">
        @foreach ($trending as $trending)
          <li class="book">          
            <a href="/userbookpreview/{!! $trending->product_id !!}/">
            <div class="book-cover" style="background: url({!! $trending->image !!}) 
            no-repeat center; background-size: cover; width: 168px;
            height: 218px;"></div>
            <div class="book-price"><p>${!! $trending->price !!}</p></div>
            </a>
          </li>
        @endforeach                 
      </ul>
    </div>
    <div class="recently-viewed-books horizontal-book-list">
      <h3 class="header">Recently Viewed</h3>
      <ul class="book-list">
        <div class="scroll-back"></div>
        <div class="scroll-front"></div>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$250</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$50</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$125</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$90</p></div>
        </li>
      </ul>
    </div>

@stop		
	
