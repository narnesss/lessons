<?php


namespace Root;


class AppConfig
{
    private static ?AppConfig $instance = null;
    private CommsManager $commsManager;

    private function __contruct()
    {
        $this->init();
    }

    private function init()
    {
        switch (Settings::$COMMSTYLE) {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;

            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    public static function getInstance(): AppConfig
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }
}