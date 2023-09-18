<?php

class CascadingPalindrome {

    /**
     * @author <Obinna Akaolisa>
     * @email <akaolisaobinna@gmail.com>
     * @ZuriStundetID <ZUR000241V1I>
     */

    private static function isValidString(string $input): bool
    {
        // checks if passed parameter is a valid string
        if (!is_string($input)) {
            return false;
        } else return true;
    }

    private static function cleanPart(string $unclean): string
    {
        // Remove non-alphanumeric characters and convert to lowercase for comparison
        $clean = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $unclean));

        return $clean;
    }

    private static function isPalindrome(string $str): bool 
    {
        $length = strlen($str);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($str[$i] !== $str[$length - $i - 1]) {
                return false;
            }
        }
        return true;
    }

    public static function getPalindrome(string $input): string {
        
        // Validate input
        if (!self::isValidString($input)) {
            return "Invalid input. Please provide a string.";
        }

        // Split the input into parts using space as a delimiter
        $parts = explode(" ", $input);
        
        // Initialize an array to store palindrome parts
        $palindromes = [];

        // loop through each parts of the input string
        foreach ($parts as $part) {

            // clean each part
            $cleanedPart = self::cleanPart($part);

            // Check if the cleanedpart is a palindrome
            if (self::isPalindrome($cleanedPart)) {
                // append it to the palindrome array
                $palindromes[] = $cleanedPart;
            }
        }

        // join all valid palindrome parts as a single space-separated string
        return implode(" ", $palindromes);
    }
}
