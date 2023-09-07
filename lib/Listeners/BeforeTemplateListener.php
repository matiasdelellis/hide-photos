<?php
declare(strict_types=1);

namespace OCA\HidePhotos\Listeners;

use OCA\HidePhotos\AppInfo\Application;

use OCP\AppFramework\Http\Events\BeforeTemplateRenderedEvent;

use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;

class BeforeTemplateListener implements IEventListener
{
	public function handle(Event $event): void
	{
		if (!($event instanceof BeforeTemplateRenderedEvent)) {
			return;
		}

		if (!$event->isLoggedIn()) {
			return;
		}

		\OCP\Util::addStyle(Application::APPNAME, 'hide-photos');
	}
}
