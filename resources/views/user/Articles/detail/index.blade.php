@extends('layouts.app')

@section('content')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <h1>ppppp</h1>
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ asset('img/creator_article.jpg') }}"
                                alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $article->author }}</a>
                                <p class="text-base font-light text-gray-500 dark:text-gray-400">Creator</p>
                                <p class="text-base font-light text-gray-500 dark:text-gray-400">
                                    <time pubdate datetime="{{ $article->created_at }}"
                                        title="{{ $article->created_at->format('d F Y') }}">
                                        {{ $article->created_at->format('d F Y') }}
                                    </time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <figure><img src="{{ url('images/' . $article->image) }}" alt="">
                    </figure>
                    <h1
                        class="mt-4 mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $article->title }}</h1>
                </header>
                <p class="lead mb-3">{!! $article->body !!}</p>

                <form action="{{ route('like.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="article_id" value="{{ $article->id }}" id="{{ $article->id }}">
                    <button type="submit"
                        class="likeDislike focus:outline-none flex items-center justify-center gap-2 text-white
                    {{ Auth::guest() ? 'bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900' : ($article->isLikeBy(Auth::user()) ? 'bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900' : 'bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900') }}
                    font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                        <svg fill="none" stroke="currentColor" stroke-width="0.5" viewBox="0 0 24 24" class="w-5 h-5"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                            </path>
                        </svg>
                        <span>
                            {{ $article->likes->count() }}
                        </span>
                    </button>
                </form>
                <section class="not-format">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion</h2>
                    </div>
                    <form class="mb-6" action="{{ route('comment.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <div
                            class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" rows="6" name="comment"
                                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                placeholder="Write a comment..." required></textarea>
                        </div>
                        <button type="submit"
                            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                            Post comment
                        </button>
                    </form>
                    @foreach ($comments as $comment)
                        <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            
                                            src={{ $comment->user->image_profile == null ? asset('img/profile.png') : asset('storage/'.Auth::user()->image_profile) }}
                                            alt="Michael Gough">{{ $comment->user->name }}</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                            title="February 8th, 2022">{{ $comment->created_at }}</time></p>
                                </div>
                                <button id="dropdownCommentButton"
                                    data-dropdown-toggle="dropdownComment{{ $comment->id }}"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment{{ $comment->id }}"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <button onclick="editComment({{ $comment->id }})"
                                                class="edit-comment-btn block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                        </li>
                                        @if (Auth::check())
                                            @if (Auth::user()->id == $comment->user_id || Auth::user()->is_admin == 1)
                                                <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</button>
                                                </form>
                                            @else
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                </li>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </footer>
                            {{-- <p>{{ $comment->comment }}.</p> --}}
                            <div class="comment-text" id="commentText{{ $comment->id }}">
                                <p id="commentValue{{ $comment->id }}">{{ $comment->comment }}.</p>
                            </div>

                            <div class="comment-edit hidden" id="commentEdit{{ $comment->id }}">
                                <form action="{{ route('comment.update', $comment->id) }}" method="POST"
                                    onsubmit="updateComment({{ $comment->id }})">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-col mb-4">
                                        <textarea id="commentTextarea{{ $comment->id }}" rows="6" name="comment"
                                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                            placeholder="Write a comment..." required></textarea>
                                    </div>
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Update
                                        comment</button>

                                    <button type="cancel" onclick="cancelEdit({{ $comment->id }})"
                                        class="inline-flex items-center py-2.5 px-4 ml-2 text-xs font-medium text-center text-gray-700 bg-gray-200 rounded-lg dark:bg-gray-800 dark:text-gray-300 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-700 hover:bg-gray-300 dark:hover:bg-gray-700">Cancel</button>
                                </form>
                            </div>
                        </article>
                    @endforeach
                </section>

            </article>

        </div>
    </main>
@endsection
