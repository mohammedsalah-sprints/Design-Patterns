<?php

use src\Behavioral\Memento\HistoryStateService;
use src\Behavioral\Memento\TextEditor;

require_once __DIR__.'/../../../vendor/autoload.php';

$textEditor = new TextEditor();
$historyStateService = new HistoryStateService();

$textEditor->setContent('I Love ');
$textEditor->setArr([1,2,3]);
$historyStateService->saveHistoryState($textEditor->save());

$textEditor->setContent('Design patterns ');
$textEditor->setArr([4,5,6]);
$historyStateService->saveHistoryState($textEditor->save());

$textEditor->setContent('Memento ');
$textEditor->setArr([]);


$textEditor->restore($historyStateService->undo($textEditor->save()));
$textEditor->restore($historyStateService->undo($textEditor->save()));
print_r($textEditor->restore($historyStateService->redo($textEditor->save())));
