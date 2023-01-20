<?php


namespace Root;


class TextNotifier extends Notifier
{
    public function inform($message): void
    {
        print "Уведомление текстом: {$message}\n";
    }
}