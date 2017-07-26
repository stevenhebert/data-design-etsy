<?php

namespace Edu\Cnm\EtsyDataDesign;

/**
 * an exercise to practice php and doc block by coding using simplified etsy user profile
 *
 * demonstrates a method one could use to record and retrieve end-users profile data into an e-commerce database
 * this is a bit overly simplified but could easily be extended/modified for different platforms
 *
 * @author Steven Hebert <shebert2@cnm.edu>
 * @version 1.0.1
 **/
class Profile implements \jsonSerializable {
	/**
	 * this is the profile id, here is assigned the users profile identification number
	 * this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;

	/**
	 * this is the users given name
	 * @var string $name
	 */
	private $name;

	/**
	 * this is the users email
	 * @var string email
	 **/
	private $email;

	/**
	 * this is the users password hash
	 * @var $hash
	 **/
	private $hash;

	/**
	 * this is the users password salt
	 * @var $salt
	 **/
	private $salt;

	/**
	 * the date that the user registered their account
	 * @var $joinDate
	 **/
	private $joinDate;


	/**
	 * constructor for this profile
	 *
	 * @param string $newName new value of name
	 * @param string $newEmail new value of email
	 * @param \DateTime|string|null $newJoinDate users registration date as a DateTime object, string, or null if NOW()
	 * @param string $newHash
	 * @param string $newSalt
	 * @param int $newProfileId new value of profileId
	 * @throws \UnexpectedValueException if $newName is not a string
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values lesser/greater than specified
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __contructor(?string $newName, ?string $newEmail, ?string $newJoinDate, ?string $newHash,
										  ?string $newSalt, ?int $newProfileId) {
		try {
			$this->setName($newName);
			$this->setEmail($newEmail);
			$this->setJoinDate($newJoinDate);
			$this->setHash($newHash);
			$this->setSalt($newSalt);
			$this->setProfileId($newProfileId);
		} catch(\InvalidArgumentException |\RangeException |\TypeError $exception) {
//determine what exception type was thrown
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}


	/**
	 * accessor method for name
	 *
	 * @return string value of name
	 **/
	public function getName(): string {
		return $this->name;
	}

	/**
	 * mutator method for name
	 *
	 * @param string $newName new value of name
	 * @throws \UnexpectedValueException if $newName is not a string
	 **/
	public function setName(string $newName): void {
		$newName = filter_var($newName, FILTER_SANITIZE_STRING);
		if($newName === false) {
			throw(new \UnexpectedValueException("name invalid consider new user"));
		}

//since string no conversion needed, just store name
		$this->name = $newName;
	}


	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 **/
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * mutator method for email
	 *
	 * @param string $newEmail new value of email
	 * @throws \InvalidArgumentException if $newEmail is not valid or not secure
	 * @throws \RangeException if $newEmail is > 128 characters
	 * @throws \TypeError if $newEmail is not a string
	 **/
	public function setEmail(string $newEmail): void {
//verify Email is valid and secure
		$newEmail = trim($newEmail);
		$newEmail = filter_var($newEmail, FILTER_VALIDATE_EMAIL);
		if(empty($newEmail) === true) {
			throw(new \InvalidArgumentException("invalid email is invalid"));
		}

//will it fit?
		if(strlen($newEmail) > 128) {
			throw(new \RangeException("email is too many characters"));
		}

//store the email
		$this->email = $newEmail;
	}


	/**
	 * accessor method for joinDate
	 *
	 * @return \DateTime user registered
	 **/
	public function getJoinDate(): \DateTime {
		return ($this->joinDate);
	}

	/**
	 * mutator method for joinDate
	 *
	 * @param \DateTime|string|null $newJoinDate users registration date as a DateTime object, string, or null if NOW()
	 * @throws \InvalidArgumentException if $newJoinDate is not a valid object or string\
	 * @throws \RangeException if $newJoinDate is an invalid date
	 **/
	public function setJoinDate($newJoinDate = null): void {
//if date is null will use current date and time
		if($newJoinDate === null) {
			$this->joinDate = new \DateTime();
			return;
		}

//store the date using the ValidateDate trait
		try {
			$newJoinDate = self::validateDateTime($newJoinDate);
		} catch(\InvalidArgumentException | \RangeException $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		$this->joinDate = $newJoinDate;
	}


	/**
	 * accessor method for hash
	 *
	 * @return string value of hash
	 **/
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
		if(empty($newHash === true)) {
			throw(new \UnexpectedValueException("profile password empty or not secure"));
		}

//enforce that the hash is a string representation of a hexadecimal
		if(!ctype_xdigit($newHash)) {
			throw(new\InvalidArgumentException("profile password empty or not secure"));
		}

//enforce that the hash is exaclty 128 characters
		if(strlen($newHash) !== 128) {
			throw(new \RangeException("profile password empty or not secure"));
		}
//store hash
		$this->hash = $newHash;
	}


	/**
	 * accessor method for salt
	 *
	 * @return string representation of salty hexadecimal
	 **/
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
	 **/
	public function setSalt(string $newSalt): void {
//enforce that the salt is properly salty
		$newSalt = trim($newSalt);
		$newSalt = strtolower($newSalt);

//needs precisely 64 salts
		if(strlen($newSalt) !== 64) {
			throw(new \RangeException("profile salt must be 128 characters"));
		}

//preserve the salt
		$this->salt = $newSalt;
	}


	/**
	 * accessor method for profileId
	 *
	 * @return int value of profileId
	 **/
	public function getProfileId(): int {
		return $this->profileId;
	}

	/**
	 * mutator method for profileId
	 *
	 * @param int $newProfileId new value of profileId
	 * @throws \UnexpectedValueException if $newProfileId is not an integer
	 **/
	public function setProfileId(?int $newProfileId): void {
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}

//verify profileId is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profileId is not positive"));
		}

//convert and store the profileId (saving work)
		$this->profileId = intval($newProfileId);
	}


	/**
	 * Specify data which should be serialized to JSON
	 * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 * @since 5.4.0
	 */
	function jsonSerialize() {
		// TODO: Implement jsonSerialize() method.
	}
}

?>
