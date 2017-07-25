<?php

/**
 * an exercise to practice php and doc block by coding using simplified etsy user profile
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
			//verify the profileId is an integer
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newprofileId === false) {
			throw(new UnexpectedValueException("profileId is not a valid integer"));
		}

		//convert and store the profileId (saving work)
		$this->profileId = intval($newProfileId);
	}


	/**
	 * accessor method for name
	 *
	 * @return string value of name
	 */
	public function getName() {
		return ($this->name);
	}

	/**
	 * mutator method for name
	 *
	 * @param string $newName new value of name
	 * @throws UnexpectedValueException if $newName is not a string
	 */
	public function setProfileName($newName) {
		//verify the name is a string
		$newName = filter_var($newName, FILTER_SANITIZE_STRING);
		if($newName === false) {
			throw(new UnexpectedValueException("users name is invalid consider new user"));
		}

		//since string no conversion needed, just store name
		$this->name = $newName;
	}


	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 */
	public function getEmail() {
		return ($this->email);
	}

	/**
	 * mutator method for email
	 *
	 * @param string $newEmail new value of email
	 * @throws UnexpectedValueException if $newEmail is not a string
	 */
	public function setEmail($newEmail) {
		//verify Email is valid and secure
		newEmail = filter_var($newEmail, FILTER_VALIDATE_EMAIL);
		if($newEmail === false) {
			throw(new UnexpectedValueException("invalid email is invalid"));
		}

		//convert and store the Email
		$this->email = $newEmail;
	}


	/**
	 * accessor method for hash
	 *
	 * @return string value of hash
	 */
	public function getHash(): string {
		return $this->hash;
	}

	/**
	 * mutator method for hash
	 *
	 * @param string $newHash
	 * @throws \InvalidArgumentException if the hash is not secure
	 * @throws \RangeException if the hash is not 128 characters
	 * @throws \TypeError if profile hash is not a string
	 **/
	public function setHash(string $newHash): void {
		//verify the Hash is properly formatted
		$newHash = trim($newHash);
		$newHash = strtolower($newHash);
		if(empty($newprofileId === true) {
			throw(new \UnexpectedValueException("profile password empty or not secure");
		}

		//enforce that the hash is a string representation of a hexadecimal
		if(!ctype_xdigit($newHash)){
			throw(new\InvalidArgumentException("profile password empty or not secure");
		}

		//enforce that the hash is exaclty 128 characters
		if(strlen($newHash) !==128){
			throw(new \RangeException("profile password empty or not secure");
		}
		//store hash
		$this->hash = $newHash;
	}


	/**
	 * accessor method for salt
	 *
	 * @return string representation of salty hexadecimal
	 */
	public function getSalt(): string {
		return $this->salt;
	}

	/**
	 * mutator method for salt
	 *
	 * @param string $newSalt
	 * @throws \InvalidArgumentException if the salt is not secure
	 * @throws \RangeException if the salt is not 64 characters
	 * @throws \TypeError if profile salt is not a string
	 */
	public function setSalt(string $newSalt): void {
		//enforce that the salt is properly salty
		$newSalt = trim($newSalt);
		$newSalt = strtolower($newSalt);

		//needs precisely 64 salts
		if(strlen($newSalt) !== 64) {
			throw(new \RangeException("profile salt must be 128 characters");
		}

		//preserve the salt
		$this->salt = $newSalt;
	}

}
?>

