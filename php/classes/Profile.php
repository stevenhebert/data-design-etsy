<?php

/**
 * an exercise to practice php and doc block by coding a simplified etsy user profile
 *
 * demonstrates a method one could use to record and retrieve end-users profile data into an e-commerce database
 * this is a bit overly simplified but could easily be extended/modified for different platforms
 *
 * @author Steven Hebert <shebert2@cnm.edu>
 * @version 1.0.1
 **/

class profile {
	/**
	 * this is the profile id, here we assign the users profile identification number as the primary key
	 */
	private $profileId;

	/**
	 * this is the users given name
	 */
	private $profileName;

	/**
	 * this is the users email
	 */
	private $profileEmail;

	/**
	 * this is the users password hash
	 */
	private $profileHash;

	/**
	 * this is the users password salt
	 */
	private $profileSalt;

	/**
	 * the date that the user registered their account
	 */
	private $profileJoinDate;


	/**
	 * accessor method for profileId
	 *
	 * @return int value of profileId
	 */
	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profileId
	 *
	 * @param int $newProfileId new value of profileId
	 * @throws UnexpectedValueException if $newProfileId is not an integer
	 */
	public function setProfileId($newProfileId) {
		newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newprofileId === false) {
			throw(new UnexpectedValueException("profileId is not a valid integer"));
		}

		//convert and store the profileId
		$this->profileId = intval($newProfileId);
	}


}
?>

