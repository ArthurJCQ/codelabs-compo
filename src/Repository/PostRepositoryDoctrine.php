<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;

/** @extends BaseRepositoryDoctrine<Post> */
class PostRepositoryDoctrine extends BaseRepositoryDoctrine implements PostRepositoryInterface
{
    public function __construct(protected EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Post::class);
    }

    /** @return array<Post> */
    public function findPostsAboutPhp(): array
    {
        // Whatever...
        return [];
    }
}
