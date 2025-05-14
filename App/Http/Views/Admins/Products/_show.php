<div class="container mt-2 p-2 rounded text-body-emphasis bg-body-secondary shadow">
    <div class="row m-2">
        <!-- Product Images -->
        <div class="col-md-7 mb-3">
            <!-- Carousel -->
            <section>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel Indicators -->
                    <!--
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Image 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Image 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Image 3"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"
                            aria-label="Image 4"></button>
                    </div>
                    -->
                    <!-- Carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item" v-for="produktImage in images.produktImages" :key="produktImage.id">
                            <img class="object-fit-contain border rounded" :src="produktImage.src" alt="">
                        </div>
                    </div>
                    <!-- Carousel Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

        </div>
        <!-- Product Details -->
        <div class="col-md-5 mx-auto">
            <!-- Name -->
            <h2 class="mb-3"><?= $show['name'] ?></h2>
            <!-- Category and Brand -->
            <div class="d-inline-flex">
                <span class="bagde text-bg-light mx-1">
                    <i class="bi bi-tag"></i>
                    <?= $show['ctg_name'] ?>
                </span>
                <span class="bagde text-bg-light mx-1">
                    <i class="bi bi-c-circle"></i>
                    <?= $show['b_name'] ?>
                </span>
            </div>
            <!-- Price -->
            <div class="mb-3">
                <span class="h4 me-2"><i class="fa-solid fa-brazilian-real-sign"></i> <?= currency($show['price']) ?></span>
                <span class="text-muted"><s><?= $show['name'] ?></span>
            </div>
            <!-- Rate -->
            <div class="mb-3">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
                <span class="ms-2">4.5 (120 reviews)</span>
            </div>
            <!-- Description -->
            <p class="lead mb-3"><?= $show['description'] ?></p>
            <!-- Colors -->
            <div class="mb-3">
                <h5>Colors: <?= $show['clr_name'] ?></h5>
                <div class="d-flex flex-wrap justify-items-center">
                    <div v-for="kleur in produktShowed.produkt?.kleurs" class="shadow me-2 mb-1 px-1"
                        :class="`${data.chooseKleur?.id === kleur.id ? 'border border-danger border-2 rounded-end' : ''}`"
                        :title="kleur.name" :style="{
                backgroundColor: kleur.name,
                cursor: 'pointer',
                width: '30px',
                height: '30px'
              }" @click="setChoosenKleur(kleur)">
                    </div>
                </div>
            </div>
            <!-- Sizes -->
            <div class="mb-3">
                <h5>Sizes: SIZE</h5>
                <div class="d-flex flex-wrap justify-items-start">
                    <button v-for="maat in produktShowed.produkt?.maats" class="btn border shadow me-2 px-1"
                        :class="`${data.chooseMaat?.id === maat.id ? ' btn-danger rounded-end' : ''}`" :key="maat.id"
                        :title="maat.name" @click="setChoosenMaat(maat)">
                        {{ maat.name }}
                    </button>
                </div>
            </div>
            <!-- In or Off Stock -->
            <div>
                <span class="bagde bg-success shadow rounded px-2 mb-3">
                    <?= ($show['quantity'] > 2) ? 'In Stock' : 'Out of Stock' ?>
                </span>
            </div>
            <!-- Quantity -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" class="form-control shadow" id="quantity" value="1" min="<?= ($show['quantity'] < 2) ? '' : '' ?>"
                    max="<?= ($show['quantity'] > 2) ? 'disabled' : '' ?>" style="width: 80px;">
            </div>
            <!-- Buttons to Add to Cart and Add to Whishlis -->
            <button class="btn btn-danger btn-lg shadow mb-3 me-2">
                <i class="bi bi-cart-plus"></i> Add to Cart
            </button>

            <a href="/administrators/products" class="btn btn-outline-secondary btn-lg shadow mb-3 me-2">Back to products</a>
            
        </div>
    </div>
</div>