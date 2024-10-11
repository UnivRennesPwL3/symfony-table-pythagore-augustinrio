<?php
class PythagoreController {

    private $pythagoreUtility;

    public function __construct() {
        $this->pythagoreUtility = new PythagoreUtility();
    }

    public function displayPythagoreAction() {
        echo $this->pythagoreUtility->display();
    }
}
?>
