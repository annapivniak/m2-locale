<?php

namespace Pivniak\Locale\Plugin;

class ConfigPlugin
{
    /**
     * @param \Magento\Framework\Locale\Config $config
     * @param \callable $proceed
     * @return array
     */
    public function aroundGetAllowedLocales(\Magento\Framework\Locale\Config $config, $proceed)
    {
        $result = $proceed();

        $result[] = 'fr_CH';
        asort($result);

        return $result;
    }
}
