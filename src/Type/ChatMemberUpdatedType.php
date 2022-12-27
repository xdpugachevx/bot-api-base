<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class ChatMemberUpdatedType.
 *
 * @see https://core.telegram.org/bots/api#chatmemberupdated
 */
class ChatMemberUpdatedType
{
    /**
     * Chat the user belongs to.
     * 
     * @var ChatType
     */
    public $chat;

    /**
     * Performer of the action, which resulted in the change.
     *
     * @var UserType
     */
    public $from;

    /**
     * Date the change was done in \DateTimeInterface.
     *
     * @var \DateTimeImmutable
     */
    public $date;

    /**
     * Previous information about the chat member.
     *
     * @var ChatMemberType
     */
    public $oldChatMember;

    /**
     * New information about the chat member.
     *
     * @var ChatMemberType
     */
    public $newChatMember;

    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     *
     * @var ChatInviteLinkType|null
     */
    public $inviteLink;
}
