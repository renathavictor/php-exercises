<?php

class Exam
{
  private $weight;
  private $answer;
  private $answers = [];
  private $grades = [];

  public function __construct($answer, $weight) {
    $this->answer = $answer;
    $this->weight = $weight;
  }

  public function add($student, $answerStudent) {
    $this->answers[$student] = $answerStudent; 

    $grade = 0;
    foreach ($answerStudent as $key => $value) {
      if ($this->answer[$key] === $value) {
        $grade += $this->weight[$key];
      }
    }
    $this->grades[$student] = $grade;
  }

  public function grade($student) : float {
    return $this->grades[$student];
  }

  public function avg() :float {
    return array_sum($this->grades) / count($this->grades);
  }

  public function min($count = 1) {
    sort($this->grades, SORT_NUMERIC);
    return array_slice($this->grades, 0, $count);
  }

  public function max($count = 1) {
    sort($this->grades, SORT_DESC | SORT_NUMERIC);
    return array_slice($this->grades, -$count);
  }

  public function lt($limit) {
    $result = [];
    foreach ($this->grades as $value) {
      if ($value < $limit) {
        $result[] = $value;
      }
    }
    return $result;
  }

  public function gt($limit) {
    $result = [];
    foreach ($this->grades as $value) {
      if ($value > $limit) {
        $result[] = $value;
      }
    }
    return $result;
  }
}

  
