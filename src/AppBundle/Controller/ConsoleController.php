<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConsoleController extends Controller
{
  
  /**
     * @Route("/postrecieve", name="postrecieve")
     */
    public function indexAction(Request $request)
    {
        //shell_exec('cd ./../ && git reset --hard HEAD && git pull');
        shell_exec('cd ./../ && git pull && php bin/console cache:clear -e=prod');
        $response = new Response();
        $response->setStatusCode(200);
        return $response;
    }
  
}