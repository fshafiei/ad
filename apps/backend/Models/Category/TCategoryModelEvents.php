<?php
/**
 * Created by PhpStorm.
 * User: Webhouse
 * Date: 2/3/2019
 * Time: 9:49 AM
 */

namespace Ad\Backend\Models\Category;


trait TCategoryModelEvents
{
    public function beforeSave()
    {
//        if(!$this->getPosition() || !is_numeric($this->getPosition()))
//        {
//            $this->setPositionIfEmpty();
//        }
    }

}