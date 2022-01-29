@extends('frontend.layouts.master')
@section('content')
    <section class="about_top_banner">

        <div class="container">
                <div class="col-md-12">
                    <h1>Drishya Restaurant</h1>
                    {{-- <img src="images/test.jpeg"> --}}
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="height:400px;">
                            <ul class="carousel-indicators">
                                @foreach ($sliders as $key => $slides)
                                    <li data-target="#demo" data-slide-to="{{ $key }}"
                                        class=" @if ($key == 0) active @endif"></li>
                                @endforeach
                            </ul>
                            @foreach ($sliders as $key => $slides)
                                <div class="carousel-item @if ($key == 0) active @endif">
                                    <img class="d-block w-100" src="{{ $slides->images[0]->file_path }}" alt="First slide" style="height:399px;">
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    {{-- {!! $about->description !!} --}}
                    <br>
                    <br>
                    <h2>
                        Drishya
                        </h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                            Aldus PageMaker including versions of Lorem Ipsum.

                        </p>
                </div>
        </div><!-- container -->

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-10 mx-auto col-12 text-center mb-3">
                    <h1 class="mt-0 text-primary">Our Menu</h1>
                </div>
                <div class="col-12 mt-4">
                    <h3 class="text-center">Cocktails</h3>
                    <hr class="accent my-5">
                </div>
                <div class="card-columns">
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$10</span>
                        <h6 class="text-truncate">Chocolate Martini</h6>
                        <p class="small">Tito's Vodka and White Créme de Cacao dusted with hand shaved chocolate.
                        </p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$9</span>
                        <h6 class="text-truncate">Summer Breeze Martini</h6>
                        <p class="small">Hendrick’s Gin, St. Germain Elderflower Liqueur and Brancot Sauvignon
                            Blanc with a floater of Cristalino Cava Brut.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$9</span>
                        <h6 class="text-truncate">Sweet Heat Margarita</h6>
                        <p class="small">Jalapeño infused tequila, triple sec, pineapple juice, lime.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$10</span>
                        <h6 class="text-truncate">Prickly Pear</h6>
                        <p class="small">New Amsterdam Vodka and Pear liquer in a sugar rimmed glass.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$9</span>
                        <h6>Classic Martini</h6>
                        <p class="small">Seagrams Gin, Dry Vermouth, pickle juice, olive juice.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$10</span>
                        <h6 class="text-truncate">Ruby Red Rosemary Refresher</h6>
                        <p class="small">House infused rosemary vodka, St. Germaine Elderflower liqueur, grapefruit
                            juice and a splash of soda.</p>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <h3 class="text-center">Starters</h3>
                    <hr class="accent my-5">
                </div>
                <div class="card-columns">
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$9.95</span>
                        <h6 class="text-truncate">Fried Shrimp</h6>
                        <p class="small">Sustainably raised Argentine red shrimp, fried golden brown and served
                            with chipotle mayonnaise for dipping.</p>
                        <span class="font-weight-bold small">Add marinara or tartar: $2</span>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$8.95</span>
                        <h6 class="text-truncate">Tuscan Bruschetta</h6>
                        <p class="small">Crusty sliced Italian bread topped with basil, extra virgin olive oil,
                            chopped tomatoes, garlic and fresh mozzarella cheese. Baked until it is nice and crispy and
                            served with a side of balsamic reduction.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$7.95</span>
                        <h6 class="text-truncate">Quesadilla</h6>
                        <p class="small">Jack and cheddar cheese, chopped mild green chilies in a pan grilled flour
                            tortilla. Served with sour cream, guacamole and fresh pico de gallo.</p>
                        <div class="font-weight-bold small">Add Chili: $2</div>
                        <div class="font-weight-bold small">Add BBQ Pulled Pork: $2</div>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$9.95</span>
                        <h6 class="text-truncate">Wings</h6>
                        <p class="small">A dozen of our crispy, tasty chicken wings. Select 1 of our 4 seasonings.
                        </p>
                        <div class="font-weight-bold small">Classic Sweet BBQ</div>
                        <div class="font-weight-bold small">Hot Buffalo Sauce</div>
                        <div class="font-weight-bold small">Sriracha Honey Fish Sauce</div>
                        <div class="font-weight-bold small">Scorching Hot Habanero</div>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$8.95</span>
                        <h6 class="text-truncate">Ultimate Nacho Platter</h6>
                        <p class="small"> House made corn tortilla chips, melted cheddar-Jack cheese, mild Anaheim
                            chile salsa, refried beans, guacamole &amp; sour cream</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$10</span>
                        <h6 class="text-truncate">Stuffed Clams</h6>
                        <p class="small">Three large stuffies with chopped clams, medium spiced chouriço Portuguese
                            sausage, chopped bacon, onions, peppers, a touch of crushed red pepper, bread crumbs and spices,
                            topped with bacon.</p>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <h3 class="text-center">Main Plates</h3>
                    <hr class="accent my-5">
                </div>
                <div class="card-columns">
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$17.95</span>
                        <h6 class="text-underline">Fat Tuesday Salad</h6>
                        <p class="small">New Orleans style hot sliced Cajun chicken breast with mixed greens,
                            tomatoes, cucumbers and hard-cooked eggs with warm, spicy honey mustard dressing topped with
                            crumbled bacon..</p>
                        <span class="font-weight-bold small"></span>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$25.95</span>
                        <h6>Braised Boneless Beef Short Ribs</h6>
                        <p class="small"> Braised low and slow, resulting in meat that is deeply flavored,
                            sublimely succulent and tender as can be imagined, yet maintaining a wonderful texture. Served
                            on a bed of garlic smashed potatoes. Served with choice of additional side. </p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$15.95</span>
                        <h6>Jambalaya</h6>
                        <p class="small"> Shrimp, chicken, andouille sausage, rice and traditional jambalaya
                            vegetables and spices. Garnished with sweet red and yellow pepper confetti.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$12.95</span>
                        <h6>Stuffed Jumbo Shrimp</h6>
                        <p class="small"> Crabmeat, chopped scallops, mushrooms, Jack cheese, seasoned bread
                            crumbs, white wine and butter stuffing. </p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$25.95</span>
                        <h6>Sirloin Steak Tips</h6>
                        <p class="small"> Chunks of tender, flavorful marinated sirloin sautéed with garlic and
                            black pepper, finished with button mushrooms and a beef demi-glace. (Degree of doneness will
                            vary slightly due to variations in size of chunks). Accompanied by Gorgonzola spiked garlic
                            smashed potatoes. Served with choice of additional side.</p>
                    </div>
                    <div class="card card-body">
                        <span class="float-right font-weight-bold">$14.95</span>
                        <h6>Pasta Pomodoro</h6>
                        <p class="small"> Fresh roasted garlic rigatoni with a light sauce of extra virgin
                            California olive oil, fresh chopped tomatoes, basil, garlic, black pepper and a dash of crushed
                            red pepper. Garnished with sun dried tomatoes and shaved parmesan. </p>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <hr class="accent my-5">
                </div>
            </div>
        </div>
    </section><!-- about_top_banner -->

@endsection
