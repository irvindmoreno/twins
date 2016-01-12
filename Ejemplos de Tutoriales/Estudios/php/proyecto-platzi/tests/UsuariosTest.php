<?php
class UsuariosTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function probarConstructor()
    {
        $usuario= new \platziPHP\Domain\Usuarios('yes@hotmail.com',1234);
        $this->assertInstanceOf(\platziPHP\Domain\Usuarios::class, $usuario);

    }

}