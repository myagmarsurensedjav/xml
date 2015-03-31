<?php namespace Selmonal\Xml;

class Xml {

    /**
     * @var SimpleXMLElement
     */
    private $_xml;

    /**
     * @param $xmlString
     */
    public function loadFromString($xmlString)
    {
        $this->_xml = simplexml_load_string($xmlString);
    }

    /**
     * @param $filePath
     */
    public function loadFromFile($filePath)
    {
        $content = file_get_contents($filePath);

        $this->loadFromString($content);
    }

    /**
     * @param $path
     * @return string
     */
    public function get($path)
    {
        $parts = explode('.', $path);

        $value = $this->_xml;

        foreach($parts as $property)
        {
            $value = $value->{$property};
        }

        return (string) $value;
    }

} 