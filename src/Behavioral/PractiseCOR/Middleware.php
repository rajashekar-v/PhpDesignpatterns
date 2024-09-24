<?php 
namespace Rajashekar\Designpatterns\Behavioral\PractiseCOR;

abstract class Middleware {

    private $next;

    public function link_with(Middleware $middleware)
    {
        $this->next = $middleware;

        return $this->next;
    }

    public function check($email , $password)
    {
        if(!$this->next)
        {
            return true;
        }

        return $this->next->check($email , $password);
    }
}


