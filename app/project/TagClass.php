<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 4/1/15
 * Time: 10:37 AM
 */

namespace project;


abstract class TagClass {

    protected $tagType;

    public function giveTagInfo()
    {
        return 'I am using '. $this->tagType;
    }

}