<!--Name: Robyne Felton
Class: IST256.001
Assignment: Lab 2
Date Created: [09/25/2019]
Filename: IST256001_Lab2_FeltonRobyne.php
-->

<?php

    class Student{
      public $firstName = "Robyne";//students first name
      public $lastName = "Felton";//students last name
      public $major = "Information Science and Technology: Design and Development Option<z";//students major
      public $class = "IST 256";//class

      // array to hold the assignments and grades
      public $assignments = array(
        array("Homework Assignments",100),
        array("Mid-Term Exam",85),
        array("Final Exam",92)
      );

      //function to take in the array and calculate the rest the average of the grades
      function calcGrade(){
        $average = 0;
        for ($i = 0; $i < sizeof($this->assignments); $i++) {
          $average += $this->assignments[$i][1];
        }
        $average /= sizeof($this->assignments);
        $average1 = number_format($average,1);
         return $average1;

      }
      //takes in the average and compares it in an if statement
      function letterCalc(){
            $letterGrade = "";
            $average = $this->calcGrade();
            if($average>=93.0){
                $letterGrade = "A";
            }
            elseif($average<=93.0 && $average>=90.0){
                $letterGrade = "A-";
            }
            elseif($average<90 && $average>=87){
                $letterGrade = "B+";
            }
            elseif($average<87 && $average>=84){
                $letterGrade = "B";
            }
            elseif($average<84 && $average>=80){
                $letterGrade = "B-";
            }
            elseif($average<80 && $average>=75){
                $letterGrade = "C+";
            }
            elseif($average<75 && $average>=70){
                $letterGrade = "C";
            }
            elseif($average<70 && $average>=60){
                $letterGrade = "D";
            }
            else{
                $letterGrade = "F";
            }
          return $letterGrade;
      }
      //function to display all of the information in the student class in our webpage
      function displayThings(){
        echo "Name: " . $this->firstName . " " . $this->lastName ."<br>";
        echo "Major: " . $this->major ." <br>";
        echo "<br>Class:" .$this->class." <br>";
        echo "Assignment 1: " .$this->assignments[0][0]."(".$this->assignments[0][1].")<br>";
        echo "Assignment 2: " .$this->assignments[1][0]."(".$this->assignments[1][1].")<br>";
        echo "Assignment 3: " .$this->assignments[2][0]."(".$this->assignments[2][1].")<br>";
        echo "Grade: " .$this->calcGrade(). " (" .$this->letterCalc(). ") <br>";
      }

    }
      //creates a new student calss and displays the information
      $student = new Student();
      $student->displayThings();
  ?>
