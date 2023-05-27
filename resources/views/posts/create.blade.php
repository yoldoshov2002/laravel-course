<x-layouts.main>
    <x-slot:title>
        Create Post
    </x-slot:title>

    <x-page-header>
        New post create
    </x-page-header>
    <div class="container py-5">
        <div class="flex align-items-center py-4 justify-content-center">
            <div class="contact-form">
                <div id="success"></div>
                {{-- @if ($errors->any())
                    <div class="aler alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group mb-3">
                        <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="Title" />
                        @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-3">
                        <input type="file" class="form-control p-4" name="photo" value="{{ old('photo') }}" placeholder="Rasm"/>
                        @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <input type="text" class="form-control p-4" name="short_content" value="{{ old('short_content') }}" placeholder="Short Content"/>
                        @error('short_content')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">

                        <textarea class="form-control p-4" rows="6" name="content" value="{{ old('content') }}" placeholder="Content"></textarea>
                        @error('content')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>
