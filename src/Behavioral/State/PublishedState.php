<?php 
namespace Rajashekar\Designpatterns\Behavioral\State;

use Rajashekar\Designpatterns\Behavioral\State\PostState;

class PublishedState implements PostState{
    public function submitForReview(Post $post) {
        echo "Post cannot be reviewed once published.\n";
    }

    public function approve(Post $post) {
        echo "Post is already published.\n";
    }

    public function publish(Post $post) {
        echo "Post is already published.\n";
    }

    public function revertToDraft(Post $post) {
        echo "Post cannot be reverted to draft after publishing.\n";
    }
}


?>