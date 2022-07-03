@foreach($diaries as $diary)
    <div class="card m-1" id="div_{{ $diary->id }}">
        <div class="card-header d-flex justify-content-between">
            <h4>{{ $diary->title }}</h4>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button" value="{{ $diary->id }}">Edit</button></li>
                    <li><button class="dropdown-item" type="button" value="{{ $diary->id }}" onclick="diaryDelete('{{ $diary->id }}')">Delete</button></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <p>{{ $diary->description }}</p>
            <small>{{ $diary->created_at }}</small>
        </div>
    </div>
@endforeach