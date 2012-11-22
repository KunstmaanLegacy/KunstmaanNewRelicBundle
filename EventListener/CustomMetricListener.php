<?php

namespace Kunstmaan\NewRelicBundle\EventListener;

use Kunstmaan\NewRelicBundle\Event\CustomMetricEvent;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * CustomMetricListener
 */
class CustomMetricListener
{

    /**
     * @param CustomMetricEvent $event
     */
    public function sendCustomMetric(CustomMetricEvent $event)
    {
        if (extension_loaded("newrelic")) {
            newrelic_custom_metric($event->getName(), $event->getValue());
        }
    }
}
