<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>EcoZen | Home</title>
</head>

<body>
    <div class=" container-fluid">
        <div class=" row main_image_">
            <div class=" d-flex flex-column justify-content-center align-items-center align-items-lg-start col-12 main_image">
                <h1 class="text-white ms-4 fw-bold">Lorem ipsum dolor sit amet</h1>
                <p class="text-white ms-4 fs-5">adipisicing elit. Qui debitis aspernatur veniam! Cum esse ea nemo <br> possimus provident ab excepturi voluptas molestias assumendas,<br> deserunt corrupti delectus at nulla sit asperiores nisi quidem est <br> autem quidem. Aperiam ad corrupti esse possimus. <br> Culpa, adipisci! Dicta optio dolores fugit odio tempora ab </p>
            </div>
            <div class=" col-10 bg-primary offset-1 rounded-3 vector shadow-lg d-flex flex-row justify-content-start align-items-start ps-5 pt-4" style="height: 40vh; position: absolute; margin-top: 75vh;">
                <h1 class=" fw-bold text-dark">Welcome !</h1>
            </div>
            <div class=" col-12 col-lg-11 offset-lg-1 images">
                <div class=" row d-flex flex-row justify-content-lg-end justify-content-center" style="height: 100%;">
                    <div class="col-3 image1 rounded-3 shadow-lg"></div>
                    <div class="col-3 mx-lg-5 mx-2 image2 rounded-3 shadow-lg"></div>
                    <div class="col-3 image3 rounded-3 me-lg-5 shadow-lg"></div>
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-10 col-lg-8 offset-1 offset-lg-2 d-flex flex-column align-items-center">
                <h1 class=" text-decoration-underline text-black fw-bold">Why Choose Us ?</h1>
                <p class=" mt-4 text-center fs-4 text-black-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint odio qui maiores perferendis neque provident sit eaque quos vitae, eligendi, a ad officia recusandae sapiente fuga odit ipsum rem optio!</p>
            </div>
        </div>
        <div class=" row">
            <div class="col-12 d-flex flex-lg-row flex-column justify-content-evenly align-items-center py-5">
                <div class=" rounded rounded-circle d-flex flex-row justify-content-center align-items-center mt-5 mt-lg-0 category1" onmouseover="view1();" onmouseleave="hide1();">
                    <div class="category_1 rounded rounded-circle d-flex flex-row justify-content-center align-items-center d-none" id="overlay1">
                        <h3 class=" text-center text-white">Vegetables</h3>
                    </div>
                </div>
                <div class=" rounded rounded-circle d-flex flex-row justify-content-center align-items-center my-5 my-lg-0 category2" onmouseover="view2();" onmouseleave="hide2();">
                    <div class="category_1 rounded rounded-circle d-flex flex-row justify-content-center align-items-center d-none" id="overlay2">
                        <h3 class=" text-center text-white">Fruits</h3>
                    </div>
                </div>
                <div class=" rounded rounded-circle d-flex flex-row justify-content-center align-items-center fs-5 mb-5 mb-lg-0 category3" onmouseover="view3();" onmouseleave="hide3();">
                    <div class="category_1 rounded rounded-circle d-flex flex-row justify-content-center align-items-center d-none" id="overlay3">
                        <h3 class=" text-center text-white">Animal Based Products</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row">
            <div class=" col-12 bg-info d-flex flex-lg-row flex-column justify-content-center align-items-center py-4">
                <div class=" col-8 col-lg-3 bg-warning d-flex flex-column justify-content-center align-items-center py-3">
                    <div class=" bg-primary process_image1 mb-4"></div>
                    <h5 class="text-center fw-bold text-black">Lorem, ipsum.</h5>
                    <p class=" text-center text-black-50 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quod.</p>
                </div>
                <div class=" py-3 col-8 col-lg-3 bg-warning mx-lg-4 my-4 my-lg-0 d-flex flex-column justify-content-center align-items-center">
                    <div class=" bg-primary process_image2 mb-4"></div>
                    <h5 class="text-center fw-bold text-black">Lorem, ipsum.</h5>
                    <p class=" text-center text-black-50 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quod.</p>
                </div>
                <div class=" py-3 col-8 col-lg-3 bg-warning d-flex flex-column justify-content-center align-items-center">
                    <div class=" bg-primary process_image3 mb-4"></div>
                    <h5 class="text-center fw-bold text-black">Lorem, ipsum.</h5>
                    <p class=" text-center text-black-50 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quod.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>

</html>