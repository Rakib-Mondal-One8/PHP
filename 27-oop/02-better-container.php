<?php

header('Content-Type: text/plain');

class PostsRepository {
    public function __construct
    (
        private string $a,
        private string $b
    )
    {
        var_dump("Post Repository has been constructed...\n");  
    }
}
class PostsController {
    public function __construct
    (
        private PostsRepository $postRepository
    )
    {}
}
class Container {
    private PostsRepository $postRepository;
    public function getPostsRepository(): PostsRepository{
        if(empty($this->postRepository)){
            $this->postRepository = new PostsRepository('A','B');
        }
        return $this->postRepository;
    }

    private PostsController $postsController;
    public function getPostsContoller(): PostsController{
        if(empty($this->postsController)){
            $postRepository = $this->getPostsRepository();
            $this->postsController = new PostsController($postRepository);
        }
        return $this->postsController;
    }
}

$container = new Container();
$postRepository = $container->getPostsRepository();
var_dump($postRepository);

$postsController = $container->getPostsContoller();
var_dump($postsController);

$postsController2 = $container->getPostsContoller();
var_dump($postsController);