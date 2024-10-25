<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Student;
use Authorization\IdentityInterface;

/**
 * Student policy
 */
class StudentPolicy
{
    /**
     * Check if $user can add Student
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Student $student
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Student $student)
    {
        return $user->role === 'admin' || $user->id === $student->user_id;

    }

    /**
     * Check if $user can edit Student
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Student $student
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Student $student)
    {
        return $user->role === 'admin' || $user->id === $student->user_id;

    }

    /**
     * Check if $user can delete Student
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Student $student
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Student $student)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view Student
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Student $student
     * @return bool
     */
    public function canView(IdentityInterface $user, Student $student)
    {
        return $user->role === 'admin' || $user->id === $student->user_id;

    }
}
