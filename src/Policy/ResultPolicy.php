<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\result;
use Authorization\IdentityInterface;

/**
 * result policy
 */
class resultPolicy
{
    /**
     * Check if $user can add result
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\result $result
     * @return bool
     */
    public function canAdd(IdentityInterface $user, result $result)
    {
        return $user->role === 'admin' ;
        // || $user->id === $result->user_id;


    }

    /**
     * Check if $user can edit result
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\result $result
     * @return bool
     */
    public function canEdit(IdentityInterface $user, result $result)
    {
        return $user->role === 'admin' ;
        // || $user->id === $result->user_id;

    }

    /**
     * Check if $user can delete result
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\result $result
     * @return bool
     */
    public function canDelete(IdentityInterface $user, result $result)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view result
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\result $result
     * @return bool
     */
    public function canView(IdentityInterface $user, result $result)
    {
        return $user->role === 'admin' || $user->id === $result->user_id;

    }
}
