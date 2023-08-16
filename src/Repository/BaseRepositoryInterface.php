<?php

declare(strict_types=1);

namespace App\Repository;

/** @template T of object */
interface BaseRepositoryInterface
{
    /** @param T $object */
    public function store(object $object): void;

    /** @return ?T */
    public function find(int $id): ?object;
}
