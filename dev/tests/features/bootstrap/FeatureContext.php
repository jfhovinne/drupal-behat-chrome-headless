<?php

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements SnippetAcceptingContext {

  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {
  }

  /**
   * Maximizes the browser window.
   *
   * Use this when some tests fail due to elements not being visible because
   * of a limited screen size.
   *
   * @BeforeScenario @maximizedwindow
   */
  public function maximizeBrowserWindow() {
    $this->getSession()->getDriver()->maximizeWindow();
  }

  /**
    * Pauses the execution
    *
    * @Given I wait :arg1 seconds
    */
  public function iWaitXSeconds($arg1) {
    if (is_numeric($arg1) && $arg1 > 0 && $arg1 < 60) {
      $this->getSession()->wait($arg1 * 1000);
    } else {
      throw new \InvalidArgumentException(sprintf('Invalid number of seconds: "%s"', $arg1));
    }
  }
}
