<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\excellence;
use Authorization\IdentityInterface;

/**
 * excellence policy
 */
class excellencePolicy
{
    /**
     * Check if $user can add excellence
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\excellence $excellence
     * @return bool
     */
    public function canAdd(IdentityInterface $user, excellence $excellence)
    {
        return $user->role === 'admin' || $user->id === $excellence->user_id;

    }

    /**
     * Check if $user can edit excellence
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\excellence $excellence
     * @return bool
     */
    public function canEdit(IdentityInterface $user, excellence $excellence)
    {
        return $user->role === 'admin' || $user->id === $excellence->user_id;

    }

    /**
     * Check if $user can delete excellence
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\excellence $excellence
     * @return bool
     */
    public function canDelete(IdentityInterface $user, excellence $excellence)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view excellence
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\excellence $excellence
     * @return bool
     */
    public function canView(IdentityInterface $user, excellence $excellence)
    {
        return $user->role === 'admin' || $user->id === $excellence->user_id;

    }
}
