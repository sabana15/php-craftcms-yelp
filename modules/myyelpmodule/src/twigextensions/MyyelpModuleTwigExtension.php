<?php
/**
 * myyelp module for Craft CMS 3.x
 *
 * connect and fetch from Yelp
 *
 * @link      http://www.sabanaahmed.test
 * @copyright Copyright (c) 2021 Sabana Ahmed
 */

namespace modules\myyelpmodule\twigextensions;

use modules\myyelpmodule\MyyelpModule;

use Craft;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 *  This can be found in vendor/sabana15 src
 *  Do not forget to get the library
 */
use TrialAPI;
use Exception;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Sabana Ahmed
 * @package   MyyelpModule
 * @since     1.0.0
 */
class MyyelpModuleTwigExtension extends AbstractExtension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'MyyelpModule';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new TwigFilter('someFilter', [$this, 'someInternalFunction']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            //new TwigFunction('someFunction', [$this, 'someInternalFunction']),
            new TwigFunction('getSearchResults', [$this, 'getBusinessSearchResults']),
        ];
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @param null $text
     *
     * @return string
     */
    public function someInternalFunction($text = null)
    {
        $result = $text . " in the way";

        return $result;
    }

    /**
     *  This function is called from index.twig
     *  Calls the Yelp API and fetch the results based on location passed
     *  @param location|string
     *  @return status, response | Array
     */
    public function getBusinessSearchResults($location = null)
    {
        try{
            $apikey = "API Key goes here";
            $yelpFusion = new TrialAPI\YelpClient($apikey);
            $param = array("location" => $location);
            $response = $yelpFusion->getBusinessesSearchResults($param);
            return array('type' => 'succcess', 'response' => $response->businesses);
        }
        catch(Exception $e)
        {
            return array('type' => 'fail', 'response' => $e->getResponseBody());
        }
    }
}
