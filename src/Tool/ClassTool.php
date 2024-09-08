<?php
namespace DCO\Tools\Tool;

class ClassTool {
    /**
     * get class name of an object (without namespace)
     * @param $o
     * @return string
     * @throws \ReflectionException
     */
    public static function getClassName($o) {
        return (new \ReflectionClass($o))->getShortName();
    }
}
