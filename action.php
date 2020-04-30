<!DOCTYPE html>
<html>
    <head>
        <body>
            Your project id is <?php echo $_POST["id"]; ?><br>
            Your project name is: <?php echo $_POST["name"]; ?><br>
            Date of Inspection : <?php echo $_POST["Doi"]; ?><br>
            Your Type of inspection is <?php echo $_POST["id"]; ?><br>
           <?php $aDoor = $_POST['checkbox']; 
            for($i=0; $i < $N; $i++)
            {
                echo($aDoor[$i] . " ");
            }
            ?>
            <div id="map"></div>
            <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
                });
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
            async defer></script>


        </body>
    </head>