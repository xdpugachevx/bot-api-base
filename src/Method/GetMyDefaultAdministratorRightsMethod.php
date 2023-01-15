<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;

/**
 * Class GetMyDefaultAdministratorRightsMethod.
 *
 * Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights
 * on success.
 *
 * @see https://core.telegram.org/bots/api#getmydefaultadministratorrights
 */
class GetMyDefaultAdministratorRightsMethod implements MethodInterface
{
    /**
     * Pass True to get default administrator rights of the bot in channels.
     * Otherwise, default administrator rights of the bot for groups and
     * supergroups will be returned.
     *
     * @var bool|null
     */
    public $forChannels;

    /**
     * @param bool|null $forChannels
     *
     * @return GetMyDefaultAdministratorRightsMethod
     */
    public static function create(bool $forChannels = null): GetMyDefaultAdministratorRightsMethod
    {
        $instance = new static();
        $instance->forChannels = $forChannels;

        return $instance;
    }
}
