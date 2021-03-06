@props(['post' => $post])
    <div class="mb-4">
        <a href="{{ route('users.posts', $post->user) }}"
            class="font-bold">{{ $post->user->name }}</a>
        <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}
        </span>
        <p class="mb-2">{{ $post->content }}</p>
        <a href="{{ route('posts.show', $post) }}">more</a>
    </div>
    {{-- @if ($post->ownedBy(auth()->user())) --}}
    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="DELETE">
            @method('DELETE')
            @csrf
            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-danger"></i>
            </button>
        </form>
    @endcan
    {{-- @endif --}}
    <div class="flex items-center">
        @auth
            @if(!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes',$post) }}" class="mr-1" method="post">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes',$post) }}" class="mr-1" method="DELETE">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif

        @endauth

        <span>{{ $post->likes->count() }} {{Str::plural('like',
         $post->likes->count())}}</span>

    </div>
