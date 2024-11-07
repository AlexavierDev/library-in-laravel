<x-layout title="Library in Laravel">

    <div class="container text-center mt-3">
        <a class="btn btn-primary" href="/add">Add Book <i class="fa-solid fa-circle-plus"></i></a>
    </div>

    <div class="container d-flex gap-3 p-3 flex-wrap justify-content-center">


        @foreach($books as $book)
        <div class="card" style="width: 15rem;">
            <img class="card-img-top d-block mx-auto" style="width: 100%; height: 200px; object-fit: cover;" src="{{ asset('storage/covers/' . $book['image']) }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-text">Title: {{$book['title']}}</h4>
                <hr>
                <p class="card-text"><strong>Author :</strong> {{$book['author']}}</p>
                <p class="card-text"><strong>Genre :</strong> {{$book['genre']}}</p>
                <p class="card-text"><strong>Rating :</strong> {{$book['Rating']}} / 10</p>
                <p class="card-text"><Strong>Coment : </Strong>{{$book['coment']}}</p>
            </div>
            <div class="card-body">
                <a href="/edit/{{$book['id']}}" class="btn btn-primary">Edit info</a>
                <a href="{{route('books.delete',$book['id'])}}" class="btn btn-danger">Delete book</a>
            </div>
        </div>
        @endforeach
    </div>




</x-layout>