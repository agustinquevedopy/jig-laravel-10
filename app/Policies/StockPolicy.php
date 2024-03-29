<?php
namespace App\Policies;

use App\Models\Stock;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('stocks.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  Stock  $stock
     * @return mixed
     */
    public function view(User $user, Stock $stock)
    {
        return $user->hasPermissionTo('stocks.show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('stocks.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  Stock  $stock
     * @return mixed
     */
    public function update(User $user, Stock $stock)
    {
        return $user->hasPermissionTo('stocks.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  Stock  $stock
     * @return mixed
     */
    public function delete(User $user, Stock $stock)
    {
        return $user->hasPermissionTo('stocks.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  Stock  $stock
     * @return mixed
     */
    public function restore(User $user, Stock $stock)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  Stock  $stock
     * @return mixed
     */
    public function forceDelete(User $user, Stock $stock)
    {
        return $user->hasPermissionTo('stocks.delete');
    }
}
