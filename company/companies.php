<?php

  require 'company.php';

  class Companies {
    private $companies = [];

    public function add($company) {
      $this->companies[] = $company;
    }

    public function foundedAfter($year) {
      foreach ($this->companies as $value) {
        if ($value->founded > $year) {
          $result .= $value."\n";
        }
      }
      return $result;
    }

    public function foundedBefore($year) {
      foreach ($this->companies as $value) {
        if ($value->founded < $year) {
          $result .= $value . "\n";
        }
      }
      return $result;
    }

    public function __toString() {
      $result = [];
      foreach ($this->companies as $comp) {
        $result[] = $comp;
      }
      sort($result);
      return join("\n",$result); 
    
    }

  }

