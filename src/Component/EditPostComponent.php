<?php

namespace App\Component;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('edit_post')]
class EditPostComponent extends AbstractController
{
    use DefaultActionTrait;

    #[LiveProp(writable: true, exposed: ['title', 'content'])]
    public Post $post;

    #[LiveAction]
    public function save(): void
    {
    }
}
