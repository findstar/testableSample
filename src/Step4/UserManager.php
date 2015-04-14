<?php

namespace Findstar\Src\Step4;

class UserManager {

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function getUser($user_id)
    {
        return $this->userRepository->getUser($user_id);

    }

}
