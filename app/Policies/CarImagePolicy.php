<?php

namespace App\Policies;

use App\Models\CarImage;
use App\Models\Car;
use App\Models\User;
use App\Models\Owner;
use Illuminate\Auth\Access\Response;

class CarImagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Car $car): bool
    {
        return $user->isAdmin() || $user->id == $car->owner->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Car $car): bool
    {
        return $user->isAdmin() || $user->id == $car->owner->user_id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CarImage $carImage): bool
    {
        return $user->isAdmin() ||  $user->id == $carImage->car->owner->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CarImage $carImage): bool
    {
        return $user->isAdmin() ||  $user->id == $carImage->car->owner->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CarImage $carImage): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CarImage $carImage): bool
    {
        //
    }
}
