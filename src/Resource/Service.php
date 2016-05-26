<?php

namespace Mauchede\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;
use Mauchede\RancherApi\Resource\LaunchConfig;

/**
 * Service represents a Rancher resource typed as "service".
 *
 * @author Morgan Auchede <morgan.auchede@gmail.com>
 */
class Service extends AbstractResource
{
    /**
     * @var string
     *
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $environmentId;

    /**
     * @var integer
     *
     * @Type("integer")
     */
    protected $scale;

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
    protected $startOnCreate;

    /**
     * Gets the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->environmentId;
    }

    /**
     * @param $environmentId
     * @return $this
     */
    public function setEnvironmentId($environmentId)
    {
        $this->environmentId = $environmentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @param $scale
     * @return $this
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * @return LaunchConfig
     */
    public function getLaunchConfig()
    {
        return $this->launchConfig;
    }

    /**
     * @param $launchConfig
     * @return $this
     */
    public function setLaunchConfig($launchConfig)
    {
        $this->launchConfig = $launchConfig;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStartOnCreate()
    {
        return $this->startOnCreate;
    }

    /**
     * @param boolean $startOnCreate
     * @return $this
     */
    public function setStartOnCreate($startOnCreate)
    {
        $this->startOnCreate = $startOnCreate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'service';
    }
}
