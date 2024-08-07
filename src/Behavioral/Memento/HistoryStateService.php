<?php


namespace src\Behavioral\Memento;

class HistoryStateService
{
    private $prevStates;
    private $nextStates;

    /**
     * @param $prevStates
     * @param $nextStates
     */
    public function __construct()
    {
        $this->prevStates = [];
        $this->nextStates = [];
    }

    public function saveHistoryState(TextEditorState $state)
    {
        $this->prevStates[] = $state;
    }

    public function undo(TextEditorState $state)
    {
        $this->nextStates[] = $state;

        if (count($this->prevStates)) {
            return array_pop($this->prevStates);
        }

        return null;
    }

    public function redo(TextEditorState $state)
    {
        $this->prevStates[] = $state;

        if (count($this->nextStates)) {
            return array_pop($this->nextStates);
        }

        return null;
    }
}