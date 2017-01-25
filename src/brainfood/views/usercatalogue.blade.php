@extends('base')
@section('browsertitle')usercatalogue @stop

      
    <div class="side-bar">
      <div class="categories">
        <h3 class="header">Categories</h3>
          <ul class="category-list">
          @foreach ($cat as $cat)
          <a href="/usercatalogue/{!! $cat->category_id !!}/">
          <li class="category">{!! $cat->category_name !!}</li></a>
          @endforeach
          </ul>
      </div>
    </div>

    @section('content')

    <div class="main-book-list horizontal-book-list">
      <ul class="book-list">
       @foreach ($prod as $prod)
       <a href="/userbookpreview/{!! $prod->product_id !!}/">
         <li class="book">
           <div class="book-cover" style="background: url({!! $prod->image !!}) 
           no-repeat center; background-size: cover; width: 168px;
           height: 218px;"></div>
           <div class="book-price"><p>${!! $prod->price !!}</p></div>
         </li>
       </a>
       @endforeach                
      </ul>
      <div class="actions">
        <button class="def-button previous">Previous</button>
        <button class="def-button next">Next</button>
      </div>
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

 

    
