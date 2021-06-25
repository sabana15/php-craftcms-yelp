<?php
/**
 * myyelp module for Craft CMS 3.x
 *
 * connect and fetch from Yelp
 *
 * @link      http://www.sabanaahmed.test
 * @copyright Copyright (c) 2021 Sabana Ahmed
 */

namespace modules\myyelpmodule\controllers;

use modules\myyelpmodule\MyyelpModule;

use Craft;
use craft\web\Controller;

/**
 * YelpController Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your module’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Sabana Ahmed
 * @package   MyyelpModule
 * @since     1.0.0
 */
class YelpControllerController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our module's index action URL,
     * e.g.: actions/myyelp-module/yelp-controller
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the YelpControllerController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our module's actionDoSomething URL,
     * e.g.: actions/myyelp-module/yelp-controller/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the YelpControllerController actionDoSomething() method';

        return $result;
    }
}
