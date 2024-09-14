<?php 
namespace Rajashekar\Designpatterns\Behavioral\State;

interface PostState{
    public function submitForReview(Post $post);
    public function approve(Post $post);
    public function publish(Post $post);
    public function revertToDraft(Post $post);
}






?>