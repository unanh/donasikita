<!DOCTYPE html>
<html>

<head>
    <title>donasi kita
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'semantic/style.css'?> ">
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/slider.css">

    <script src="semantic/jquery.min.js" type="text/javascript"></script>
    <script src="semantic/semantic.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ui.dropdown').dropdown()
                ;
        });

    </script>

</head>

<style type="text/css">
    body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
    }

    .hidden.menu {
        display: none;
    }


    .masthead .logo.item img {
        margin-right: 1em;
    }

    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }

    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }



    .ui.vertical.stripe h3 {
        font-size: 2em;
    }

    .ui.vertical.stripe .button+h3,
    .ui.vertical.stripe p+h3 {
        margin-top: 3em;
    }

    .ui.vertical.stripe .floated.image {
        clear: both;
    }

    .ui.vertical.stripe p {
        font-size: 1.33em;
    }

    .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
    }

    .quote.stripe.segment {
        padding: 0em;
    }

    .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .footer.segment {
        padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
            display: none !important;
        }

        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
            display: none;
        }

        .secondary.pointing.menu .toc.item {
            display: block;
        }

        .masthead.segment {
            min-height: 350px;
        }

        .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
        }

        .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
        }
    }
</style>
</head>

<body id="root">
    <div class="ui large top fixed hidden menu">
        <div class="ui container">
           <a class="active item">Home</a>
           <div class="ui  pointing dropdown link item">
                        <span class="text">Categories</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="header">Categories</div>
                            
                            <div class="item">pendidikan</div>
                            <div class="item">Kesehatan</div>
                        </div>
                    </div>
            <a class="item">Donasi</a>
            <a class="item">Donature</a>
            
            <div class="right menu">
                <div class="item"><a class="ui button">Log in</a></div>
                <div class="item"><a class="ui primary button">Sign Up</a></div>
            </div> 
        </div>
    </div>

    <!--Page Contents-->
    <div class="pusher">
        <div class="ui inverted blue vertical masthead center aligned segment">
            <div class="ui container">

                <div class="ui large secondary menu">
                    <a class="item">
                        Home
                    </a>
                    <div class="ui  pointing dropdown link item">
                        <span class="text">Categories</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="header">Categories</div>
                            
                            <div class="item">Pendidikan</div>
                            <div class="item">Kesehatan</div>
                        </div>
                    </div>
                    <a class="item">
                        Donasi
                    </a>
                    <a class="item">
                       Donature
                    </a>
                    <div class="right item">
                        <a class="ui inverted button">Log in</a>
                        <a class="ui inverted button">Sign Up</a>

                    </div>
                </div>


            </div>

            <ul class=" slides">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-6" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-2" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-3" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-4" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-5" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-5" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-4" class="prev">&#x2039;</label>
                        <label for="img-6" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-6" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
                    </div>
                    <div class="nav">
                        <label for="img-5" class="prev">&#x2039;</label>
                        <label for="img-1" class="next">&#x203a;</label>
                    </div>
                </li>

                <li class="nav-dots">
                    <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                    <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                    <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                    <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                    <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                    <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                </li>
            </ul>

        </div>
    </div>