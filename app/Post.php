<?php

namespace App;

use App\Category;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];
    protected $appends = ['upvote_count', 'downvote_count'];

	public function getUpvoteCountAttribute()
	{
		return $this->votes()->where('type', 1)->count();
	}

	public function getDownvoteCountAttribute()
	{
		return $this->votes()->where('type', 0)->count();
	}

	public function votes()
	{
		return $this->hasMany(Vote::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

}
