<x-layout title="Series">

    <div class="container">


        <h1 class="display-1 text-center p-5">Library in Laravel</h1>

        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md">
                <h2>Add Book</h2>
                <a class="btn btn-primary" href="/">Show books added</a>
            </div>


            <div class="col-md">
                <h2 class="mb-4">Book Details </h2>

                <form action="{{route('books.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3 form-floating">
                        <input type="text" id="title" name="title" class="form-control" placeholder=" " required>
                        <label for="title">Title</label>
                    </div>

                    <div class="form-group mb-3 form-floating">
                        <input type="text" id="author" name="author" class="form-control" placeholder=" " required>
                        <label for="author">Author</label>
                    </div>

                    <div class="form-group mb-3 form-floating">
                        <input type="number" id="rating" name="rating" class="form-control" placeholder="From 0 to 10 " min="0" required>
                        <label for="pages">Rating</label>
                    </div>

                    <div class="form-group mb-4 form-floating">
                        <select id="genre" name="genre" class="form-control" required>
                            <option value="" disabled selected>Select genre</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Science Fiction">Science Fiction</option>
                            <option value="Biography">Biography</option>
                            <option value="History">History</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                        <label for="genre">Genre</label>
                    </div>

                    <button class="btn btn-primary" type="submit">Add Book</button>
                </form>
            </div>



        </div>



    </div>

</x-layout>