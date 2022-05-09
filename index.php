<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Launch Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="errorHandler.js"></script>
        <script>
          onerror = errorHandler;
          console.log("stuff");
        </script>
    </head>
    <body>
        <h3>Set all the ship setting correctly and you can launch</h3>

      On  <input type="radio" value="On" checked id="ECOn" name="EC"> Off <input type="radio" value="Off" id="ECOff" name="EC">Engine Coolant<br>
        <input type="number" name="Burn" id="Burn">Fuel Burn Time In launch(1-100%)<br>
        <input type="text" name="Code" id="Code">Code
        <button id="Launch" name="Launch" onclick="return TakeOff();">Launch</button>
        <div>
            <ul id="status">

            </ul>
        </div>
    </body>
</html>
