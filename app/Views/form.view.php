<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="validate" >
        <fieldset>
            <legend>Zu dir</legend>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name"><br>
            <label for="num_person">Anzahl Personen:</label>
            <input min="0" type="number" name="num_persons" id="num_persons"><br>
    
            <label for="phone">Telefon:</label>
            <input type="text" name="phone" id="phone"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br>
        </fieldset>

        <fieldset>
            <legend>Zum Hotel</legend>

            <label for="shuttlebus">Shuttle-Bus-Service:</label> 
            <input value="1" type="checkbox" name="shuttlebus" id="shuttlebus"><br>

            <label>In welchem Hotel möchten Sie übernachten?</label> <br>
            <label for="Davos" style="margin-left: 25px;">InterContinental Davos</label>
            <input type="radio" name="hotel" id="Davos" value="InterContinental Davos"><br>
            <label for="Belvédère" style="margin-left: 25px;">Steinberger Grandhotel Belvédère</label>
            <input type="radio" name="hotel" id="Belvédère" value="Steinberger Grandhotel Belvédère"><br>
        </fieldset>

        
        
        <fieldset>
            <legend>Sonstiges</legend>
            <label for="activity"> Was möchten Sie am Abend unternehmen?</label>
            <select name="activity" id="activity">
                <option value="Kein Abendprogramm">Kein Abendprogramm</option>
                <option value="Billardturnier">Billardturnier</option>
                <option value="Bowlingturnier">Bowlingturnier</option>
                <option value="Weindegustation">Weindegustation</option>
                <option value="Asiatischer Kochkurs">Asiatischer Kochkurs</option>
                <option value="Tanzkurs für Webentwickler">Tanzkurs für Webentwickler</option>
                <option value="Ying &amp; Yang Yoga Einsteigerkurs">Ying &amp; Yang Yoga Einsteigerkurs</option>
            </select><br>
            
            <label for="note">Bemerkung?</label>
            <textarea name="note" id="note" rows="3"></textarea><br>
        </fieldset>
            
        <input type="submit" name="submit" value="Anmelden">

    </form>
</body>
</html>