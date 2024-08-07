<?php


namespace src\Behavioral\Memento;
class TextEditorState
{

    private $content;
    private $arr;

    /**
     * @param $content
     */
    public function __construct($content, $arr)
    {
        $this->content = $content;
        $this->arr = $arr;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}