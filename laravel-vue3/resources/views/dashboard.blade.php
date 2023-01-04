<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex">
                        <!-- Form entry -->
                        <div class="flex-1">
                            <h2>Add New post</h2>

                            <!-- {{var_dump($errors)}} -->
                            
                            <form action="{{route('add-post')}}" method="post">
                                @csrf
                                <p class="mb-4" >
                                    <input class="w-full px-4 py-2 border @error('title') border-red-200 @else border-gray-200 @enderror"  type="text" name="title" placeholder="Enter Title" value="{{old('title')}}">

                                    @error('title')
                                        <span class="text-red-500 text-sm" >
                                            {{$message}}
                                        </span>
                                    @enderror
                                </p>

                                <p class="mb-4" >
                                    <textarea  class="w-full px-4 py-2 border border-gray-200" name="content" cols="30" rows="5" placeholder="Enter Text"> {{old('content')}} </textarea>

                                    @error('content')
                                        <span class="text-red-500 text-sm" >
                                            {{$message}}
                                        </span>
                                    @enderror
                                </p>
                                <br />
                                <button class="px-4 py-2 rounded bg-black text-white" type="submit">Add Post</button>
                            </form>
                        </div>

                        <!-- Show post -->

                        <div class="flex-1">
                            <!-- <h2>All post</h2>
                                <ul>
                                    @foreach($posts as $post)
                                    <li>
                                        <a href="">{{$post->title}}</a>
                                    </li>
                                    @endforeach
                                </ul> -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>