<x-layout title="Edit infos">

    <div class="container text-center">
        <h1 class="display-1">Library in Laravel</h1>
        <hr>
        <h2>Edit infos of book: {{$book['title']}}</h2>
        <p>Only comment,cover and rating can be edited </p>

        <form action="{{route('books.update',  $book['id'])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mx-auto mt-5" style="width: 15rem;">

                <img class="card-img-top d-block mx-auto off" style="width: 100%; height: 200px; object-fit: cover;" src="{{ asset('storage/covers/' . $book['image']) }}" alt="Card image cap">

                 <!-- Ícone de Edição -->
                <label for="coverInput" class="edit-icon"> <i class="fa-regular fa-pen-to-square"></i></label>
                <input type="file" id="coverInput" name="coverInput" accept="image/*" class="form-control mt-2">

                <div class="card-body">
                    <div class="form-group mb-3 form-floating">
                        <input type="text" id="title" name="title" class="form-control" value="{{$book['title']}}" disabled>
                        <label for="title">Title</label>
                    </div>
                    <hr>

                    <div class="form-group mb-3 form-floating">
                        <input type="text" id="author" name="author" class="form-control" value="{{$book['author']}}" disabled>
                        <label for="author">Author</label>
                    </div>

                    <div class="form-group mb-3 form-floating">
                        <textarea class="form-control" name="coment" id="coment">{{$book['coment']}}</textarea>
                        <label for="coment">Coment</label>
                    </div>

                    <div class="form-group mb-3 form-floating">
                        <input type="number" id="rating" name="rating" class="form-control" value="{{$book['Rating']}}">
                        <label for="pages">Rating</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save changes <i class="fa-regular fa-pen-to-square"></i></button>
                </div>


            </div>

        </form>


    </div>

</x-layout>