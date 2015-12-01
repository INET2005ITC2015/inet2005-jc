<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable =[
        'title',
        'body',
        'publish_at',
        'user_id' // temp
    ];

    protected $dates = ['publish_at'];

    public function scopePublished($query){
        $query->where('publish_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query){
        $query->where('publish_at', '>', Carbon::now());
    }

    public function setPublishAtAttribute($date){
        $this->attributes['publish_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
