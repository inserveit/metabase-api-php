<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\User\User;

/**
 *
 */
class UserAPI extends AbstractAPIClient
{
    /**
     * @param User $user
     *
     * @return User|null
     *
     * @throws MetabaseAPIException
     */
    public function create(User $user): ?User
    {
        $response = $this->apiClient->call(
            'POST',
            '/api/user',
            $this->apiClient->serialize($user)
        );

        return $this->apiClient->deserialize($response, User::class);
    }

    /**
     * @param User $user
     *
     * @return User|null
     *
     * @throws MetabaseAPIException
     */
    public function update(User $user): ?User
    {
        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/user/%d', $user->getId()),
            $this->apiClient->serialize($user)
        );

        return $this->apiClient->deserialize($response, User::class);
    }

    /**
     * @param User   $user
     * @param string $password
     *
     * @throws MetabaseAPIException
     */
    public function updatePassword(User $user, string $password): void
    {
        $this->apiClient->call(
            'PUT',
            sprintf('/api/user/%d/password', $user->getId()),
            json_encode([
                'password' => $password,
            ])
        );
    }

    /**
     * @param int $id
     *
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function delete(int $id): void
    {
        $this->apiClient->call(
            'DELETE',
            sprintf('/api/user/%d', $id)
        );
    }

    /**
     * @param int $id
     *
     * @return User|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?User
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/user/%d', $id)
        );

        return $this->apiClient->deserialize($response, User::class);
    }

    /**
     * @return User[]
     *
     * @throws MetabaseAPIException
     *
     * For options see: https://www.metabase.com/docs/latest/api/user#get-apiuser
     */
    public function list(array $options = []): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/user?%s', http_build_query($options))
        );

        $response = json_decode($response, true);
        if (!isset($response['data'])) {
            return [];
        }

        $users = [];
        foreach ($response['data'] as $user) {
            $users[] = $this->apiClient->denormalize($user, User::class);
        }

        return $users;
    }
}
