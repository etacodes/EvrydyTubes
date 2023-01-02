@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2>

      <p>By. <a href="/reviews?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/reviews?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

      @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
      @endif
      
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>

      {{-- komentar --}}
      <h3 class="fs-5 mt-5">Komentar</h3>
      <section>
        <div class="container py-4">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12">
              <div class="card">
                @foreach ($comments as $comment)
                  @if ($comment->post_id == $post->id)
                  <div class="card-body">
                    <div class="d-flex flex-start align-items-center">
                      <img class="rounded-circle shadow-1-strong me-3"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                      height="60" />
                      <div>
                        <h6 class="fw-bold text-primary mb-1">{{ $comment->user->username }}</h6>
                        <p class="text-muted small mb-0">
                          {{ $comment->created_at }}
                        </p>
                      </div>
                    </div>
                    
                    <p class="mt-3 mb-4 pb-2">
                      {{ $comment->comment }}
                    </p>
                  </div>
                  <hr>
                  @endif
                @endforeach
                @can('isUser')
                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                  <form action="/comments" method="post">
                    @csrf
                    <div class="d-flex flex-start w-100">
                      <img class="rounded-circle shadow-1-strong me-3"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                        height="40" />
                      <div class="form-outline w-100">
                        <textarea class="form-control" id="textAreaExample" rows="4"
                          style="background: #fff;" name="comment"></textarea>
                      </div>
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                    </div>
                    <div class="float-end mt-2 pt-1">
                      <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                    </div>
                  </form>
                </div>
                @endcan
              </div>
            </div>
          </div>
        </div>
      </section>

      <a href="/reviews" class="text-decoration-none d-block mt-3">Back to posts</a>
    </div>
  </div>
</div>
@endsection

