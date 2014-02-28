<?php
    /**
    *An entity representing a user
    *@author Leonard Breitkopf
    */
    class User {
        /**
        *The user's id.
        *
        *@var int
        */
        public $id;
        /**
        *The user's username.
        *
        *@var string
        */
        public $Username;
        /**
        *The user's full and real name.
        *
        *@var string
        */
        public $Fullname;
        /**
        *A value representing the user's verification state.
        *
        *@var string
        */
        public $Mail;
        /**
        *This optional value represents the user's password.
        *
        *@var string
        */
        public $Password;
        /**
        *A value representing the user's verification state.
        *
        *@var bool
        */
        public $Verified;
        
        /**
        *The constructor, used to automatically set-up the entity object.
        *
        *@param int $id The user's id.
        *@param string $Username The user's username.
        *@param string $Fullname The user's real and full name.
        *@param string $Mail The user's e-mail address.
        *@param bool $Verified A value representing the user's verification state.
        *@param string [$password = ''] This optional parameter represents the user's password.
        *
        *@access public
        */
        public function __construct($id, $Username, $Fullname, $Mail, $Verified, $Password = "") {
            $this->id = $id;
            $this->Username = $Username;
            $this->Fullname = $Fullname;
            $this->Mail = $Mail;
            $this->Password = $Password;
            $this->Verified = $Verified;
        }
    }

    /**
    *An entity representing a product
    *@author Leonard Breitkopf
    */
    class Product {
        /**
        *The Product's id.
        *
        *@var int
        */
        public $id;
        /**
        *The products's name.
        *
        *@var string
        */
        public $Name;
        /**
        *A product's description.
        *
        *@var string
        */
        public $Description;
        /**
        *The product's price.
        *
        *@var float
        */
        public $Price;
        /**
        *This is a value representing an object's stock availability.
        *
        *@var bool
        */
        public $Available;

        /**
        *The constructor, used to automatically set-up the entity object.
        *
        *@param int $id The Product's id.
        *@param string $Name The products's name.
        *@param string $Description A product's description.
        *@param float $Price The product's price.
        *@param bool $Available This is a value representing an object's stock availability.
        *
        *@access public
        */
        public function __construct($id, $Name, $Description, $Price, $Available) {
            $this->id = $id;
            $this->Name = $Name;
            $this->Description = $Description;
            $this->Price = $Price;
            $this->Available = $Available;
        }
    }
?>
