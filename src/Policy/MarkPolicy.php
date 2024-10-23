<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\mark;
use Authorization\IdentityInterface;

/**
 * mark policy
 */
class markPolicy
{
    /**
     * Check if $user can add mark
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\mark $mark
     * @return bool
     */
    public function canAdd(IdentityInterface $user, mark $mark)
    {
        return $user->role === 'admin' || $user->id === $mark->user_id;

    }

    /**
     * Check if $user can edit mark
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\mark $mark
     * @return bool
     */
    public function canEdit(IdentityInterface $user, mark $mark)
    {
        return $user->role === 'admin' || $user->id === $mark->user_id;

    }

    /**
     * Check if $user can delete mark
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\mark $mark
     * @return bool
     */
    public function canDelete(IdentityInterface $user, mark $mark)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view mark
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\mark $mark
     * @return bool
     */
    public function canView(IdentityInterface $user, mark $mark)
    {
        return $user->role === 'admin' || $user->id === $mark->user_id;

    }
}
