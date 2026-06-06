<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compute</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="background-color: #844343; font-family:'Courier New', Courier, monospace; color:aqua; text-align:center">

    <div>
        <h1 class="header head-sum">Sum: {{$sum}}</h1>
        <h2>Difference: {{$difference}}</h2>
        <h2 id="labelProduct">Product: {{$product}}</h2>
        <h2 class="header">Quotient: {{$quotient}}</h2>
    </div>

    <div class="label-container">
        <h1 class="header head-sum">Sum: {{$sum}}</h1>
    </div>

    <div class="container bg-primary">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>

    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>

    <div>
        <label for="range1" class="form-label">Example range</label>
        <input type="range" class="form-range" id="range1">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-6 border-2 border">
                <h1>Text</h1>
            </div>

            <div class="col-md-4 col-lg-6 border-2 border">
                <h1>Text</h1>
            </div>

            <div class="col-md-4 col-lg-6  border-2 border">
                <h1>Text</h1>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Lorem Ipsum</h1>
            </div>

            <div class="col-lg-12">
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p>What is Lorem Ipsum?</p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                </div>

                                <div class="col-lg-6">
                    <p>What is Lorem Ipsum?</p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                </div>

                           <div class="row">
                <div class="col-lg-6">
                    <p>What is Lorem Ipsum?</p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                </div>

                    <div class="col-lg-6">
                    <p>What is Lorem Ipsum?</p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        </p>
                </div>
            </div>
        </div>
    </div>
                        <i class="bi bi-0-square"></i>
</body>
<style>
    .header {
        background-color: aliceblue;
        text-align: left;
    }

    .head-sum {
        background-color: #000b41;
    }

    #labelProduct {
        background-color: aquamarine;
    }

    h1 {
        font-size: 100px;
    }

    .head-sum,
    .header,
    #labelProduct {
        border-style: solid;
        border-width: 5px;
    }

    div.label-container .header {
        color: black;
    }
</style>

</html>