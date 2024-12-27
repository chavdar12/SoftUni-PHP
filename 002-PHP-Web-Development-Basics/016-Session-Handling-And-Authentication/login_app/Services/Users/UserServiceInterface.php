<?php

namespace Services\Users;


use Data\Users\UserDTO;
use Data\Users\UserEditDTO;
use Exception\User\EditProfileException;
use Exception\User\RegistrationException;
use Exception\User\UploadException;

interface UserServiceInterface
{
    /**
     * @param UserDTO $userDTO
     * @return mixed
     * @throws RegistrationException
     */
    public function register(UserDTO $userDTO);

    /**
     * @param int $id
     * @param UserEditDTO $userDTO
     * @throws EditProfileException
     */
    public function edit(int $id, UserEditDTO $userDTO): void;

    public function verifyCredentials(string $username, string $password): bool;

    public function findByUsername(string $username): UserDTO;

    public function findOne(int $id): UserDTO;

    /**
     * @param int $id
     * @param string $tempName
     * @param string $type
     * @param int $size
     * @return mixed
     * @throws UploadException
     */
    public function setProfilePicture(int $id, string $tempName, string $type, int $size);
}