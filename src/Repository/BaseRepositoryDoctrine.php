<?php

declare(strict_types=1);

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/** @template T of object */
abstract class BaseRepositoryDoctrine
{
    /** @var ObjectRepository<T> */
    protected ObjectRepository $repository;

    /** @param class-string<T> $className */
    public function __construct(protected EntityManagerInterface $entityManager, string $className)
    {
        $this->repository = $this->entityManager->getRepository($className);
    }

    /** @param T $object */
    public function store(object $object): void
    {
        $this->entityManager->persist($object);
    }

    /** @return ?T */
    public function find(int $id): ?object
    {
        return $this->repository->find($id);
    }
}
