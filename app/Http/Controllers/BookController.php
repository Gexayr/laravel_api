<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BookResource;
use App\Http\Resources\BookResourceCollection;
use Illuminate\Http\Request;

/**
 * Class BookController
 * @package App\Http\Controllers
 */
class BookController extends Controller
{
    /**
     * @param Book $book
     * @return BookResource
     */
    public function show(Book $book): BookResource
    {

        return new BookResource($book);
    }

    /**
     * @return BookResourceCollection
     */
    public function index(): BookResourceCollection
    {
        return new BookResourceCollection(Book::paginate());
    }

    /**
     * @param Request $request
     * @return BookResource
     */
    public function store(Request $request)
    {
       // create new book
        $request->validate([
            'name'      => 'required',
            'author_id' => 'required|numeric|min:1|max:20'
        ]);

        $book = Book::create($request->all());
        return new BookResource($book);
    }

    /**
     * @param Book $book
     * @param Request $request
     * @return BookResource
     */
    public function update(Book $book, Request $request): BookResource
    {
        // update book
        $book->update($request->all());
        return new BookResource($book);
    }

    /**
     * @param Book $book
     * @return BookResource
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        // remove book
        $book->delete();
        return response()->json();
    }


}
