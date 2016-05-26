<?php

namespace Mauchede\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;
use Mauchede\RancherApi\Resource\AbstractResource;

class LaunchConfig extends AbstractResource
{

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'launchConfig';
    }

    /**
     * @var array
     *
     * @Type("array<string>")
     */
    protected $dataVolumes;

    /**
     * @var array
     *
     * @Type("array<string,string>")
     */
    protected $environment;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $imageUuid;

    /**
     * @var array
     *
     * @Type("array<string,string>")
     */
    protected $labels;

    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    protected $startOnCreate;

    /**
     * @var array
     *
     * @Type("array<string>")
     */
    protected $command;

    /**
     * @return array
     */
    public function getDataVolumes()
    {
        return $this->dataVolumes;
    }

    /**
     * @param $dataVolumes
     * @return $this
     */
    public function setDataVolumes($dataVolumes)
    {
        $this->dataVolumes = $dataVolumes;

        return $this;
    }

    /**
     * @return array
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUuid()
    {
        return $this->imageUuid;
    }

    /**
     * @param $imageUuid
     * @return $this
     */
    public function setImageUuid($imageUuid)
    {
        $this->imageUuid = $imageUuid;

        return $this;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStartOnCreate()
    {
        return $this->startOnCreate;
    }

    /**
     * @param $startOnCreate
     * @return $this
     */
    public function setStartOnCreate($startOnCreate)
    {
        $this->startOnCreate = $startOnCreate;

        return $this;
    }

    /**
     * @return array
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

}
