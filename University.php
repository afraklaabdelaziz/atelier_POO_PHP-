<?php
require_once "AbstractUniversity.php";

/**
 * Class University
 */
class University extends AbstractUniversity
{
    // TODO Implement all the methods declared in parent
    public function addSubject(string $code, string $name): Subject{
      $subject = new Subject($code, $name);
      return $subject;
    }

    public function addStudentOnSubject(string $subjectCode, Student $student){
      $exist = array_search($subjectCode, parent::$subjects);
      if ($exist){
        parent::$subject[$exist] = $student;
      } else {
        return false;
      }
    }
}
