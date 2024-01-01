<?php

use PhpSlides\Api;

Api::get("/api/posts");
Api::get("/api/posts/{id}", @Post);