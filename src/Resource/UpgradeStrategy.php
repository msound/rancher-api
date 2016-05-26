<?php

namespace Mauchede\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;
use Mauchede\RancherApi\Resource\InServiceUpgradeStrategy;

class UpgradeStrategy extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'inServiceUpgradeStrategy';
    }

    /**
     * @var \Mauchede\RancherApi\Resource\InServiceUpgradeStrategy
     *
     * @Type("Mauchede\RancherApi\Resource\InServiceUpgradeStrategy")
     */
    protected $inServiceStrategy;

    /**
     * @return \Mauchede\RancherApi\Resource\InServiceUpgradeStrategy
     */
    public function getInServiceStrategy()
    {
        return $this->inServiceStrategy;
    }

    /**
     * @param \Mauchede\RancherApi\Resource\InServiceUpgradeStrategy $inServiceStrategy
     */
    public function setInServiceStrategy($inServiceStrategy)
    {
        $this->inServiceStrategy = $inServiceStrategy;
    }

}
