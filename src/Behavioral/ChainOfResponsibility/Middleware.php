<?php 
namespace Rajashekar\Designpatterns\Behavioral\ChainOfResponsibility;


abstract class Middleware {
    
    private $next;
    
    public function linkWith(Middleware $next)
    {
        $this->next = $next;
        return $this->next;
    }

    public function check($email,$password){

        echo "Code in Middleware \n";
        if(!$this->next)
        {
            return true;
        }

        return $this->next->check($email, $password);
        
    }
}

?>