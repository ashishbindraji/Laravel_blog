@extends('layouts.site')

@section('title', 'Blog page')
@section('styles')
@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our blog</span>
                        <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item text-white-50">Our blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap bg-gray">
        <div class="container">
            @if (count($blogs) > 0)
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">
                                <a href="{{ route('single-blog', $blog->id) }}"><img src="{{ $blog->gallery->image }}"
                                        alt="blog" class="img-fluid rounded"></a>

                                <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
                                        <span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>{{ $blog->comments ? count($blog->comments) : 0 }} Comments</span>
                                        <span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i>{{ date('d-M-Y', strtotime($blog->created_at)) }}</span>
                                    </div>
                                    <h3 class="mt-3 mb-3"><a
                                            href="{{ route('single-blog', $blog->id) }}">{{ $blog->title }}</a></h3>
                                    <p class="mb-4">{{ Str::limit($blog->description, 50) }}</p>

                                    <a href="{{ route('single-blog', $blog->id) }}"
                                        class="btn btn-small btn-main btn-round-full">Learn More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $blogs->links() }}
                </div>
            @else
                <h3 class='text-center text-danger'>No blog posted yet...</h3>
            @endif
        </div>

        </div>
    </section>
@endsection
@section('scripts')
