<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="{{asset('https://www.w3schools.com/w3css/4/w3.css')}}">
<script src="{{asset('https://www.w3schools.com/lib/w3.js')}}"></script>
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Amatic+SC')}}">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Amatic SC", sans-serif
    }
</style>
<body>
<!-- Start Content -->
<div id="home" class="w3-content">

    <!-- Navbar (Sits on top) -->
    <div class="w3-top w3-bar w3-xlarge w3-black w3-opacity-min">
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    </div>


    <!-- Menu -->
    <div id="menu" class="w3-container w3-black w3-xxlarge w3-padding-64">
        <h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
        <div class="w3-row w3-center w3-border w3-border-dark-grey ">
            <a>
                <div id="PizzaId" class="w3-third w3-padding-large w3-red">Pizza</div>
            </a>
            <a>
                <div id="PastaId" class="w3-third w3-padding-large w3-red">Pasta</div>
            </a>
            <a>
                <div id="StarterId" class="w3-third w3-padding-large w3-red">Starters</div>
            </a>
        </div>

        <div id="Pizza">
            @foreach($data['Pizza'] as $SubMenu)
                <div id="Pizza" class="w3-container w3-white w3-padding-30">
                    <h1><b>{{$SubMenu->name}}</b><span
                            class='w3-right w3-tag w3-dark-grey w3-round'>${{$SubMenu->price}}</span></h1>
                    <hr>
                </div>
            @endforeach
        </div>
        <div id="Pasta" style="display: none">
            @foreach($data['Pasta'] as $SubMenu)
                <div class="w3-container w3-white w3-padding-30">
                    <h1><b>{{$SubMenu->name}}</b><span
                            class='w3-right w3-tag w3-dark-grey w3-round'>${{$SubMenu->price}}</span></h1>
                    <hr>
                </div>
            @endforeach
        </div>
        <div id="Starters" style="display: none">

            @foreach($data['Starters'] as $SubMenu)
                <div class="w3-container w3-white w3-padding-30">
                    <h1><b>{{$SubMenu->name}}</b><span
                            class='w3-right w3-tag w3-dark-grey w3-round'>${{$SubMenu->price}}</span></h1>
                    <hr>
                </div>
            @endforeach
        </div>

    </div>

    <!-- End Content -->
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        $("#PizzaId").click(function () {
            $("#Pasta").hide();
            $("#Starters").hide();
            $("#Pizza").show();
        });

        $("#PastaId").click(function () {
            $("#Pizza").hide();
            $("#Starters").hide();
            $("#Pasta").show();
        });

        $("#StarterId").click(function () {
            $("#Pasta").hide();
            $("#Pizza").hide();
            $("#Starters").show();
        });
    });


</script>
</body>
</html>
