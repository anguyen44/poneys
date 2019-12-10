<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    private $poneys;
    /**
     * @dataProvider additionProvider
     */
    public function testRemovePoneyFromField(int $number)
    {	$poneys = new Poneys();

        $this->expectException(Exception::class);
	
	$poneys->removePoneyFromField($number);
    }

    public function testAddPoney()
    {
	// Setup
	        $Poneys = new Poneys();

        // Action
        $Poneys->addPoney();

        // Assert
        $this->assertEquals(9, $Poneys->getCount());
    }
    public function additionProvider()
    {
        return [
            [50]
        ];
    }
    
    public function test_getNames(){
    	$poney = new Poneys();
	$name = ['Rémi','Julien','Flavien','Mathieu'];
	
	$poney = $this->getMockBuilder('Poneys')->getMock();
	$poney->expects($this->exactly(1))->method('getNames')->willReturn($name);
	$this->assertEquals($name,$poney->getNames());
    }
	
    public function test_capacitePlaces(){
    	$poney1 = new Poneys();
	$testDisponible = $poney1->capacitePlaces();
	$this->assertTrue($testDisponible);
    }
    public function setUp(): void
    {
    	$this->poneys = new Poneys;
	$this->poneys->setCount(8);
	print(tailleChamp);
    }
    public function tearDown(): void
    {
	$this->poneys = null;
    }
}
?>
