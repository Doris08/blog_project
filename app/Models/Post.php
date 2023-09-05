<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    //protected $fillable = ['title', 'excerpt', 'body', 'id'];

    //Creación de Función Filter
    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){ // También se puede usar arrow functions fn($query, $search)=>$query
            $query->where(fn()=>
                $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            );
        });
        $query->when($filters['category'] ?? false, fn($query, $category)=> // Forma usando arrow function
            $query->whereHas('category', fn($query) => 
                $query->where('slug', $category))    
        );  
        $query->when($filters['author'] ?? false, fn($query, $author)=> // Forma usando arrow function
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author))    
        );  
        
        /*$query
            ->whereExists(fn($query)=>
                $query->from('categories')
                    ->whereColumn('categories.id', 'posts.category_id')
                    ->where('categories.slug', $category))*/
     
    }

    public function Category(){

        return $this->belongsTo(Category::class);
    }
    public function Author(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
