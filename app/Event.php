<?php

namespace BetterLife;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name', 'location'];

    public function causes()
    {
        return $this->belongsToMany(Cause::class);
    }

    public function images(){
      return $this->morphOne(Image::class, 'imagetable');
    }
    /**
     * Guarda el nombre en mayúsculas.
     * @param string $name
     * @return void
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = strtoupper($name);
    }

    /**
     * Obtiene la fecha inicio y fecha final en un solo atributo "dinámico" (date_begin_date_final)
     * @return string
     */
    public function getNameLocationAttribute()
    {
        return $this->name . ' - ' . $this->location;
    }

    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
}
