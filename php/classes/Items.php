<?php

/**
 * an exercise to practice php and doc block by coding a simplified etsy seller store
 *
 * demonstrates a method one could use to record and retrieve etsy-sellers store and item data into an e-commerce database
 * this is a bit overly simplified but could easily be extended/modified for different platforms
 *
 * @author Steven Hebert <shebert2@cnm.edu>
 * @version 1.0.1
 **/

class Items {
	/**
	 * this is the itemId, here we assign the items identification number as the items-table primary key
	 **/
	private $itemId;

	/**
	 * this forms the basis for the items foreign key, will ultimately be used to keep track of whose items are whose
	 **/
	private $itemProfileId;

	/**
	 * name of the users item: what is it
	 **/
	private $itemName;

	/**
	 * price of the users item
	 **/
	private $itemPrice;

	/**
	 * description of the users item
	 **/
	private $itemDes;



	/**
	 * accessor method for itemId
	 *
	 * @return int value of itemId
	 **/
	public function getitemId(): int {
		return $this->itemId;
	}

	/**
	 * mutator method for itemId
	 *
	 * @param int $newItemId new value of itemId
	 * @throws \UnexpectedValueException if $newItemId is not an integer
	 **/
	public function setItemId(?int $newItemId): void {
		if($newItemId === null) {
			$this->itemId = null;
			return;
		}

		//verify itemId is positive
		if($newItemId <= 0) {
			throw(new \RangeException("itemId is not positive"));
		}

		//convert and store the itemId (saving work)
		$this->itemId = intval($newItemId);
	}



	/**
	 * accessor method for itemProfileId
	 *
	 * @return integer value for profileId
	 **/
	public function getItemProfileId(): int {
		return $this->itemProfileId;
	}

	/**
	 * mutator method for itemProfileId
	 *
	 * @param int $newItemProfileId new value of itemProfileId
	 * @throws \UnexpectedValueException if $newItemProfileId is not an integer
	 **/
	public function setItemProfileId(?int $newItemProfileId): void {
		if($newItemProfileId === null) {
			$this->itemProfileId = null;
			return;
		}

		//verify itemProfileId is positive
		if($newItemProfileId <= 0) {
			throw(new \RangeException("itemProfileId is not positive"));
		}

		//convert and store the itemProfileId (saving work)
		$this->itemProfileId = intval($newItemProfileId);
	}



	/**
	 * accessor method for itemName
	 *
	 * @return string value for the name of the item
	 **/
	public function getItemName(): string {
		return $this->itemName;
	}

	/**
	 * mutator method for itemName
	 *
	 * @param string $newItemName new value of itemName
	 * @throws \UnexpectedValueException if $newItemName is not a string
	 **/
	public function setItemName(string $newItemName): void {
		$newItemName = filter_var($newItemName, FILTER_SANITIZE_STRING);
		if($newItemName === false) {
			throw(new \UnexpectedValueException("itemName invalid"));
		}

		$this->itemName = $newItemName;
	}



	/**
	 * accessor method for itemPrice
	 *
	 * @return float value for items price
	 **/
	public function getItemPrice(): float {
		return($this->itemPrice);
	}

	/**
	 * mutator method for itemPrice
	 *
	 * @param float $newItemPrice
	 * @throws \TypeError if item price is not a float
	 * @throws \RangeException price of item must be positive
	 **/
	public function setItemPrice(float $newItemPrice): void {
		//checks that price is greater than or equal to free
		if($newItemPrice < 0) {
			throw(new \RangeException("item price must be above $0.00"));
		}

		//checks that price type is a float
		$newItemPrice = filter_var($newItemPrice, FILTER_VALIDATE_FLOAT);

		//this converts and saves the items price
		$this->itemPrice = $newItemPrice;
	}



	/**
	 * accessor method for itemDes
	 *
	 * @return string value for description of the item
	 **/
	public function getItemDes(): string {
		return $this->itemDes;
	}

	/**
	 * mutator method for itemDes
	 *
	 * @param string $newItemDes new value of itemDes
	 * @throws \UnexpectedValueException if $newItemDes is not a string
	 **/
	public function setItemDes(string $newItemDes): void {
		$newItemDes = filter_var($newItemDes, FILTER_SANITIZE_STRING);
		if($newItemDes === false) {
			throw(new \UnexpectedValueException("item description is invalid"));
		}

		$this->itemDes = $newItemDes;
	}

}
?>

