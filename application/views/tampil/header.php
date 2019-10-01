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
           <a class="item" href="<?php echo base_url()?>" >Home </a>
           <div class="ui  pointing dropdown link item">
                        <span class="text">Categories</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="header">Categories</div>
                            
                            <div class="item">pendidikan</div>
                            <div class="item">Kesehatan</div>
                        </div>
                    </div>
            <a class="item" href="<?php echo base_url().'donasi'?>">Donasi</a>
            <a class="item">Donature</a>
            
            <div class="right menu">
                <div class="item"><a class="ui button" href="<?php echo base_url().'us_login'?>">Log in</a></div>
                <div class="item"><a class="ui primary button" href="<?php echo base_url().'register'?>">Sign Up</a></div>
            </div> 
        </div>
    </div>

    <!--Page Contents-->
    <div class="pusher">
        <div class="ui inverted blue vertical masthead center aligned segment">
            <div class="ui container">

                <div class="ui large secondary menu">
                    <a class="item" href="<?php echo base_url()?>">
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
                    <a class="item" href="<?php echo base_url().'donasi'?>">
                        Donasi
                    </a>
                    <a class="item" >
                       Donature
                    </a>
                    <div class="right item">
                        <a class="ui inverted button" href="<?php echo base_url().'us_login'?>">Log in</a>
                        <a class="ui inverted button" href="<?php echo base_url().'register'?>">Sign Up</a>

                    </div>
                </div>


            </div>

            

        </div>
    </div>