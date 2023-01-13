<?php

	class Crud{
		private $db; //private database object

		// constructor to initialize private variable to the database connection
		function __construct($conn){
			$this->db = $conn;
		}

		// function to insert a new record into the attendee database
		public function insertDetails($fname,$lname,$dob,$email,$contact,$speciality,$address,$postcode,$state,$city,$avatar_path){
			try{
				// define sql statement to be executed
				$sql = "INSERT INTO profile_settings (firstname,lastname,dob,email,contact,speciality,address,postcode,state,city,avatar_path) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
				// prepare the sql statement for execution
				$stmt = $this->db->prepare($sql);
				// bind all placeholders to actual values
				$stmt->bindparam('fname',$fname);
				$stmt->bindparam('lname',$lname);
				$stmt->bindparam('dob',$dob);
				$stmt->bindparam('email',$email);
				$stmt->bindparam('contact',$contact);
				$stmt->bindparam('speciality',$speciality);
				$stmt->bindparam('address',$address);
				$stmt->bindparam('postcode',$postcode);
				$stmt->bindparam('state',$state);
				$stmt->bindparam('city',$city);
				$stmt->bindparam('avatar_path',$avatar_path);
				// execute statement
				$stmt->execute();
				return true;
			}
			catch(PDOException $e){

			}
		}
	}

?>