<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CupboardItem extends Model
{
    use HasFactory;

    public function cupboardItemType(): HasOne
    {
        return $this->hasOne(CupboardItemType::class);
    }
    
    public function quantityType(): HasOne
    {
        return $this->hasOne(QuantityType::class);
    }

}
