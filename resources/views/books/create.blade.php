<x-layout title="Add book">

    <div class="container">


    

        <div class="row align-items-center justify-content-center text-center mt-4">

            <div class="col-md">
                <h2>Add Book</h2>
                <a class="btn btn-primary" href="/">Show books added</a>
            </div>


            <div class="col-md">
                <h2 class="mb-4">Book Details </h2>

                <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
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
                        <textarea class="form-control" name="coment" id="coment" rows="3"></textarea>
                        <label for="coment">Coment</label>
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

                        </select>
                        <label for="genre">Genre</label>
                    </div>

                    <div class="form-group mb-3">

                        <input type="file" name="cover" class="form-control-file" accept="image/png, image/jpg, image/jpeg">

                    </div>

                    <button class="btn btn-primary" type="submit">Add Book</button>
                </form>
            </div>



        </div>



    </div>

</x-layout>