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
            <h1 class="">Update Product</h1>
          </div>
          <div class="panel-body pt-5">
          <form action="{{url('Products/'.$product_det->id.'/update')}}" method="POST">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="Pro_Name" class="h4">Product Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Pro_Name"
                  name="Pro_Name"
                  value={{$product_det->Pro_Name}}
                />
                @error('Pro_Name')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="Pro_Detail" class="h4 pt-4">Detail</label>
                <div>
                  <label for="Word_Press" class="radio-inline"
                    ><input
                      type="radio"
                      name="Pro_Detail"
                      value="Word Press"
                      id="Word_Press"
                    />Word Press</label
                  >
                  <label for="React_Js" class="radio-inline"
                    ><input
                      type="radio"
                      name="Pro_Detail"
                      value="React Js"
                      id="React_Js"
                    />React Js</label
                  >
                  <label for="Html_Css" class="radio-inline"
                    ><input
                      type="radio"
                      name="Pro_Detail"
                      value="Html Css"
                      id="Html_Css"
                    />Html Css</label
                  >
                  @error('Pro_Detail')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="Pro_Category" class="h4 pt-4">Category</label>
                <div class="flex">
                  <label for="E-Commerce" class="radio-inline"
                    ><input
                      type="radio"
                      name="Pro_Category"
                      value="E-Commerce"
                      id="E-Commerce"
                    />E-Commerce</label
                  >
                  <label for="Blog" class="radio-inline"
                    ><input
                      type="radio"
                      name="Pro_Category"
                      value="Blog"
                      id="Blog"
                    />Blog Site</label
                  >
                  @error('Pro_Category')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="Pro_Price" class="h4 pt-4">Product Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="Pro_Price"
                  name="Pro_Price"
                  value={{$product_det->Pro_Price}}
                />
                @error('Pro_Price')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="Pro_Img" class="h4 pt-4">Product Image Url</label>
                <input
                  type="text"
                  class="form-control"
                  id="Pro_Img"
                  name="Pro_Img"
                  value={{$product_det->Pro_Img}}
                />
                @error('Pro_Img')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class=" pt-4 justify-center flex flex-col">
              <input type="submit" class="btn  btn-lg sub_btn " />
              <a href="{{url('Products')}}" class="btn sub_btn btn-lg">Back</a>
              </div>
            </form>
          </div>
          <div class="panel-footer text-right"></div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</x-web_layout>