<?php

namespace Mauchede\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;

/**
 * Class Environment
 *
 * Represents the rancher resource typed as "environment".
 *
 * @package Mauchede\RancherApi\Resource
 */
class Environment extends AbstractResource
{
    /**
     * @var string
     *
     * @Type("string")
     */
    protected $description;

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
    protected $dockerCompose;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $id;

    /**
     * Gets the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

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
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'environment';
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param $dockerCompose
     * @return $this
     */
    public function setDockerComposer($dockerCompose)
    {
        $this->dockerCompose = $dockerCompose;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

}
