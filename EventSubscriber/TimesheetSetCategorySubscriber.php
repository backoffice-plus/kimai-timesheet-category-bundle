<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\TimesheetCategoryBundle\EventSubscriber;

use App\Event\TimesheetCreatePreEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class TimesheetSetCategorySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly RequestStack $requestStack,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            TimesheetCreatePreEvent::class => 'onPreCreate',
        ];
    }

    public function onPreCreate(TimesheetCreatePreEvent $event): void
    {
        $timesheet = $event->getTimesheet();
        $category = $this->requestStack->getCurrentRequest()?->headers->get('form-category');
        if ($category) {
            $timesheet->setCategory($category);
        }
    }
}
