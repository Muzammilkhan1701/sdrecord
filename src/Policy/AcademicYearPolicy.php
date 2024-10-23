<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\AcademicYear;
use Authorization\IdentityInterface;

/**
 * AcademicYear policy
 */
class AcademicYearPolicy
{
    /**
     * Check if $user can add AcademicYear
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AcademicYear $academicYear
     * @return bool
     */
    public function canAdd(IdentityInterface $user, AcademicYear $academicYear)
    {
        return $user->role === 'admin' || $user->id === $academicYear->user_id;


    }

    /**
     * Check if $user can edit AcademicYear
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AcademicYear $academicYear
     * @return bool
     */
    public function canEdit(IdentityInterface $user, AcademicYear $academicYear)
    {
        return $user->role === 'admin' || $user->id === $academicYear->user_id;

    }

    /**
     * Check if $user can delete AcademicYear
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AcademicYear $academicYear
     * @return bool
     */
    public function canDelete(IdentityInterface $user, AcademicYear $academicYear)
    {
        return $user->role === 'admin';

    }

    /**
     * Check if $user can view AcademicYear
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\AcademicYear $academicYear
     * @return bool
     */
    public function canView(IdentityInterface $user, AcademicYear $academicYear)
    {
        return $user->role === 'admin' || $user->id === $academicYear->user_id;

    }
}
