<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    public function index(){
        $bscautor = request('bscautor');
        $bscano = request('bscano');
        $bscautorano = request('bscautorano');

        if($bscautor){
            $books = Book::where([
                ['autor', 'like', '%'.$bscautor.'%']
            ])->get();

        } 
        else if($bscano){
            $books = Book::where([
                ['publication_date', 'like', '%'.$bscano.'%']
            ])->get();
        } 
        else if($bscautorano){
            $books = Book::where([
                ['autor', 'like', '%'.$bscautorano.'%']
            ])->get();
        } 
        else {
            $books = Book::all();
        }
        return view('welcome', ['books' =>$books, 'bscautor'=>$bscautor, 'bscano'=>$bscano, 'bscautorano'=>$bscautorano]);
    }

    public function dashboard(){
        $busca = request('busca');
        
        if($busca) {
            $books = Book::where([
                ['autor', 'like', '%'.$busca.'%']
                ])->get();
        } 
        else {
            $books = Book::all();
        }
      
        return view('dashboard.dashboard', ['books' =>$books, 'busca'=>$busca]);
    }

    public function create(){
        $autores = User::where([
            ['acesso', 'like', '%'.'escritor'.'%']])
            ->get();
        return view ('dashboard.criar', ['autores'=>$autores]);
    }

    public function store(Request $request){
        $book = new Book;

        $book -> title = $request->title;
        $book -> publication_date = $request->publication_date;
        $book -> autor = $request->autor;
        $book -> description = $request->description;
        $book -> generos = $request->generos;
        
        if($request ->hasFile('image') ** $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . " . " . $extension;

            $request ->image->move(public_path('imgs/books'), $imageName);

            $book ->image = $imageName;
        }

        if($request ->hasFile('livro') ** $request->file('livro')->isValid()){
            $requestLivro = $request->livro;

            $extension = $requestLivro->extension();

            $livroName = md5($requestLivro->getClientOriginalName() . strtotime('now')) . " . " . $extension;

            $request ->livro->move(public_path('imgs/bookfiles'), $livroName);

            $book ->livro = $livroName;
        }

        $book -> save();

        return redirect('/') ->with('msg', 'Livro Criado com sucesso');
    }

    public function show($id){
        $book = Book::findOrFail($id);
        
        return view ('cliente.descricao', ['book' => $book]);
    }

    public function destroy($id){
        Book::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Livro eliminado com sucesso');
    }

    public function lista(){
        $books = Book::all();

        return view ('dashboard.lista', ['books' => $books]);
    }

    public function edit($id) {

        $book = Book::findOrFail($id);

        return view('dashboard.editar', ['book' => $book]);

    }

    public function update(Request $request) {

        $data = $request->all();

        //image upload -- verifiar se a request vem com img e se esse ficheiro e valido
        if($request ->hasFile('image') ** $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . " . " . $extension;

            $request ->image->move(public_path('imgs/books'), $imageName);

            $data['image'] = $imageName;
        }

        Book::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Livro editado com sucesso');

    }

    public function livro(){
        return view('cliente.livro');
    }

    public function maislidos(){
        return view('dashboard.favoritos');
    }

    public function leituras(){
        return view('cliente.leituras');
    }

    public function ler($id){
        $user = auth()->user();

        $book = Book::findOrFail($id);
        DB::insert('insert into leituras (book_id, user_id) values (?, ?, ?)', [$id, $user->id]);

        return redirect('/')->with('msg', 'Voce esta lendo ' . $book->title);
    }
    
    
    public function favoritos(){
        $books = DB::table('book_user')
            ->join('books', 'books.id', '=', 'book_user.book_id')
            ->get();
        
        return view('cliente.favoritos', ['books'=>$books]);
    }

    public function favoritar($id){
       $user= auth()->user();

         $user->booksAsLover()->attach($id);

         $book = Book::findOrFail($id);

        return redirect('/clientes/favoritos')->with('msg', 'O livro foi adicionado aos seus favoritos' . $book->title);
    }


    public function autoria(){
        $nome = auth()->user()->name;
        $books = Book::where([
            ['autor', '=', $nome]
        ])->get();

        return view('cliente.autoria', ['books'=>$books]);
    }

    public function denunciar($id){
        $user = auth()->user();

        DB::insert('insert into denuncias (user_id, book_id) values (?, ?)', [$id, $user->id]);

        return view('welcome')->with('msg','Sua denuncia foi registada')
    }

}
