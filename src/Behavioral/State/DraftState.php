<?php 
namespace Rajashekar\Designpatterns\Behavioral\State;

use Rajashekar\Designpatterns\Behavioral\State\PostState;

class DraftState implements PostState{
    public function submitForReview(Post $post) {
        echo "Post submitted for review.\n";
        $post->setState(new ReviewState());
    }

    public function approve(Post $post) {
        echo "Post cannot be approved in draft state.\n";
    }

    public function publish(Post $post) {
        echo "Post cannot be published in draft state.\n";
    }

    public function revertToDraft(Post $post) {
        echo "Post is already in draft state.\n";
    }
}


?>