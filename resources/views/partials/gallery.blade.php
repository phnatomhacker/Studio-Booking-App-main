
<div class="container grid grid-cols-2 gap-2 mx-auto mt-20 px-2 md:grid-cols-3">
    @foreach ($galleryImages as $image)
    <div class="max-w-md rounded-sm shadow-md shadow-brightRedLight">
        <img src="{{ asset('imgs/gallery/' . $image->image_path)}}"
            alt="image">
    </div>
    @endforeach
    <div class="text-xs mt-2">
        {{ $galleryImages->links() }}
    </div>
</div>
