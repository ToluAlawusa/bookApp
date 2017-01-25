<?php

namespace Brainfood\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Reviews extends Eloquent 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'reviews';
  protected $primaryKey = 'review_id';
  protected $timestamp = false;

  public static function getReviews() {
    $review = Reviews::all();
    return $review;
  }

  public static function getReviewsId($id) {
    // $reviewid = Reviews::all();
    $revid = Reviews::where("product_id", $id)->get();

    if($revid != null) {
      return $revid;

    } else {

        return false;
      }     
  }
}
