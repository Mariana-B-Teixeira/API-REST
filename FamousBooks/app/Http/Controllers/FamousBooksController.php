<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamousBooks;

class FamousBooksController extends Controller
{
    public function index()
    {
        $books = FamousBooks::all();
        return response()->json($books, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'book_review' => 'required|integer',
            'author' => 'required|string',
            'genre' => 'required|string',
            'pages' => 'required|integer',
            'publication_date' => 'required|date',
        ]);

        $books = FamousBooks::create($validatedData);

        return response()->json([
            'message' => 'Book created successfully',
            'data' => $books
        ], 201);
    }

    public function show($id)
    {
        $book = FamousBooks::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        return response()->json($book, 200);
    }

    public function update(Request $request, $id)
    {
        $book = FamousBooks::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->update($request->all());

        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = FamousBooks::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
}