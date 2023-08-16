<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

/** @extends BaseRepositoryDoctrine<User> */
class UserRepositoryDoctrine extends BaseRepositoryDoctrine implements UserRepositoryInterface
{
    public function __construct(protected EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, User::class);
    }
}
