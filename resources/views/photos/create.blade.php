@section('content')

    <div class="row" style="justify-content: center !important">
        <div id="create-card"  class="mt-5 h-100 w-75 align-content-center card p-5">
            <h1 class="text-center">Upload New Photo <i class="fa-solid fa-camera-retro"></i></h1>

            <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input class="col-12 m-1 post-photo" type="file" name="image" multiple required>
                <select id="photo-description" class="col-12 m-1" name="description" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="astro">Astro</option>
                    <option value="nature">Nature</option>
                    <option value="water">Water</option>
                    <option value="other">Other</option>
                </select>
                <button class="col-12 m-1" type="submit">Upload Image</button>
            </form>
        </div>
    </div>
@endsection
