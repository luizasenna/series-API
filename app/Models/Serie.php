<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $perPage = 3;
    public $appends = ['links'];


    public function episodios(){
        return $this->hasMany(Episodio::class);

    }

    public function getLinksAttribute() {
        return [
            'self' => '/api/series/'.$this->id,
            'episodios' => '/api/series/'.$this->id.'/episodios'
        ];
    }
}