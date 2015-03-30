<?php

use Rodrigore\SIIChile\Consulta;

class ConsultaTest extends PHPUnit_Framework_TestCase
{

    public function testSIISuccessfully()
    {
        $consulta = new Consulta('76.170.582-2');

        $result = $consulta->sii();

        $this->assertEquals(2, count($result));
        $this->assertNotEmpty($result['razonSocial']);
        $this->assertGreaterThan(0, count($result['actividades']));
    }

    /**
     * @expectedException Rodrigore\SIIChile\Exceptions\InvalidRutException
     */
    public function testThrowInvalidRutExceptionWhenRutIsInvalid()
    {
        $consulta = new Consulta('76.170.582-1');

        $result = $consulta->sii();
    }
}
