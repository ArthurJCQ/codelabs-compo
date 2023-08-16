<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route(path: '/', name: 'index', methods: [Request::METHOD_GET])]
    public function index(PostRepositoryInterface $postRepository): Response
    {
        $post = (new Post())->setTitle('Title')->setContent('Content');

        // Try to store a user instead to get PHPStan error.
        $postRepository->store($post);

        // Flush ...

        return new Response();
    }
}
