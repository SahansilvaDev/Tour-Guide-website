<!DOCTYPE html>
<html>
<head>
    <title>City Search</title>
</head>
<body>
    <form action="main.php" id="citySearchForm">
        <label for="cityName">Enter City Name:</label>
        <input type="text" id="cityName" name="cityName">
        <input type="submit" value="Search">
    </form>
   
    
    <script >

       document.addEventListener("DOMContentLoaded", function () {
    const citySearchForm = document.getElementById("citySearchForm");

    citySearchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        
        // Get the city name from the form input
        const cityName = document.getElementById("cityName").value;
        
        // Redirect to main.php with the cityName as a parameter
        window.location.href = `main.php?cityName=${cityName}`;
    });
});


    </script>
</body>
</html>
