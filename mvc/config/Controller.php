<?php

namespace Config;

class Controller
{
    private string $url;
    private string $urlController;
    private string $urlMethod;
    private array $urlArray;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->urlArray = explode("/", $this->url);

            if (isset($this->urlArray[0]) && isset($this->urlArray[1])) {
                $this->urlController = $this->urlArray[0];
                $this->urlMethod = $this->urlArray[1];
            } else {
                $this->urlController = "erro";
                $this->urlMethod = "index";
            }
        } else {
            $this->urlController = "home";
            $this->urlMethod = "index";
        }
    }

    public function loadPage()
    {
        $classLoad = "\\App\\Controllers\\" . ucwords($this->urlController);
        echo $classLoad ."<br>";
        $classPage = new $classLoad();
        $classPage->index();
    }
}
