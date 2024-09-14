<?php 
namespace Rajashekar\Designpatterns\Behavioral\State;


class Post {

    protected $state;

    public function __construct()
    {
        $this->state = new DraftState();
    }

    public function setState(PostState $postState)
    {
        $this->state = $postState;
    }

    public function submitForReview()
    {
        $this->state->submitForReview($this);
    }
    public function approve()
    {
        $this->state->approve($this);
    }
    public function publish()
    {
        $this->state->publish($this);
    }
    public function revertToDraft()
    {
        $this->state->revertToDraft($this);
    }
}


?>