<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Exception\BadArgumentException;
use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class CreateChatInviteLinkMethod.
 *
 * @see https://core.telegram.org/bots/api#createchatinvitelink
 */
class CreateChatInviteLinkMethod implements MethodInterface
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;

    /**
     * Invite link name; 0-32 characters
     *
     * @var string|null
     */
    public $name;

    /**
     * Point in time (will be converted to Unix timestamp) when the link will expire
     *
     * @var \DateTimeInterface|null
     */
    public $expireDate;

    /**
     * The maximum number of users that can be members of the chat simultaneously
     * after joining the chat via this invite link; 1-99999
     *
     * @var int|null
     */
    public $memberLimit;

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators.
     * If True, member_limit can't be specified
     *
     * @var bool|null
     */
    public $createsJoinRequest;

    /**
     * @param int|string $chatId
     * @param array|null $data
     *
     * @throws BadArgumentException
     *
     * @return CreateChatInviteLinkMethod
     */
    public static function create($chatId, array $data = null): CreateChatInviteLinkMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}