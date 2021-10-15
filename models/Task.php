<?php

class Task {
  public $completed;
  public $description;

  /**
   * Task is complete?
   *
   * @return boolean
   */
  public function isCompleted()
  {
    return $this->completed;
  }

  public function getDescription()
  {
    return $this->description;
  }
}