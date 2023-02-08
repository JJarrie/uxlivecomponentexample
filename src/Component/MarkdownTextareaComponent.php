<?php

namespace App\Component;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('markdown_textarea')]
class MarkdownTextareaComponent
{
    use DefaultActionTrait;

    #[LiveProp]
    public string $label;

    #[LiveProp]
    public string $name;

    #[LiveProp(writable: true)]
    public string $value = '';
}
