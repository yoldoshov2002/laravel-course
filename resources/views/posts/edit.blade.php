<x-layouts.main>
    <x-slot:title>
        Edit Post
    </x-slot:title>

    <x-page-header>
        Edit post
    </x-page-header>
    <div class="container py-5">
        <div class="flex align-items-center py-4 justify-content-center">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.update',['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group mb-3">
                        <input type="text" class="form-control p-4" value="{{$post->title}}" name="title" placeholder="Title" />
                        @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-3">
                        <input type="file" class="form-control p-4" name="photo" value="{{ $post->photo }}" placeholder="Rasm"/>
                       <div class="mt-3 mb-3 d-flex justify-content-center">
                        <img src="/storage/{{ $post->photo }}" alt="" style="width: 150px; height:100px">
                       </div>
                        @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <input type="text" class="form-control p-4" name="short_content" value="{{ $post->short_content }}" placeholder="Short Content"/>
                        @error('short_content')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <textarea class="form-control p-4" rows="6" name="content" value="{{ $post->content }}" placeholder="Content">{{ $post->content }}</textarea>
                        @error('content')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>
