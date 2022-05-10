<?php

namespace Test\Tasks\Structures\StructuresClass;

use DomainException;

class Profiles {

    private array $profiles = [];

    public function add(ProfileThree $profile)
    {
        $this->profiles[] = $profile;
    }

    public function get(int $id)
    {
        foreach ($this->profiles as $profile) {
            if ($profile->getId() === $id) {
                return $profile;
            }
        }

        throw new DomainException('Profile not found');
    }

    public function remove (ProfileThree $profile)
    {
        foreach ($this->profiles as $key => $p) {
            if ($p->getId() === $profile->getId()) {
                unset($this->profiles[$key]);
            }
        }
    }

    public function getProfiles()
    {
        return $this->profiles;
    }
}
