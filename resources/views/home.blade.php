<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://static.vecteezy.com/system/resources/previews/020/989/231/non_2x/busy-daily-task-to-do-list-planning-checklist-on-notepad-paper-or-agreement-concept-illustration-free-vector.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            MyTodo
          </a>
        </div>
      </nav>

      <div style="padding-right:20%; padding-left:20%; padding-top:25px;">

        <h1 style="margin-bottom: 18px;
    text-align: center; color:darkkhaki;">Add Todo</h1>

        <form action="/save-data" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter your todo title....">
            </div>
            <div style="color: red">
              @error('title')
                  {{$message}}
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Tell about your todo in breif..."></textarea>
            </div>
            <div style="color: red">
              @error('description')
                  {{$message}}
              @enderror

      </div>


      <div style="text-align: center">
        <button type="submit" class="btn btn-info">Add Todo</button>
      </div>
    </form>
</div>

<hr style="height=2px;">

<div style= "padding-left: 20%;
padding-right: 18%;
padding-top: 50px;">

<h1 style="text-align: center; color:darkkhaki; padding-bottom:18px; ">All Todos</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Added Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>



      @foreach ($alltodos as $todo)



      <tr>
        <th scope="row">{{$todo->id}}</th>
        <td>{{$todo->title}}</td>
        <td>{{$todo->description}}</td>
        <td>{{$todo->created_at}}</td>
        <td>
          <a href="update-data/{{$todo->id}}"><button type="button" class="btn btn-success">Update</button></a>
          <a href="delete-todo/{{$todo->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>