<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Webscrapping Controller
 *
 */
class WebscrappingController extends AppController
{
    public function index()
    {
        return $this->render("index","master");
    }
}
