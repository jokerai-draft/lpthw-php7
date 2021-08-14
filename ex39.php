<?php

$stuff = ["name" => "Zed", "age" => 39, "height" => 6 * 12 + 2];
print_r($stuff['name'] . "\n");
$stuff['city'] = "SF";
print_r($stuff);

echo "\n";

# create a mapping of state to abbreviation

$states = [
    "Oregon" => "OR",
    "Florida" => "FL",
    "California" => "CA",
    "New York" => "NY",
    "Michigan" => "MI",
];

# create a basic set of states and some cities in them

$cities = [
    "CA" => "San Francisco",
    "MI" => "Detroit",
    "FL" => "Jacksonville",
];

# add some more cities

$cities["NY"] = "New York";
$cities["OR"] = "Portland";

# print out some cities

print_r(str_repeat("-", 10) . "\n");
print_r("NY State has: " . $cities['NY'] . "\n");
print_r("OR State has: " . $cities['OR'] . "\n");

# print some states

print_r(str_repeat("-", 10) . "\n");
print_r("Michigan's abbreviation is: " . $states['Michigan'] . "\n");
print_r("Florida's abbreviation is: " . $states['Florida'] . "\n");

# do it by using the state then cities dict

print_r(str_repeat("-", 10) . "\n");
print_r("Michigan has: " . $cities[$states['Michigan']] . "\n");
print("Florida has: " . $cities[$states['Florida']] . "\n");

# print every state abbreviation

print_r(str_repeat("-", 10) . "\n");
foreach ($states as $state => $abbrev) {
    print_r("$state is abbreviated $abbrev" . "\n");
}
unset($state); unset($abbrev);

# print every city in state

print_r(str_repeat("-", 10) . "\n");
foreach ($cities as $abbrev => $city) {
    print_r("$abbrev has the city $city" . "\n");
}

# now do both at the same time

print_r(str_repeat("-", 10) . "\n");
foreach ($states as $state => $abbrev) {
    print_r("$state is abbreviated $abbrev");
    print_r(" and has city $cities[$abbrev]" . "\n");
}

print_r(str_repeat("-", 10) . "\n");
# safely get a abbreviation by state that might not be there
$state = $states['Texas'] ?? null; // 对 可能不存在的键 取值 (先确认一个 key 是否存在, 如果存在 则返回 key's value , 如果不存在 则返回默认值)

if ($state === null) {
    print_r("Sorry, no Texas. \n");
}

# get a city with a default value

$city = $cities['TX'] ?? 'Does Not Exist';
print_r("The city for the state 'TX' is: $city" . "\n");
