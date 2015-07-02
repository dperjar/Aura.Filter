<?php
namespace Aura\Filter\Rule\Sanitize;

class WordTest extends AbstractSanitizeTest
{
    public function providerTo()
    {
        return array(
            array(array(), false, array()),
            array('abc _ 123 - ,./', true, 'abc_123'),
        );
    }
}