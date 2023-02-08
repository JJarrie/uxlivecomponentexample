<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


class Post
{
    public ?int $id = null;

    public string $title = '';

    public string $content = '';
}
