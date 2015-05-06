<?php

use Behat\Behat\Context\BehatContext;
use Behat\CommonContexts\MinkExtraContext;
use Behat\MinkExtension\Context\MinkContext;
use M6Web\Behat\SEOExtension\Context\PageContext;
use M6Web\Behat\SEOExtension\Context\RobotContext;


/**
* Features context.
*/
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
    */
    public function __construct(array $parameters)
    {
        $this->useContext('mink',  new MinkContext());
        $this->useContext('mink-extra',  new MinkExtraContext());
        $this->useContext('seo-checker-robot', new RobotContext());
        $this->useContext('seo-checker-page', new PageContext());
    }
}
