<?php

namespace Sonata\Bundle\DemoBundle\Model;



/**
 * Skeleton subclass for representing a row from one of the subclasses of the 'test_car' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.src.Sonata.Bundle.DemoBundle.Model
 */
class Renault extends Car {

    /**
     * Constructs a new Renault class, setting the discr column to CarPeer::CLASSKEY_2.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDiscr(CarPeer::CLASSKEY_2);
    }

} // Renault
