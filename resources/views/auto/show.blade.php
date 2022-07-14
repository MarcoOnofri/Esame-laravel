@extends('adminlte::page')

@section('content')

<h1 class="text-center mt-3 mb-3">{{ $auto->title }} | Dettagli auto</h1>
<hr class="mt-0 mb-2 " style="border: solid 0.5px">
<br>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">

            <div class="container d-flex m-2 p-2" style="flex-direction:column;">
                <img class = "img-fluid" src="/images/{{ $auto->picture }}"  alt="...">
                <div class="container m-2 p-2">
                  <h2>{{ $auto->title }}</h2>
                  <br>
                  <h3>Prezzo: €{{ $auto->price }}</h3>
                  <hr  style="border: solid 0.5px">
                  <p>{{ $auto->description }}</p>
                  <a href="{{ route('auto.index') }}" class="btn btn-success">Torna alla lista</a>
                </div>
              </div>

        </div>

        <div class="col-12 col-md-3">

        <div class="container mt-3 p-2">
              

              <form action="" method="POST">
                @csrf

                <input type="hidden" id="id" name="id" value="{{ $auto->id }}">

                <div class="mb-3">
                    <label for="comment" class="form-label">Commento</label>
                    <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Valutazione</label>
                    <input type="number" class="form-control" name="rating" id="rating" placeholder="Enter Rating">
                </div>

                  <button  id="addCommentBtn" class="btn btn-success"> <a style="color:#fff" href="#">Invia</a></button>

            </form>
         
          </div>
<br><br>
          <h3 >Commenti</h3>

          <div class="comments p-2 m-2 bg-white">
          <ul id="unordered">
       
       </ul>
            
          </div>
         
        

        </div>

</div>
</div>


  
<script>
        var post= document.getElementById("addCommentBtn");
post.addEventListener("click", function(){
    var commentBoxValue= document.getElementById("comment").value;
    var ratingBoxValue= document.getElementById("rating").value;
    var li = document.createElement("li");
    var text = document.createTextNode("(" + ratingBoxValue + ")" + commentBoxValue );
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);

});
    </script>




@endsection