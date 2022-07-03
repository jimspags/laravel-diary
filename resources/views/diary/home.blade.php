
@extends('master')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    <nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Diary, <span>{{ auth()->user()->name}}</span></a>
        <div class="d-flex">
            <form action="{{ route('diary.logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout" class="btn btn-danger">
            </form>
        </div>
    </div>
    </nav>
    <div class="row justify-content-center">
        <div class="col-5 border p-2 mt-1">
            <form class="border border-primary p-2 bg-primary bg-opacity-50 rounded-3" id="add_diary_form">
                <div class="mb-3 d-flex justify-content-between">
                    <input type="text" class="form-control w-50" placeholder="Diary Title" name="title" id="titleAdd">            
                    <button type="submit" class="btn btn-success">Add Diary</button>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" cols="30" rows="2" style="resize:none;" placeholder="Description" name="description" id="descriptionAdd"></textarea>
                </div>
            </form>
            <div id="diary-data">
                @include('partials.diary')
            </div>
            <div class="text-primary ajax-load " role="status" style="display:none;">
                <h5 class="text-center">Load More</h5>
            </div>
        </div>
    </div>

</div>



<script>

    function diaryDelete(id) {
        let url = "{{ route('diary.delete', ':id') }}";
        url = url.replace(':id', id);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf_token']").attr('content')
            }
        });
            
        $.ajax({
            type: "DELETE",
            url: url,
            dataType: "json",
            success: function(response) {
                if(response.status == 200) {

                    $("#div_"+response.id).fadeOut();
                    $("#div_"+response.id).fadeOut("slow");
                    $("#div_"+response.id).fadeOut(1000);
                    setInterval(2000, function() {
                        $("#div_"+response.id).remove()
                    })
                }
            }
        });
    }




    $(document).ready(function() {
        //Fetch Diaries
        function loadDiaries(page) {
            $.ajax({
                url: "?page=" + page,
                type: "GET"
            })
            .done(function(data) {
                if(data.html == "") {
                    $(".ajax-load").html('<h5 class="text-center">No more diary found</h5>');
                    return;
                }
                $("#diary-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError){
                console.log("Server not responding");
            });
        }

        let page = 1;
        $(".ajax-load").show();

        $(".ajax-load").click(function () {
            page++;
            loadDiaries(page);
        })






        //Add Diary Form
        $("#add_diary_form").submit(function(e) {
            e.preventDefault();
            //Set CSRF token
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $("meta[name='csrf_token']").attr('content')
                }
            });

            let data = {
                title: $("input[name='title']").val(),
                description: $("textarea[name='description']").val()
            }
            console.log(data)
            $.ajax({
                type: "POST",
                url: "{{ route('diary.store') }}",
                data: data,
                dataType: "json",
                success: function(response) {
                    if(response.status == 400) { 
                        $("#titleAdd").attr('class',`form-control w-50 ${response.error.title ? "is-invalid" : ""}`)
                        $("#descriptionAdd").attr('class',`form-control ${response.error.description ? "is-invalid" : ""}`)
                    }

                    if(response.status == 200) {
                        $("#diary-data").prepend(`\
                        <div class="card m-1" id="div_`+ response.id +`">\
                            <div class="card-header d-flex justify-content-between">\
                                <h4>` + response.diary.title + `</h4>\
                                <div class="dropdown">\
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>\
                                    <ul class="dropdown-menu">\
                                        <li><button class="dropdown-item" type="button"">Edit</button></li>\
                                        <li><button class="dropdown-item" type="button" value="`+ response.id +`" id="deleteDiary" onclick="diaryDelete('${response.id}')">Delete</button></li>\
                                    </ul>\
                                </div>\
                            </div>\
                            <div class="card-body">\
                                <p>` + response.diary.description + `</p>\
                                <small>` + response.created_at + `</small>\
                            </div>\
                        </div>\
                        `);
                    }
                }
            });

        });
    });
</script>
@endsection