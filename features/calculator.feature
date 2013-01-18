Feature: Calculator feature

	Scenario Outline: It should calculate something
		Given I calculate "<operation>"
		And I press "Ok"
		Then I should see "<result>" in the "#result" element

	Examples:
		| operation | result |
		| 1+1       | 2      |
		| 3*2       | 6      |
		| 4-2       | 2      |