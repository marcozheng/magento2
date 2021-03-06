<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Framework\Config\Converter;

class DomTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $sourceFile
     * @param string $resultFile
     * @dataProvider convertDataProvider
     */
    public function testConvert($sourceFile, $resultFile)
    {
        $dom = new \DOMDocument();
        $dom->loadXML(file_get_contents(__DIR__ . "/../_files/converter/dom/{$sourceFile}"));
        $resultFile = include __DIR__ . "/../_files/converter/dom/{$resultFile}";

        $converterDom = new Dom();
        $this->assertEquals($resultFile, $converterDom->convert($dom));
    }

    public function convertDataProvider()
    {
        return [
            ['cdata.xml', 'cdata.php'],
            ['attributes.xml', 'attributes.php',],
        ];
    }
}
