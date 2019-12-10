<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;
	
    public function setUp(int $number){
    	$this->count = $number;
    }
    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }
    public function setCount(int $count): void
    {
	$this->count = $count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
	if($this->count < $number)
        {
                throw new Exception('Retirer des poneys');
        }else{
		$this->count -= $number;
	}
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {
	
    }

    public function addPoney(): void
    {
	if($this->capacitePlaces()){
		$this->count++;
	}
    }
    public function capacitePlaces(): bool
    {
	if($this->count == 15){
        	return false;
	}else{
		return true;
	}
    }
    
}
?>
