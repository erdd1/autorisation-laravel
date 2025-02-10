<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot
{
    // Si vous avez des colonnes supplémentaires dans la table pivot, vous pouvez les définir ici
    protected $fillable = [
        'id_users', 'id_roles',
    ];
}