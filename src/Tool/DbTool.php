<?php
namespace DCO\Tools\Tool;

class DbTool {
    /**
     * returns the result of the database query if there is only one record, otherwise null (on 0 or 2+ results / non-unique)
     * @param $result
     * @return mixed|null
     */
    public static function oneOrNull($result) {
        if ($result->getCount() == 1)
            return $result->current();
        else
            return null;
    }
}
