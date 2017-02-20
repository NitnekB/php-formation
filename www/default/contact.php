<?php
    class Contact
    {
        // Attributes
        var $id, $last_name, $first_name, $phone;

        // Constructor
        public function __construct($id, $last_name, $first_name, $phone)
        {
            $this->id         = $id;
            $this->last_name  = $last_name;
            $this->first_name = $first_name;
            $this->phone      = $phone;
        }

        // Getter
        public function getId() {
            return $this->id;
        }

        public function getLast_name() {
            return $this->last_name;
        }

        public function getFirst_name() {
            return $this->first_name;
        }

        public function getPhone() {
            return $this->phone;
        }

        // Setter
        public function setId($id) {
            $this->id = $id;
        }

        public function setLast_name($last_name) {
            $this->last_name = $last_name;
        }

        public function setFirst_name($first_name) {
            $this->first_name = $first_name;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }

        // Methods

        /*
         *  Return a string of each data from a contact
         */
        public function to_string() {
            return $this->id . " " . $this->last_name . " " . $this->first_name . " " . $this->phone . "<br />";
        }

        /*
         *  Create a special view for a contact
         */
        public function viewHtml() {
            $stars = "**************";

            echo $stars . "FICHE CLIENT -- Id = " . $this->id . $stars . "<br />";
            echo "Name = " . $this->last_name . "<br />";
            echo "Firstname = " . $this->first_name . "<br />";
            echo "Phone = " . $this->phone . "<br />";
            echo $stars . $stars . $stars . "<br />";
        }

        /*
         *  Create a file by contact id and register this contact
         */
        public function register() {
            $objData = substr($this->to_string(), 0, -6);
            $filePath = getcwd().DIRECTORY_SEPARATOR."Contact-".strval($this->id).".txt";

            $fp = fopen($filePath, "w");
            fwrite($fp, $objData);
            fclose($fp);
        }
    }
?>