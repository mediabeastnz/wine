<?php

class Bottle extends Eloquent {

  use SoftDeletingTrait;

  protected $dates = ['deleted_at'];

  /**
  * Does the database record have timestamps.
  *
  * @return boolean
  */
  public $timestamps = true;

  /**
  * The database table used by the model.
  *
  * @var string
  */
  protected $table = 'bottles';


  public function user()
  {
    return $this->belongsTo('User');
  }

}
