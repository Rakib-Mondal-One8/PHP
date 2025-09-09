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
    private array $instances = [];
    public function getPostsRepository(): PostsRepository{
        if(empty($this->instances['postRepository'])){
            $this->instances['postRepository'] = new PostsRepository('A','B');
        }
        return $this->instances['postRepository'];
    }

    private PostsController $postsController;
    public function getPostsContoller(): PostsController{
        if(empty($this->instances['postController'])){
            $postRepository = $this->getPostsRepository();
            $this->instances['postController'] = new PostsController($postRepository);
        }
        return $this->instances['postController'];  
    }
}

$container = new Container();
$postRepository = $container->getPostsRepository();
var_dump($postRepository);

$postsController = $container->getPostsContoller();
var_dump($postsController);

$postsController2 = $container->getPostsContoller();
var_dump($postsController);