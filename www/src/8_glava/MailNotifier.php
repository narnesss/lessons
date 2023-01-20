<?php


namespace Root;


class MailNotifier extends Notifier
{
    public function inform($message): void
    {
        print "Уведомление почтой: {$message}\n";
    }
}