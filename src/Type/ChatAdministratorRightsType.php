<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

use TgBotApi\BotApiBase\Exception\BadArgumentException;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class ChatAdministratorRightsType.
 *
 * @see https://core.telegram.org/bots/api#chatadministratorrights
 */
class ChatAdministratorRightsType
{
    use FillFromArrayTrait;

    /**
     * True, if the user's presence in the chat is hidden
     *
     * @var bool
     */
    public $isAnonymous;

    /**
     * True, if the administrator can access the chat event log, chat statistics,
     * message statistics in channels, see channel members, see anonymous
     * administrators in supergroups and ignore slow mode. Implied by any other
     * administrator privilege
     *
     * @var bool
     */
    public $canManageChat;

    /**
     * True, if the administrator can delete messages of other users
     *
     * @var bool
     */
    public $canDeleteMessages;

    /**
     * True, if the administrator can manage video chats
     *
     * @var bool
     */
    public $canManageVideoChats;

    /**
     * True, if the administrator can restrict, ban or unban chat members
     *
     * @var bool
     */
    public $canRestrictMembers;

    /**
     * True, if the administrator can add new administrators with a subset of their
     * own privileges or demote administrators that they have promoted, directly or
     * indirectly (promoted by administrators that were appointed by the user)
     *
     * @var bool
     */
    public $canPromoteMembers;

    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     *
     * @var bool
     */
    public $canChangeInfo;

    /**
     * True, if the user is allowed to invite new users to the chat
     *
     * @var bool
     */
    public $canInviteUsers;

    /**
     * Optional. True, if the administrator can post in the channel; channels only
     *
     * @var bool|null
     */
    public $canPostMessages;

    /**
     * Optional. True, if the administrator can edit messages of other users and can
     * pin messages; channels only
     *
     * @var bool|null
     */
    public $canEditMessages;

    /**
     * Optional. True, if the user is allowed to pin messages; groups and
     * supergroups only
     *
     * @var bool|null
     */
    public $canPinMessages;

    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen
     * forum topics; supergroups only
     *
     * @var bool|null
     */
    public $canManageTopics;

    /**
     * @param array|null $data
     * @return ChatAdministratorRightsType
     * @throws BadArgumentException
     */
    public static function create(array $data = null): ChatAdministratorRightsType
    {
        $instance = new static();
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
