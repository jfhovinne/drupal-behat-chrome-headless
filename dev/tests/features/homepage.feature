Feature: Basic information on the homepage

  Background:
    Given I am an anonymous user

  Scenario: I am able to see some text and click links on the homepage
    When I am on the homepage
    Then I should see the heading "Welcome to Drush Site-Install"
    And I should see the text "No front page content has been created yet"
    And I click "Log in"
    Then I should see the text "Username"
    And I should see the text "Password"
