<?php
declare(strict_types=1);

namespace OCA\HidePhotos\AppInfo;

use OCA\HidePhotos\Listeners\BeforeTemplateListener;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Http\Events\BeforeTemplateRenderedEvent;

class Application extends App implements IBootstrap
{
    public const APPNAME = 'hide-photos';

    public function __construct()
    {
        parent::__construct(self::APPNAME);
    }

    public function register(IRegistrationContext $context): void
    {
        $context->registerEventListener(BeforeTemplateRenderedEvent::class, BeforeTemplateListener::class);
    }

    public function boot(IBootContext $context): void
    {
    }
}
