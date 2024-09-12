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
}
