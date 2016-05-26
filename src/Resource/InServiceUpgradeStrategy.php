<?php

namespace Mauchede\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;
use Mauchede\RancherApi\Resource\LaunchConfig;

class InServiceUpgradeStrategy extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'inServiceUpgradeStrategy';
    }

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $batchSize;

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $intervalMillis;

    /**
     * @var \Mauchede\RancherApi\Resource\LaunchConfig
     *
     * @Type("Mauchede\RancherApi\Resource\LaunchConfig")
     */
    protected $launchConfig;

    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    protected $startFirst;

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
    }

    /**
     * @return int
     */
    public function getIntervalMillis()
    {
        return $this->intervalMillis;
    }

    /**
     * @param int $intervalMillis
     */
    public function setIntervalMillis($intervalMillis)
    {
        $this->intervalMillis = $intervalMillis;
    }

    /**
     * @return \Mauchede\RancherApi\Resource\LaunchConfig
     */
    public function getLaunchConfig()
    {
        return $this->launchConfig;
    }

    /**
     * @param \Mauchede\RancherApi\Resource\LaunchConfig $launchConfig
     */
    public function setLaunchConfig($launchConfig)
    {
        $this->launchConfig = $launchConfig;
    }

    /**
     * @return boolean
     */
    public function getStartFirst()
    {
        return $this->startFirst;
    }

    /**
     * @param boolean $startFirst
     */
    public function setStartFirst($startFirst)
    {
        $this->startFirst = $startFirst;
    }


}
