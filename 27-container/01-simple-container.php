<?php

header('Content-Type: text/plain');

class PostsRepository {
    public function __construct
    (
        private string $a,
        private string $b
    )
    {}
}

class PostsController {
    public function __construct
    (
        private PostsRepository $postRepository
    )
    {}
}

/*
$postRepository = new PostsRepository('A','B');
$postController = new PostsController($postRepository);
*/

class Container {
    public function getPostsRepository(): PostsRepository{
        return new PostsRepository('A','B');
    }

    public function getPostsContoller(): PostsController{
        $postRepository = $this->getPostsRepository();
        return new PostsController($postRepository);
    }
}

$container = new Container();
$postRepository = $container->getPostsRepository();
var_dump($postRepository);

$postsController = $container->getPostsContoller();
var_dump($postsController);