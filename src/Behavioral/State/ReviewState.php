<?php 
namespace Rajashekar\Designpatterns\Behavioral\State;

use Rajashekar\Designpatterns\Behavioral\State\PostState;

class ReviewState implements PostState{
    public function submitForReview(Post $post) {
        echo "Post is already under review.\n";
    }

    public function approve(Post $post) {
        echo "Post approved and published.\n";
        $post->setState(new PublishedState());
    }

    public function publish(Post $post) {
        echo "Post approved and published.\n";
        $post->setState(new PublishedState());
    }

    public function revertToDraft(Post $post) {
        echo "Post reverted to draft.\n";
        $post->setState(new DraftState());
    }
}


?>