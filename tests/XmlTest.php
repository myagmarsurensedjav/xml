<?php namespace Selmonal\Xml;

use PHPUnit_Framework_TestCase;

class XmlTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function it_loads_from_string()
    {
        $reader = new Xml();

        $reader->loadFromString("<?xml version='1.0' encoding='UTF-8'?>
                <TKKPG>
                    <Request>
                        <Operation>CreateOrder</Operation>
                        <Language>EN</Language>
                    </Request>
                </TKKPG>");

        $this->assertEquals('CreateOrder', $reader->get('Request.Operation'));
        $this->assertEquals('EN', $reader->get('Request.Language'));
        $this->assertEquals('', $reader->get('Request.Empty'));
    }

    /** @test */
    public function it_loads_from_file()
    {
        $reader = new Xml();

        $reader->loadFromFile(__DIR__ . '/files/test1.xml');
        $this->assertEquals('foo', $reader->get('Request.Operation'));

        $reader->loadFromFile(__DIR__ . '/files/test2.xml');
        $this->assertEquals('bar', $reader->get('Request.Operation'));
    }

} 