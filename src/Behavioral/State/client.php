<?php 

namespace Rajashekar\Designpatterns\Behavioral\State;

use Rajashekar\Designpatterns\Behavioral\State\Post;

$post = new Post();

$post->submitForReview();

$post->publish();

$post->submitForReview(); 

$post->revertToDraft(); 

$post->setState(new ReviewState());

$post->revertToDraft();

$post->submitForReview();







?>