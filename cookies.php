<?php
    require('conn.php');


    class School {
        public $student;
        public $school;

        public function setSchool($name, $school)
        {
            $this->student = $name;
            $this->school = $school;
        }

        public function getSchool()
         {
            return $this->student;
        }

    }

    $firstSchool = new School('Janet Oduleke', 'SQI');
    $firstSchool->getSchool();
?>