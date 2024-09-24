<?php 
namespace Rajashekar\Designpatterns\Behavioral\PractiseCOR;

use Rajashekar\Designpatterns\Behavioral\PractiseCOR\Middleware;

class ThrottlingMiddleware extends Middleware{

    private $request_per_minute;
    private $current_time;

    private $request;

    public function __construct($request_per_minute)
    {
        $this->request_per_minute = $request_per_minute;
        $this->current_time = time();

    }

    public function check($email , $password)
    {
        
        if(time() > $this->current_time+60)
        {
            $this->request = 0;
            $this->current_time = time();
        }

        $this->request++;

        if($this->request > $this->request_per_minute)
        {
            echo "Max requests has been reached please try again after sometime";
            die();
        }

        return parent::check($email , $password);
    }
}
