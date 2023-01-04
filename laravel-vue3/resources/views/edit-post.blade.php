<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Post </h2>
    </x-slot>
    <div class="container nx--auto ">
        <div class="bg-white p-6 my-6">
            <form action="{{route('update-post', $post->id)}}" method="post">
                @csrf
                <p class="mb-4">
                    <input type="text" name="title" value="{{$post->title}}" >
                </p>

                <div class="mb-4">
                    <textarea name="content"  cols="30" rows="5">{{$post->content}}</textarea>
                </div>
                <button class="bg-dark" type="submit" >Update</button>
            </form>
        </div>
    </div>
</x-app-layout>