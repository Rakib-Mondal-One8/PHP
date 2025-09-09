<?php

header('Content-Type: text/plain');

class PostsRepository
{
    public function __construct(
        private string $a,
        private string $b
    ) {
        var_dump("Post Repository has been constructed...\n");
    }
}
class PostsController
{
    public function __construct(
        private PostsRepository $postRepository
    ) {}
}
class Container
{
    private array $instances = [];

    public function get($what)
    {
        if ($what === 'postsController') {
            if (empty($this->instances['postsController'])) {
                $postRepository = $this->get('postsRepository');
                $this->instances['postsController'] = new PostsController($postRepository);
            }
            return $this->instances['postsController'];
        }
        else if ($what === 'postsRepository') {
            if (empty($this->instances['postsRepository'])) {
                $this->instances['postsRepository'] = new PostsRepository('A', 'B');
            }
            return $this->instances['postsRepository'];
        }
    }

}

$container = new Container();
$postRepository = $container->get('postsRepository');
var_dump($postRepository);

$postsController = $container->get('postsController');
var_dump($postsController);

$postsController2 = $container->get('postsController');
var_dump($postsController);
