<?php

namespace Kunstmaan\NewRelicBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Kunstmaan\NodeBundle\Entity\HasNodeInterface;
use Kunstmaan\NodeBundle\Entity\Node;
use Kunstmaan\NodeBundle\Entity\NodeVersion;
use Kunstmaan\NodeBundle\Entity\NodeTranslation;

/**
 * CustomMetricEvent
 */
class CustomMetricEvent extends Event
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var integer $value
     */
    protected $value;

    /**
     * @param string  $name  The name
     * @param integer $value The value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

}
