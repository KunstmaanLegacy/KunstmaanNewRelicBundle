<?php

namespace Kunstmaan\NewRelicBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class TransactionNameListener
{

    public function setTransactionName(FilterControllerEvent $event)
    {
        if (function_exists("newrelic_name_transaction") &&
                $event->getRequestType() == HttpKernelInterface::MASTER_REQUEST) {
            $controller = $event->getRequest()->attributes->get('_controller');
            $arr = array_reverse(explode('\\', $controller));
           newrelic_name_transaction($arr[0]);
        }
    }
}
