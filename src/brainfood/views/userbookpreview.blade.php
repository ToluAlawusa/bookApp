@extends('base')
@section('browsertitle')userbookpreview @stop
@section('content')

    <!--  @if (isset($_SESSION['errmsg']))
    <p class="global-error">{!! $_SESSION['errmsg'] !!}</p>
    @endif -->
    <div class="book-display">
     <div class="display-book" style="background: url({!! $prodid->image !!}) 
       no-repeat center; background-size: cover; width: 168px;
       height: 218px;"></div>
        <div class="info">

         <h2 class="book-title">{!! $prodid->product_name !!}</h2>
         <h3 class="book-author">{!! $prodid->author_name !!}</h3>
         <h3 class="book-price">{!! $prodid->price !!}</h3>

         <form action="/usercart/{!! $id !!}/" method="POST">
         <label for="book-amout">Quantity</label>
         <input type="number" name="quan" class="book-amount text-field">
         <input type="submit" class="def-button add-to-cart" name="addto" value="Add to Cart">
         </form>

        </div>   
    </div>
    <div class="book-reviews">
        <h3 class="header">Reviews</h3>
        @foreach ($review as $review)
          <ul class="review-list">
             <li class="review">
               <div class="avatar-def user-image">
               <h4 class="user-init">{!! substr($review->firstname, 0, 1).substr($review->lastname, 0, 1) !!}</h4>
               </div>
               <div class="info">
               <h4 class="username">{!! $review->firstname !!} - {!! $review->lastname !!}</h4>
               <p class="comment">{!! $review->comments !!}</p>
               </div>
             </li>                
          </ul>
        @endforeach
     
      <div class="add-comment">
        <h3 class="header">Add your comment</h3>
        <form class="comment" action="/userbookpreview/{!! $id !!}/" method="POST">
          <textarea class="text-field" name="comm" placeholder="write something"></textarea>
          <input type="submit" class="def-button post-comment" name="upl" value="Upload comment"/>
        </form>
      </div>
    </div>  
@stop

    
