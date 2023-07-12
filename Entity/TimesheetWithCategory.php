<?php

namespace KimaiPlugin\TimesheetCategoryBundle\Entity;

use App\Entity\Timesheet;
use JMS\Serializer\Annotation as Serializer;

#[Serializer\VirtualProperty('category', exp: 'object.getCategory()')]
class TimesheetWithCategory extends Timesheet
{

}
