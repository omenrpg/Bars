<?php

namespace APIBundle\Controller;

use APIBundle\Exceptions\GoogleApiException;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarsController extends FOSRestController
{
    /**
     * @Rest\Get("/bars")
     * @ApiDoc(
     *  description="Returns a collection of Bars located within 2km radius around position, by default it is Neptune's Fountain at Gdańsk",
     *  section="BarsApi"
     * )
     * @QueryParam(name="position", description="latitude and longitude separated by comma")
     * @param null|string $position
     * @return View
     */
    public function indexAction(string $position = null) : View
    {
        try{
            $barsApi = $this->get('api.services.bars_api');
            return new View($barsApi->getBars($position), 200);
        }
        catch(GoogleApiException $e) {
            throw new HttpException(503, "503: Service Unavailable");
        }
    }


}
