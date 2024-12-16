<x-web_layout>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
<div class="container-fuild p-20 w-full flex place-items-center justify-center bg-img">
              <div class="w-full pt-4 justify-center text-center flex flex-col">
                <h1 class="text-white p-5 ">Web Temp Admin Panel</h1>
              <a href="{{url('Admin/add')}}" class="btn product_buy_btn btn-lg ">Add Product</a>
              <a href="{{url('Admin/view')}}" class="btn product_buy_btn btn-lg">View Product</a>
              <a href="{{url('Admin/view')}}" class="btn product_buy_btn btn-lg">Update Product</a>
              <a href="{{url('Admin/view')}}" class="btn product_buy_btn btn-lg">Delete Product</a>
              <a href="{{url('Admin/orders')}}" class="btn product_buy_btn btn-lg">View Orders</a>
              </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</x-web_layout>