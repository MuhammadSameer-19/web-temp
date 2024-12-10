<x-web_layout>
<!-- <div class="container-fluid bg-img p-page">
            <div class="row w-full text-center pp-div-1">
                <div class="h1 me-auto mb-5 col-12 md:pt-0 pt-16">All Products</div>
                <div class="row w-full flex justify-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/project-13.jpg")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">E-Commerce Webpage</div>
                            <div class="card-subtitle p">Html Css React.Js Tailwind.Css</div>    
                            <div class="card-subtitle p">$2200</div>
                        </div>
                        <a href="./detail" class="btn product_buy_btn">View</a>
                        <a href="./order" class="btn product_buy_btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/project-11.png")}}" alt="" class="card-img-top" >
                        <div class="card-body">
                            <div class="card-title h4">E-Commerce Webpage</div>
                            <div class="card-subtitle p">Wordpress</div>
                                <div class="card-subtitle p">$2000</div>
                        </div>
                        <a href="./detail" class="btn product_buy_btn">View</a>
                        <a href="./order" class="btn product_buy_btn">Buy Now</a>
                    </div>
                    </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/project-12.jpg")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">Blog Site</div>
                            <div class="card-subtitle p">Html Css React.Js Tailwind.Css</div>
                            <div class="card-subtitle p">$2000</div>
                        </div>
                        <a href="./detail" class="btn product_buy_btn">View</a>
                        <a href="./order" class="btn product_buy_btn">Buy Now</a>
                    </div>
                    </div>
                    </div>
            </div>
        </div> -->
        <!-- <div class="container-fluid bg-img p-page">
        <div class="table table-striped table-bordered">
                @foreach ($products as $item)
                  <div>
                    <div>{{$item->Pro_Name}}</div>
                    <div>{{$item->Pro_Detail}}</di>
                    <div>{{$item->Pro_Category}}</div>
                    <div>{{$item->Pro_Price}}</div>
                    <div><a href="{{url("Products/".$item->id."/update")}}" class="btn btn-success">Edit</a>
                    <a href="{{url("Products/".$item->id."/delete")}}" class=" btn btn-danger"
                    onclick="return confirm('Are You Sure?')"
                    >Delete</a></di>
                    </div>
                @endforeach  
        </div> -->
        <div class="bg-img flex flex-col justify-center place-items-center text-center">
            <form class=" mt-28 flex flex-row" role="search">
          <input class="form-control me-2" name="search" id="pro-search"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          <div id="pro-results" class="row mt-0">
                
            </div>
        </form>
        <div class="h1 mb-5 text-center pt-16 text-white">All Products</div>
        <div class="w-[90%] flex flex-wrap justify-center place-items-center gap-3">
            @foreach ($products as $pro)
            <div class="w-[75%] md:w-[30%] bg-black p-2 rounded-xl">
                        <img src={{$pro->Pro_Img}} alt="" class="rounded-xl h-[75%] w-full object-contain">
                        <div class="card-body text-white flex flex-col gap-1">
                            <div class="card-title h4">{{$pro->Pro_Name}}</div>
                            <div class="card-subtitle p">{{$pro->Pro_Detail}}</div>    
                            <div class="card-subtitle p">{{$pro->Pro_Catergory}}</div>
                        </div>
                        <a href="./detail" class="btn product_buy_btn">View</a>
                        <a href="{{url("product/".$pro->id."/order")}}" class="btn product_buy_btn">Buy Now</a>
                    </div>
            @endforeach
                    </div>
                    </div>
                    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#pro-search').on('keyup', function() {
                    let query = $(this).val();
                    if (query.length > 0) {
                        // Perform the AJAX request
                        $.ajax({
                            url: '{{ route('search') }}',
                            method: 'GET',
                            data: { query: query },
                            success: function(response) {
                                // Update the results section with the response
                                $('#pro-results').html(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    } else {
                        $('#pro-results').empty();
                    }
                });
            });
        </script>
    @endpush
            
</x-web_layout>
