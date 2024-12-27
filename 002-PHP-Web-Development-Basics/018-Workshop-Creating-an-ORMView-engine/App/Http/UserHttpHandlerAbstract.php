<?php

namespace App\Http;


use Core\DataBinderInterface;
use Core\TemplateInterface;

abstract class UserHttpHandlerAbstract
{
    /**
     * @var DataBinderInterface
     */
    protected $dataBinder;
    /**
     * @var TemplateInterface
     */
    private $template;

    public function __construct(TemplateInterface   $template,
                                DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }

    public function render(string $templateName, $data = null, $error = null): void
    {
        $this->template->render($templateName, $data, $error);
    }

    public function redirect(string $url): void
    {
        header("Location: $url");
    }

}