<div class="card mb-3" style="width: 600px; max-width:100%;">
    <div class="card-header bg-white border-0">
        <i class="bi bi-person-circle fs-5 me-2"></i>
        <span class="fw-bold">{{ $post->user->name }}</span>
    </div>

    <img src="{{ asset($post->image) }}" class="card-img rounded-0">

    <div class="card-body">
        <p class="card-text">
            <span class="fw-bold">{{ $post->user->name }}</span>
            {{ $post->description }}
        </p>
    </div>

</div>