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

class items {
	/**
	 * this is the itemId, here we assign the items identification number as the items-table primary key
	 */
	private $itemId;

	/**
	 * this forms the basis for the items foreign key, will ultimately be used to keep track of whose items are whose
	 */
	private $itemProfileId;

	/**
	 * name of the users item: what is it
	 */
	private $itemName;

	/**
	 * price of the users item
	 */
	private $itemPrice;

	/**
	 * description of the users item
	 */
	private $itemDes;
}


/**
 * accessor method for itemId
 *
 * @return int value of itemId
 **/
public
function itemId(): int {
	return $this->itemId;
}

/**
 * mutator method for itemId
 *
 * @param int $newItemId new value of itemId
 * @throws \UnexpectedValueException if $newItemId is not an integer
 **/
public
function setItemId(?int $newItemId): void {
	if($newItemId === null) {
		$this->itemeId = null;
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
 * mutator method for itemProfileId
 *
 * @param int $newItemProfileId new value of itemProfileId
 * @throws \UnexpectedValueException if $newItemProfileId is not an integer
 **/
public
function setItemProfileId(?int $newItemProfileId): void {
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
 * @praram string $newItemName
 * @throws \UnexpectedValueException if $newItemName is not a string
 */
	public function getItemName(): string {if($newItemName === false) {
		return $this->itemName;
	}

	/**
	 * mutator method for iemName
	 *
	 * @param string $newItemName new value of itemName
	 * @throws \UnexpectedValueException if $newItemName is not a string
	 **/
	public function setItemName(string $newName) {
		$newName = filter_var$newName, FILTER_SANITIZE_STRING);
		if $newItemName === false) {
			throw(new \UnexpectedValueException("itemName invalid"));
		}
	}

	$this->itemName = $newItemName;


	/**
	 * mutator method for itemPrice
	 *
	 * @param float $newItemPrice
	 * @throws \UnexpectedValueException
	 * @throws \InvalidArgumentException
	 * @throws \RangeException
	 **/
	public function setItemPrice(?float $newItemPrice): void {
		$newItemPrice = filter_var($newItemPrice, FILTER_VALIDATE_FLOAT);
		if($newItemPrice === false);
			throw(new (\UnexpectedValueException("item price invalid"));
	}

		// store item needs to have a price, price can be $0 not null
		if($newItemPrice === null): void {
			$this->itemPrice = null;
			return;

		if( )
			throw (new (\))


		}

	}


}
?>

