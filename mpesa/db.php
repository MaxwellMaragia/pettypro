<?php
/**
 * Created by PhpStorm.
 * User: maxipain
 * Date: 11/26/2017
 * Time: 5:47 PM
 */

class DATABASE{

    public $con;

    public function __construct()
    {

        $this->con=mysqli_connect("localhost","kipasise_ideal","Codei@maseno","kipasise_ideal")or die(mysqli_error($this->con));

        if(!$this->con)
        {
            echo "failed to connect";
        }

    }

}

    $obj=new DATABASE();