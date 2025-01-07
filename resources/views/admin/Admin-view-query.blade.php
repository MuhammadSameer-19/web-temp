<x-web_layout>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
<div class="container-fuild p-20 w-full flex place-items-center justify-center bg-img">
      <div class="row col-md-6 col-md-offset-3">
        <div class="text-white panel panel-primary">
          <div class="panel-heading text-center">
            <h1 class="">View Query</h1>
          </div>
          <div class="panel-body pt-5 pb-20">
          
          <table class="table table-striped table-bordered">
            <tr>
              <th>Email</th>
              <th>Query</th>
            </tr>
                @foreach ($query as $item)
                  <tr>
                    <td>{{$item->Email}}</td>
                    <td>{{$item->Query}}</td>
                  </tr>
                @endforeach
          </table> 
              <a href="{{url('Admin')}}" class="btn sub_btn btn-lg">Back</a>
              </div>
            </form>
          </div>
          <div class="panel-footer text-right"></div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header"></div>
      <div class="toast-body"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</x-web_layout>