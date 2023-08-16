<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Todo List</title>
</head>
<body>
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-11 col-md-8 col-lg-6 mx-auto my-auto p-3 shadow-lg">
                <h1 class="text-center">Todo List</h1>

                <form action="/todo/add" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" name="todo" type="text" placeholder="What Do You Want To Do ?">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Save</button>
                      </div>

                      <ul class="list-group list-group-flush overflow-auto" style="max-height: 350px">
                            @foreach ($todos as $todo)

                                <li class="list-group-item d-flex justify-content-between {{ ($todo->status)?  'list-group-item-success':'' }}">
                                    <a class="btn btn-light" href="/todo/delete/{{ $todo->id}}"><i class="bi bi-trash3"></i></a>
                                    @if($todo->status)
                                        <del>{{ $todo->todo }}</del>
                                    @else 
                                        {{ $todo->todo }}
                                    @endif
                                    <a class="btn btn-light" href="/todo/update/{{ $todo->id}}"><i class="bi bi-{{ ($todo->status)?  'arrow-counterclockwise':'check-lg' }}"></i></a>
                                </li>
                            @endforeach 
                     </ul>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>