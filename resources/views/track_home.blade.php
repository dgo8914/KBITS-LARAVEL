<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Learnig tracks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>

<body>
    

    <nav class="navbar fixed-bottom navbar-light bg-primary">
        <a class="navbar-brand">Kbits</a>

        <label for="check">
            <li class="fas fa-bars" id="sidebar_btn"></li>
        </label>

        <form class="form-inline">
            <input type="button" id="log" class="btn btn-danger" onclick="location = 'salir.php'" value="Logout">
        </form>
    </nav>

    <!--search-->
    <form>
        <input type="text" name="search" value="">
        <button type="submit" name="button">SEARCH</button>
    </form>


    <!--sidebar start-->
    <div class="sidebar">
       
        <a href="home"><i class="fas fa-desktop"></i><span>Home</span></a>
        <a href="tracks_home"><i class="fas fa-table"></i><span>Tracks</span></a>
        <a href="packs_home"><i class="fas fa-bezier-curve"></i><span>Packs</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>support</span></a>
        <a href="Setting"><i class="fas fa-cogs"></i><span>Settings</span></a>  
    </div> 


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
