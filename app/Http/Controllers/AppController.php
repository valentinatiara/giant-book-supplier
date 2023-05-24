<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class AppController extends Controller
{
    public function index(){
        return view ('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all()
        ]);
    }

    public function detail(Book $book){
        return view('detail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }

    public function category(Category $category){
        return view('index', [
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::all(),
        ]);
    }

    public function contact(){
        return view('contact',[
            'title' => 'Contact',
            'categories' => Category::all()
        ]);
    }

    public function publisher(Publisher $publisher){
        return view('publisher',[
            'title' => 'Publisher List',
            'address' => 'Address - Palmerah, Jakarta - Indonesia',
            'phone' => 'Phone - 02100001112',
            'email' => 'Email - publisher@publish.com',
            'books' => Book::all(),
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        ]);
    }

}
