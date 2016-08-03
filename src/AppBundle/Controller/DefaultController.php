<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Assetic\Exception\Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{

    /**
     *
     * @param Request $request            
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     *
     * @param Request $request            
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function apiAction(Request $request)
    {
        $entityName = $request->get('entityName', null);
        
        $data = [
            $request->request
        ];
        
        $data = array_merge($data, []);
        $entityOperation = $request->getMethod();
        $entities = [];
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $serializer = $this->get('jms_serializer');
        $repository = $doctrine->getRepository($entityName);

        switch ($entityOperation)
        {
            case 'GET':

                $data = $repository->findAll();
                $response = new JsonResponse();
                $response->headers->set('Content-Type', 'application/json');
                $response->setData($serializer->serialize($data, 'json'));

                return $response;

                break;
            
            case 'DELETE':
                
                foreach ($entities as $entity)
                {
                    $em->persist($entity);
                }
                
                break;
            
            case 'POST':
            case 'PUT':
                
                foreach ($entities as $entity)
                {
                    $em->persist($entity);
                }
                
                print "API";
                
                break;
            
            default:
                
                break;
        }
        
        // return $this->render('AppBundle:Default:api.html.twig');
    }
}