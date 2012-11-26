<?php

namespace Kunstmaan\NewRelicBundle\Helper;

use Symfony\Component\EventDispatcher\Event;

use Kunstmaan\NodeBundle\Entity\HasNodeInterface;
use Kunstmaan\NodeBundle\Entity\Node;
use Kunstmaan\NodeBundle\Entity\NodeVersion;
use Kunstmaan\NodeBundle\Entity\NodeTranslation;

/**
 * CustomMetricEvent
 */
class CustomMetrics extends Event
{

    /**
     * @param string  $name  The custom metric path
     * @param integer $value The value
     */
    public function send($name, $value)
    {
        if (extension_loaded("newrelic")) {
            newrelic_custom_metric($event->getName(), $event->getValue());
        }
    }

}
