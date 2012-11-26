<?php

namespace Kunstmaan\NewRelicBundle\Helper;

/**
 * CustomMetrics
 */
class CustomMetrics
{

    /**
     * @param string  $name  The custom metric path
     * @param integer $value The value
     */
    public function send($name, $value)
    {
        if (extension_loaded("newrelic")) {
            newrelic_custom_metric($name, $value);
        }
    }

}
