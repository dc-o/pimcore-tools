<?php
namespace DCO\Tools\Tools;

use Pimcore\Model\WebsiteSetting;

class SettingsTool {
    /**
     * returns the setting with the specified $settingName, or if it hasn't been set yet, an optional $defaultValue
     * @param $settingName string name of the setting
     * @param $defaultValue string defaultValue, in case the setting is not set yet
     * @return mixed|null
     * @throws \Exception
     */
    public static function getSetting(string $settingName, string $defaultValue = null) {
        $setting = WebsiteSetting::getByName($settingName);
        if (empty($setting))
            return $defaultValue;
        return $setting->getData();
    }
}
