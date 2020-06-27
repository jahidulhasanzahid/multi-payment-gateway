<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Multi Payment Gateway</title>
        <!-- bootstrap  -->
        <!-- CSS only CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .full-height {
                height: 100vh;
                padding: 20px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h5{
                color: brown;
            }
            h4{
                color: blue;
            }
            .card-img-top{
                -webkit-box-shadow: 0px 13px 15px -3px rgba(29,55,77,0.17);
                -moz-box-shadow: 0px 13px 15px -3px rgba(29,55,77,0.17);
                box-shadow: 0px 13px 15px -3px rgba(29,55,77,0.17);
                border-radius: 20px;
            }
            .card{
                border-radius: 20px;
            }
            .image{
                width:30px; 
                margin-left:30px;
            }
            .modal-content{
                margin-top: 50%;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="row">
                
                <div class="col-md-5">
                    <div class="m-b-md">
                        <h3>Multi Payment Gateway</h3> <hr>
                    </div>
                </div>
                <div class="col-md-1 offset-1">

                </div>
                <div class="col-md-5">
                    <div class="card-group">
                        <div class="card">
                          <img src="{{ asset('image/adidas-shoe.jpg') }}" class="card-img-top" alt="adidas-shoe.jpg" style="height: 385px;">
                          <div class="card-body">
                            <h5 class="card-title">4D RUN 1.0 PARLEY SHOES</h5>
                            <h4>Price $180</h4>
                            <p class="card-text">A running shoe created for the future. With input from 4000 athletes, the design of the 3D-printed midsole was devised. </p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">pay with </small> 
                            <a href="{{ url('/checkout/paypal') }}"><img src="{{ asset('image/icon/paypal.webp') }}" alt="payla" class="image"></a>
                            <a href="" data-toggle="modal" data-target="#exampleModalStripe"><img src="{{ asset('image/icon/stripe.webp') }}" alt="payla" class="image"></a>
                            <a href="{{ url('/checkout/mollie') }}"><img src="{{ asset('image/icon/mollie.png') }}" alt="payla" class="image"></a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

        <!-- stripe modal      -->
        <div class="modal fade" id="exampleModalStripe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">4D RUN 1.0 PARLEY SHOES for Price $180</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-footer">

                <form action="{{ url('/checkout/stripe') }}" method="post">
                    @csrf
                    <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_51GyekPA1bjxouOwwZxyVU2UuGAEJsVI0ZtmvDE6r957OPTfUhrLKthn9vZrX2qSjjgzSLwnDKOSXaWV4dGs0cMeG00cpnQvwbm"
                    data-amount="18000"
                    data-name="4D RUN 1.0 PARLEY SHOES"
                    data-description="4D RUN 1.0 PARLEY SHOES"
                    data-local="auto"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-currency="usd">
                    </script>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                </div>
            </div>
            </div>
        </div>
          <!-- stripe modal  -->


        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
