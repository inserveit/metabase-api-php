<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Permissions\Group;
use Inserve\MetabaseAPI\Model\Permissions\Membership;
use Inserve\MetabaseAPI\Model\Permissions\Permission;
use Inserve\MetabaseAPI\Model\User\User;

/**
 *
 */
final class PermissionsAPI extends AbstractAPIClient
{
    /**
     * @return Permission|null
     *
     * @throws MetabaseAPIException
     */
    public function graph(): ?Permission
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/permissions/graph'
        );

        return $this->apiClient->deserialize($response, Permission::class);
    }

    /**
     * @param Permission $permission
     *
     * @return Permission|null
     *
     * @throws MetabaseAPIException
     */
    public function updateGraph(Permission $permission): ?Permission
    {
        $response = $this->apiClient->call(
            'PUT',
            '/api/permissions/graph',
            $this->apiClient->serialize($permission)
        );

        return $this->apiClient->deserialize($response, Permission::class);
    }

    /**
     * @param int $id
     *
     * @return Group|null
     *
     * @throws MetabaseAPIException
     */
    public function getGroup(int $id): ?Group
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/permissions/group/%d', $id)
        );

        return $this->apiClient->deserialize($response, Group::class);
    }

    /**
     * @return Group[]
     *
     * @throws MetabaseAPIException
     */
    public function listGroups(): array
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/permissions/group'
        );

        return $this->apiClient->deserializeList($response, Group::class);
    }

    /**
     * @param string $name
     *
     * @return Group|null
     *
     * @throws MetabaseAPIException
     */
    public function createGroup(string $name): ?Group
    {
        $body = json_encode(['name' => $name]);
        if ($body === false) {
            return null;
        }

        $response = $this->apiClient->call(
            'POST',
            '/api/permissions/group',
            $body
        );

        return $this->apiClient->deserialize($response, Group::class);
    }

    /**
     * @param Group $group
     *
     * @return Group|null
     *
     * @throws MetabaseAPIException
     */
    public function updateGroup(Group $group): ?Group
    {
        $groupId = $group->getId();
        if ($groupId === null) {
            return null;
        }

        $body = json_encode(['name' => $group->getName()]);
        if ($body === false) {
            return null;
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/permissions/group/%d', $groupId),
            $body
        );

        return $this->apiClient->deserialize($response, Group::class);
    }

    /**
     * @param int $id
     *
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function deleteGroup(int $id): void
    {
        $this->apiClient->call(
            'DELETE',
            sprintf('/api/permissions/group/%d', $id)
        );
    }

    /**
     * @param User  $user
     * @param Group $group
     * @param bool  $isGroupManager
     *
     * @return Membership[]
     *
     * @throws MetabaseAPIException
     */
    public function addUserToGroup(User $user, Group $group, bool $isGroupManager = false): array
    {
        $body = json_encode([
            'user_id' => $user->getId(),
            'group_id' => $group->getId(),
            'is_group_manager' => $isGroupManager,
        ]);

        if ($body === false) {
            return [];
        }

        $response = $this->apiClient->call(
            'POST',
            '/api/permissions/membership',
            $body
        );

        return $this->apiClient->deserializeList($response, Membership::class);
    }
}
