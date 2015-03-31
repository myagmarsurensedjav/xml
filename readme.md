Xml ийг хялбаршуулах шоглоход хялбар болгох зорилготой:

## Installation

```js
"require": {
    "selmonal/xml": "v0.0.1"
}
```

## Example

```php

use Selmonal\Xml\Xml;

$xml = new Xml();

// loadFromString, loadFromFile
$xml->loadFromString("<?xml version='1.0' encoding='UTF-8'?>
                <TKKPG>
                    <Request>
                        <Operation>CreateOrder</Operation>
                        <Language>EN</Language>
                    </Request>
                </TKKPG>");

echo $xml->get('Request.Operation'); // CreateOrder
echo $xml->get('Request.Language'); // EN

```