<?php

namespace App\Repository;

class CommandRepository extends BaseNeo4jRepository
{
    public function test()
    {
        $query = $this
            ->entityManager
            ->createQuery('
            MATCH (a:AI)
            RETURN a
            ');

        $results = $query->getResult();
        $results = array_shift($results);

        return $results;
    }
}