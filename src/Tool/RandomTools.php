<?php
namespace DCO\Tools\Tool;

class RandomTools {
    /**
     * Get a random string with n chars
     * @param $n
     * @return string
     * @throws \Random\RandomException
     */
    public static function getRandomString($n) {
        return bin2hex(random_bytes($n / 2));
    }

    /**
     * Get a random string with $n characters from $characterList
     * @param $n
     * @param $characterList
     * @return string
     * @throws \Random\RandomException
     */
    public static function getRandomStringFromCharacters($n, $characterList) {
        $charactersLength = strlen($characterList);
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $randomString .= $characterList[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
