<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\SetMethodAliasInterface;
use TgBotApi\BotApiBase\Type\ChatAdministratorRightsType;

/**
 * Class SetMyDefaultAdministratorRightsMethod.
 *
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator
 * to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding
 * the bot. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#setmydefaultadministratorrights
 */
class SetMyDefaultAdministratorRightsMethod implements SetMethodAliasInterface
{
    /**
     * A JSON-serialized object describing new default
     * administrator rights. If not specified, the default
     * administrator rights will be cleared.
     *
     * @var ChatAdministratorRightsType|null
     */
    public $rights;

    /**
     * Pass True to change the default administrator rights of the
     * bot in channels. Otherwise, the default administrator rights
     * of the bot for groups and supergroups will be changed.
     *
     * @var bool|null
     */
    public $forChannels;

    /**
     * @param ChatAdministratorRightsType|null $rights
     * @param bool|null $forChannels
     *
     * @return SetMyDefaultAdministratorRightsMethod
     */
    public static function create(ChatAdministratorRightsType $rights = null, bool $forChannels = null): SetMyDefaultAdministratorRightsMethod
    {
        $instance = new static();
        $instance->rights = $rights;
        $instance->forChannels = $forChannels;

        return $instance;
    }
}
