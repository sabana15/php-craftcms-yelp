# php-craftcms-yelp

This feches the business from Yelp API V3 and diplays on the index page of Craft CMS 3

----------------------------------------------------------------------
INSTALL THE DEPENDENCY
----------------------------------------------------------------------

1. You can add as a dependency using Composer:

   composer require sabana15/yelp-fusion-api-php

    Alternatively, 

    you can specify as a dependency in your project's existing composer.json file (Refer the composer.json file in this repository):

   {

        "require": {

            "sabana15/yelp-fusion-api-php": "1.3"

        }
    }

2. Add to composer.json file (to ensure composer knows where to find the module)

"autoload": {
    "psr-4": {
      "modules\\myyelpmodule\\": "modules/myyelpmodule/src/"
    }
  },


3. Then in terminal execute the following command

    composer update
    
    composer dump-autoload

----------------------------------------------------------------------
SETTING UP THE MODULE
----------------------------------------------------------------------

Download the full source code from this repository

1. Update your Craft project's app.php file as in config/app.php of his repository

2. Copy the module 'myyelpmodule' in your projects modules folder.

3. Update your project's 'index.twig' file similar to templates/index.twig file of this repository.

4. Update the Yelp API Key in 'getBusinessSearchResults' function in modules/myyelpmodule/src/twigextensions/MyyelpModuleTwigExtension.php


----------------------------------------------------------------------
OUTPUT
----------------------------------------------------------------------

The index page of your Craft CMS project will show the list of businesses based on search parameter set in template.
