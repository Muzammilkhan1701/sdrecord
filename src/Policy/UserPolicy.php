<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\user;
use Authorization\IdentityInterface;

/**
 * user policy
 */
class userPolicy
{
    /**
     * Check if $user can add user
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\user $resource
     * @return bool
     */
    public function canAdd(IdentityInterface $user, user $resource)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can edit user
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\user $resource
     * @return bool
     */
    public function canEdit(IdentityInterface $user, user $resource)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can delete user
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\user $resource
     * @return bool
     */
    public function canDelete(IdentityInterface $user, user $resource)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view user
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\user $resource
     * @return bool
     */
    public function canView(IdentityInterface $user, user $resource)
    {
        return $user->role === 'admin' || $user->id === $resource->user_id;

    }
    public function canDashboard(IdentityInterface $user, user $resource)
    {
        return $user->role === 'admin' || $user->id === $resource->user_id;

    }
}
