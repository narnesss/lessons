<?php


namespace Root;


class Conf
{
    private \SimpleXMLElement $xml;
    private \SimpleXMLElement $lastmatch;

    public function __construct(private string $file)
    {
        if (!file_exists($file)) {
            throw new FileException("file '$file' does not exist");
        }
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        if (!is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }
        $matches = $this->xml->xpath("/conf");
        if (!count($matches)) {
            throw new ConfException("could not find root element: conf");
        }
    }

    public function write(): void
    {
        if (!is_writeable($this->file)) {
            throw new FileException("file '{$this->file}' is not writeable");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get(string $str): ?string
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches)) {
            $this->lstmatch = $matches[0];
            return (string)$matches[0];
        }
    }

    public function set(string $key, string $value): void
    {
        if (!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}