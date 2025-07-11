<?php 
 declare(strict_types=1);

 namespace oscanguera\exercici_2\tests;
 //usuario/directorio/directorioTests
 use PHPUnit\Framework\TestCase;
 use oscanguera\exercici_2\grausChecker;
 // usuario/directorio/clase
 /*
 Poner atención a los nombres de clase, el descuidarlo da problemas...
 */
 
 class testGrausChecker extends TestCase {
    //decirle el método que voy a utilizar si no sale una alerta de riesgo
     /**
     * @covers oscanguera\exercici_1\grausChecker::CalcularNota
     */
     public function testPrimeraDivision(): void
     {
         $graus = new GrausChecker();
         $isPrimera = $graus->CalcularNota(61);
         $notPrimera = $graus->CalcularNota(47);
         $this->assertEquals("Está en primera división", $isPrimera);
         $this->assertNotEquals("Está en primera división", $notPrimera);
     }
     /**
     * @covers oscanguera\exercici_1\grausChecker::CalcularNota
     */
     public function testSegundaDivision(): void
     {
         $graus = new GrausChecker();
         $isSegunda = $graus->CalcularNota(47);
         $notSegunda = $graus->CalcularNota(40);

         $this->assertEquals("Está en segunda división", $isSegunda);
         $this->assertNotEquals("Está en segunda división", $notSegunda);
     }
     /**
     * @covers oscanguera\exercici_1\grausChecker::CalcularNota
     */
     public function testTerceraDivision(): void
     {
         $graus = new GrausChecker();
         $isTercera = $graus->CalcularNota(40);
         $notTercera = $graus->CalcularNota(30);

         $this->assertEquals("Está en tercera división", $isTercera);
         $this->assertNotEquals("Está en tercera división", $notTercera);
     }
     /**
     * @covers oscanguera\exercici_1\grausChecker::CalcularNota
     */
     public function testNoAprobado(): void
     {
         $graus = new GrausChecker();
         $isSuspendido = $graus->CalcularNota(30);

         $this->assertEquals("No está aprobado", $isSuspendido);
     }
 }
 
?>
