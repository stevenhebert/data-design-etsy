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
?>

