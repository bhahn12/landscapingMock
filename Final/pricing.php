<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lawnstylesheet.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRICING</title>
    </head>
<body class = "Container">
    <?php include "Navigation.php" ?>

    <header>
    <h2>Please click on the size of your lawn that you would like cut.</h2>
    </header>
    <table class = "table center"> 
        <thead>
            <tr>
                <th>Size</th>
                <th>Price</th>
             
            </tr>
        </thead>
        <tbody>
            <tr data-href = "checkout1.php" >
                <td>.25 acres or less</td>
                <td>$30</td>
              
            </tr>
            <tr data-href = "checkout2.php" >
                <td>Between .26 and .50 Acres</td>
                <td>$45</td>
               
            </tr>
            <tr data-href = "checkout3.php" >
                <td>Between .51 and .75 Acres</td>
                <td>$60</td>
               
            </tr>
            <tr data-href = "checkout4.php" >
                <td>Between .76 and 1 Acres</td>
                <td>$80</td>
                
            </tr>
    </table>

    <script>
            document.addEventListener("DOMContentLoaded", () =>{
                const rows = document.querySelectorAll("tr[data-href");
                rows.forEach(row => {
                    row.addEventListener("click" , () => {
                        window.location.href = row.dataset.href
                    })
                })
            })
    </script>
<p class = space></p>
<footer>
    <p>Company &copy; Bob's Lawn Care. All rights reserved.</p>
    </footer>
    </body>
    </html>