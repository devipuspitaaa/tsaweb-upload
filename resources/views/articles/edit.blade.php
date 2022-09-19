<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <div class="container">
        <h2>Edit Artikel</h2>
        <form method="POST" action="/articles/{{$article->id}}" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}">
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}">
                <label for="content">Content</label>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Feature Image</label>
                <input name="image" class="form-control" type="file" id="image"><br>
                <img width="150px" src="{{asset('storage/'.$article->featured_image)}}" alt="">
            </div><br>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Ubah Data</button>
            </div>
        </form>
    </div>
</body>

</html>
