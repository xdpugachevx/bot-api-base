<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class ChatInviteLinkType.
 *
 * @see https://core.telegram.org/bots/api#chatinvitelink
 */
class ChatInviteLinkType
{
    /**
     * The invite link. If the link was created by another chat administrator,
     * then the second part of the link will be replaced with “…”.
     *
     * @var string
     */
    public $inviteLink;

    /**
     * Creator of the link.
     *
     * @var UserType
     */
    public $creator;

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators.
     *
     * @var bool
     */
    public $createsJoinRequest;

    /**
     * True, if the link is primary.
     *
     * @var bool
     */
    public $isPrimary;

    /**
     * True, if the link is revoked.
     *
     * @var bool
     */
    public $isRevoked;

    /**
     * Optional. Invite link name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Optional. Point in time (\DateTimeInterface) when the link will expire or has been expired.
     *
     * @var \DateTimeImmutable|null
     */
    public $expireDate;

    /**
     * Optional. The maximum number of users that can be members of the chat simultaneously
     * after joining the chat via this invite link; 1-99999.
     *
     * @var int|null
     */
    public $memberLimit;

    /**
     * Optional. Number of pending join requests created using this link.
     *
     * @var int|null
     */
    public $pendingJoinRequestCount;
}
