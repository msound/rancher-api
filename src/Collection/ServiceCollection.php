<?php

namespace Mauchede\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Mauchede\RancherApi\Resource\Service;
use Mauchede\RancherApi\Exception\ResourceNotFoundException;

/**
 * ServiceCollection represents a Rancher collection typed as "service".
 *
 * @author Morgan Auchede <morgan.auchede@gmail.com>
 */
class ServiceCollection extends AbstractCollection
{
    /**
     * @var Service[]
     *
     * @Type("array<Mauchede\RancherApi\Resource\Service>")
     */
    private $data;

    /**
     * {@inheritdoc}
     *
     * @return Service[]
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     *
     * @return Service
     */
    public function get($id)
    {
        foreach ($this->data as $host) {
            if ($host->getId() === $id) {
                return $host;
            }
        }

        throw new ResourceNotFoundException(sprintf('Service "%s" not found.', $id));
    }

    /**
     * Finds a service by name.
     *
     * @param string $name
     *
     * @return Service
     * @throws ResourceNotFoundException
     */
    public function find($name)
    {
        foreach ($this->data as $service) {
            if ($service->getName() === $name) {
                return $service;
            }
        }

        throw new ResourceNotFoundException(sprintf('Service "%s" not found.', $name));
    }

    /**
     * Adds a new service
     *
     * @param Service $service
     *
     * @return $this
     */
    public function add(Service $service)
    {
        $this->client->post($this->getUri(), $service, array());

        return $this->reload();
    }
}
