<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class RevokeChatInviteLinkMethod.
 *
 * @see https://core.telegram.org/bots/api#revokechatinvitelink
 */
class RevokeChatInviteLinkMethod implements MethodInterface
{
    use ChatIdVariableTrait;

    /**
     * The invite link to revoke
     *
     * @var string
     */
    public $inviteLink;

    /**
     * @param int|string $chatId
     * @param string $inviteLink
     *
     * @return RevokeChatInviteLinkMethod
     */
    public static function create($chatId, string $inviteLink): RevokeChatInviteLinkMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->inviteLink = $inviteLink;

        return $instance;
    }
}
