<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface; 
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\Security\Core\User\UserInterface;

class APIController extends AbstractController
{

    /** 
    * @var integer HTTP status code - 200 (OK) by default 
    */ 
    protected $statusCode = 200;

    /** 
    * Gets the value of statusCode. 
    * 
    * @return integer
    */ 
    public function getStatusCode() 
    {
        return $this->statusCode; 
    }

    /** * Sets the value of statusCode. *
    *  
    * @param integer $statusCode the status code 
    * 
    * @return self 
    */ 
    protected function setStatusCode($statusCode) 
    { 
        $this->statusCode = $statusCode;
        return $this;
    }
    
}
