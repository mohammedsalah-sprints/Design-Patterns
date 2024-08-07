<?php


namespace src\Behavioral\Memento;

class TextEditor
{
    private $content;
    private $arr;

    /**
     * @return array
     */
    public function getArr()
    {
        return $this->arr;
    }

    /**
     * @param array $arr
     */
    public function setArr($arr)
    {
        $this->arr = $arr;
    }

    /**
     * @param $content
     */
    public function __construct()
    {
        $this->content = '';
        $this->arr = [];
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

    public function restore(TextEditorState $textEditorState)
    {
        $state = $textEditorState->getContent();

        return $state;
    }

    public function save()
    {
        return new TextEditorState($this->content, $this->arr);
    }
}