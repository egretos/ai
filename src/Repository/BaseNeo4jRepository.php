<?php

namespace App\Repository;

use GraphAware\Neo4j\Client\ClientInterface;
use GraphAware\Neo4j\OGM\EntityManager;
use GraphAware\Neo4j\OGM\EntityManagerInterface;

/**
 * Class BaseNeo4jRepository
 * @package App\Repository
 *
 * @property ClientInterface $client
 * @property EntityManager $entityManager
 */
abstract class BaseNeo4jRepository implements IRepository
{
    protected $client;
    protected $entityManager;

    public function __construct(ClientInterface $client, EntityManagerInterface $entityManager)
    {
        $this->client = $client;
        $this->entityManager = $entityManager;
    }
}