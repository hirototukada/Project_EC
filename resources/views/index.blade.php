<!DOCTYPE html>
<html lang="ja">

<head>
</head>

<body>
    <div id="app">
        @include('common.header')

        <header class="bg-white py-5 border-bottom">
            <div class="container-fluid px-4 px-lg-5 my-5 pt-3">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder  "><img class="" src=""></h1>
                </div>
            </div>
        </header>

        <section class="py-5 border-bottom">
            <div class="container">
                <div class=" d-flex justify-content-center py-5">
                    <h2 class=" border-bottom border-dark">Category</h2>
                </div>
                <div class=" row d-flex justify-content-around">
                    @foreach ($categories as $category)
                        <div class="col-sm-6 col-lg-4 ">
                            <a class="" href="">
                                <div>
                                    <h3 class="text-white ">{{ $category->name }}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-5 "id='area1'>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($products as $product)
                        <div class="col col-sm-6 col-lg-3 my-3 ">
                            <a class="text-decoration-none" href="">

                                <div class="card h-100">
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                                            <!-- Product price-->
                                            ¥{{ $product->price }}
                                        </div>
                                    </div>

                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark bottom">
            <div class="container">
                <p class="m-0 text-center text-white ">Copyright &copy; Atelier Marry 2022</p>
            </div>
        </footer>

    </div>
</body>

</html>
