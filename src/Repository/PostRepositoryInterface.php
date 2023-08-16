<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;

/** @extends BaseRepositoryInterface<Post> */
interface PostRepositoryInterface extends BaseRepositoryInterface
{
    /** @return array<Post> */
    public function findPostsAboutPhp(): array;
}
