<?php

namespace KimaiPlugin\TimesheetCategoryBundle\EventSubscriber;

use App\Entity\Timesheet;
use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use KimaiPlugin\TimesheetCategoryBundle\Entity\TimesheetWithCategory;

class TimesheetWithCategoryJmsSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            [
                'event'    => Events::PRE_SERIALIZE,
                'class'    => Timesheet::class,
                'method'   => 'onPreSerializeEvent',
                'priority' => 1100,
            ],
        ];
    }

    public function onPreSerializeEvent(PreSerializeEvent $event)
    {
        $event->setType(TimesheetWithCategory::class);
    }


}
