<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class MiniTest extends TestCase
{
    public function testAddPoney()
    {
        // Setup
                $Poneys = new Poneys();

        // Action
        $Poneys->addPoney();

        // Assert
        $this->assertEquals(9, $Poneys->getCount());
    }

}
?>

