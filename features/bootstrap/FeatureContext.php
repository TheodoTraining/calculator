<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->useContext('mink', new MinkContext());
    }

    /**
     * @Given /^I calculate "([^"]*)"$/
     */
    public function iCalculate($operation)
    {
        list($left, $operator, $right) = str_split($operation);
        $mink = $this->getSubContext('mink');
        $mink->visit("/");
        $mink->fillField('calc-left', $left);
        $mink->fillField('calc-operator', $operator);
        $mink->fillField('calc-right', $right);
    }
}
