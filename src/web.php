<?php

use PhpSlides\Controller\PostsController;

return [
  "post_invoke" => [ PostsController::class],
  "post" => [ PostsController::class, 'Post' ],
];