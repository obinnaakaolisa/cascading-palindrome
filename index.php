<?php

// Import the CascadingPalindrome class
require_once ("CascadingPalindrome.php");

// Example usage:
$input1 = "1230321";
$input2 = "1230321 09234 0124210";
$input3 = "abcd5dcba 1230321 09234 0124210";
$input4 = "16189 NOKIA5AIKON 331020133";
$input5 = "09234 0124210 obinna1annibo";
$input6 = "akaolisamasiloaka 1230321 09234 0124210";
$input7 = "202202202 nigeria2airegin winlniw 30304094";
$input8 = "palindrome5emordnilap";
$input9 = "cascadetedacsac cascadingtgnidacsac";
$input10 = "zuricdt9tdciruz";

// Check inputs
$result1 = CascadingPalindrome::getPalindrome($input1);
$result2 = CascadingPalindrome::getPalindrome($input2);
$result3 = CascadingPalindrome::getPalindrome($input3);
$result4 = CascadingPalindrome::getPalindrome($input4);
$result5 = CascadingPalindrome::getPalindrome($input5);
$result6 = CascadingPalindrome::getPalindrome($input6);
$result7 = CascadingPalindrome::getPalindrome($input7);
$result8 = CascadingPalindrome::getPalindrome($input8);
$result9 = CascadingPalindrome::getPalindrome($input9);
$result10 = CascadingPalindrome::getPalindrome($input10);

// echo out the results in the browser
echo "Result 1: $result1" . '<br>'; // Output: "Result 1: 1230321"
echo "Result 2: $result2" . '<br>'; // Output: "Result 2: 1230321 0124210"
echo "Result 3: $result3" . '<br>'; // Output: "Result 3: abcd5dcba 1230321 0124210"
echo "Result 4: $result4" . '<br>'; // Output: "Result 4: nokia5aikon 331020133"
echo "Result 5: $result5" . '<br>'; // Output: "Result 5: 0124210 obinna1annibo"
echo "Result 6: $result6" . '<br>'; // Output: "Result 6: akaolisamasiloaka 1230321 0124210"
echo "Result 7: $result7" . '<br>'; // Output: "Result 7: 202202202 nigeria2airegin winlniw"
echo "Result 8: $result8" . '<br>'; // Output: "Result 8: palindrome5emordnilap"
echo "Result 9: $result9" . '<br>'; // Output: "Result 9: cascadetedacsac cascadingtgnidacsac"
echo "Result 10: $result10" . '<br>'; // Output: "Result 10: zuricdt9tdciruz"
